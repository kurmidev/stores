<?php

namespace app\components;

use app\forms\BillForm;
use app\models\Customer;
use app\models\CustomerBill;
use app\models\CustomerBillDetails;
use Yii;
use yii\base\Model;
use yii\db\Expression;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class Dashboard extends Model{

    public function __construct(){
        
    }

    public function getTotalCustomer()
    {
        return Customer::find()->count();
    }

    public function getTotalInvoice()
    {
        return CustomerBill::find()->sum('total_amount');
    }

    public function getTotalOutstanding()
    {
        return CustomerBill::find()->andWhere(["is_paid" => 0])->sum("total_amount");
    }

    public function getPartialPaid()
    {
        return CustomerBill::find()->andWhere(["is_paid" => 1])->sum("total_amount");
    }
    public function getTotalPaid()
    {
        return CustomerBill::find()->andWhere(["is_paid" => 2])->sum("total_amount");
    }

    public function getUnpaidInvoice(){
        return CustomerBill::find()->andWhere(["<","is_paid", 2])->count();
    }


    public function getPaidInvoice(){
        return CustomerBill::find()->andWhere(["is_paid"=> 2])->count();
    }

    public function getMonthlyOutstanding()
    {
        $model = CustomerBill::find()
            ->select(["invoice_date" => new Expression("left(invoice_date,7)"), "pending_count" => "count(id)", "pending_amount" => "sum(total_amount)"])
            ->groupBy([new Expression("left(invoice_date,7)")])
            ->asArray()->all();
        $response = [];
        foreach ($model as $d) {
            $response[] = [
                "invoice_month" => Html::a(date("Y-m-01", strtotime($d['invoice_date'])),
                            Yii::$app->urlManager->createUrl(["report/invoice-summary","CustomerBillSearch[invoice_date_start]"=>date("Y-m-01", strtotime($d['invoice_date'])),
                            "CustomerBillSearch[invoice_date_end]"=>date("Y-m-t", strtotime($d['invoice_date']))
                        ])),
                "pending_count" => $d['pending_count'],
                "pending_amount" => round($d['pending_amount'], 2)
            ];
        }
        return $response;
    }

    public function getCustomerInvoiceSummary()
    {
        $d = CustomerBill::find()
            ->select([
                "total_invoice" => "count(id)",
                "total_amount" => "sum(total_amount)",
                "pending_invoice" => "sum(case when is_paid<2 then 1 else 0 end )",
                "pending_invoice_amount" => "sum(case when is_paid<2  then total_amount else 0 end)",
                "paid_invoice" =>  "sum(case when  is_paid=2  then 1 else 0 end)",
                "paid_invoice_amount" => "sum(case when  is_paid=2  then total_amount else 0 end )",
            ])->asArray()->all();

        $d = !empty($d[0]) ? $d[0] : [];
        return  [
            "total_invoice" => !empty($d["total_invoice"]) ? Html::a(round($d["total_invoice"], 2),Yii::$app->urlManager->createUrl(["report/invoice-summary"])) : "0",
            "total_amount" => !empty($d["total_amount"]) ? round($d["total_amount"], 2) : "0",
            "pending_invoice" => !empty($d["pending_invoice"]) ?  Html::a(round($d["pending_invoice"], 2),Yii::$app->urlManager->createUrl(["report/invoice-summary","CustomerBillSearch[is_paid]"=>0,1])) : "0",
            "pending_amount" => !empty($d["pending_invoice_amount"]) ? round($d["pending_invoice_amount"], 2) : "0",
            "paid" => !empty($d["paid_invoice"]) ?  Html::a(round($d["paid_invoice"], 2),Yii::$app->urlManager->createUrl(["report/invoice-summary","CustomerBillSearch[is_paid]"=>2])) : "0",
            "paid_amount" => !empty($d["paid_invoice_amount"]) ? round($d["paid_invoice_amount"], 2) : "0",
        ];
    }

    public function getMonthlyPaidInvoice($is_link=true)
    {
        $model = CustomerBill::find()
            ->select(["invoice_date" => new Expression("left(invoice_date,7)"), "pending_count" => "count(id)", "pending_amount" => "sum(total_amount)"])
            ->andWhere(["is_paid"=>2])
            ->groupBy(['left(invoice_date,7)'])
            ->asArray()->all();
        $response = [];
        foreach ($model as $d) {
            $response[] = [
                "invoice_month" => $is_link? Html::a(date("Y-m-01", strtotime($d['invoice_date'])),
                            Yii::$app->urlManager->createUrl(["report/invoice-summary","CustomerBillSearch[invoice_date_start]"=>date("Y-m-01", strtotime($d['invoice_date'])),
                            "CustomerBillSearch[invoice_date_end]"=>date("Y-m-t", strtotime($d['invoice_date'])),
                        ])):date("Y-m-01", strtotime($d['invoice_date'])),   
                "pending_count" => $d['pending_count'],
                "pending_amount" => round($d['pending_amount'], 2)
            ];
        }
        return $response;
    }

    public function getMonthlyUnPaidInvoice($is_link=true)
    {
        $model = CustomerBill::find()
            ->select(["invoice_date" => new Expression("left(invoice_date,7)"), "pending_count" => "count(id)", "pending_amount" => "sum(total_amount)"])
            ->andWhere(["<","is_paid",2])
            ->groupBy(['left(invoice_date,7)'])
            ->asArray()->all();
        $response = [];
        foreach ($model as $d) {
            $response[] = [
                "invoice_month" => $is_link? Html::a(date("Y-m-01", strtotime($d['invoice_date'])),
                            Yii::$app->urlManager->createUrl(["report/invoice-summary","CustomerBillSearch[invoice_date_start]"=>date("Y-m-01", strtotime($d['invoice_date'])),
                            "CustomerBillSearch[invoice_date_end]"=>date("Y-m-t", strtotime($d['invoice_date'])),
                        ])):date("Y-m-01", strtotime($d['invoice_date'])),
                "pending_count" => $d['pending_count'],
                "pending_amount" => round($d['pending_amount'], 2)
            ];
        }
        return $response;
    }

    public function getTopFiveProductSold()
    {
        $model = CustomerBillDetails::find()->alias("a")
        ->select(['product_name', "rate" => "sum(a.rate)"])
        ->groupBy(['a.product_name'])
        ->orderBy(['rate' => SORT_DESC])
        ->asArray()->all();

        $resp = [];
        if (!empty($model)) {
            foreach ($model as $m) {
                $resp[] = [
                    "sum" => $m['rate'],
                    "product_name" => $m['product_name'],
                    "color" => sprintf('#%06X', mt_rand(0, 0xFFFFFF))
                ];
            }
        }
        return [
            "id" => "topfiveproduct",
            "labels" => !empty($resp) ? ArrayHelper::getColumn($resp, 'product_name') : [],
            "dataset" => !empty($resp) ? ArrayHelper::getColumn($resp, 'sum') : [],
            "color" => !empty($resp) ? ArrayHelper::getColumn($resp, 'color') : [],
        ];
    }

    public function getSummary(){
        $model = CustomerBill::find()->alias("a")
        ->leftJoin('customer c', 'a.customer_id=c.id')
        ->select([
            "invoice_date" => new Expression("left(a.invoice_date,7)"),
            "client_count" => "sum(case when left(a.invoice_date,7)=left(c.created_at,7) then 1 else 0 end)",
            "total_bills" => "count(a.id)",
            "total_amount" => "sum(total_amount)",
            "pending_bills" => "sum(case when a.is_paid<2 then 1 else 0 end)",
            "pending_amount" => "sum(case when a.is_paid<2 then total_amount else 0 end)",
            "collected_bills" => "sum(case when a.is_paid=2 then 1 else 0 end)",
            "collected_amount" => "sum(case when a.is_paid=2 then total_amount else 0 end)",
        ])
        ->groupBy(["left(a.invoice_date,7)"])->asArray()->all();

    return !empty($model) ? $model : [];
    }


}