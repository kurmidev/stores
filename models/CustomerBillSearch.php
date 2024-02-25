<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CustomerBill;
use app\components\Constants as C;
use app\components\ConstFunc as F;
use yii\helpers\Html;

/**
 * CustomerBillSearch represents the model behind the search form of `app\models\CustomerBill`.
 */
class CustomerBillSearch extends CustomerBill
{
    public $invoice_date_start;
    public $invoice_date_end;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'customer_id', 'is_paid', 'created_by', 'updated_by'], 'integer'],
            [['bill_no', 'invoice_date', 'created_at', 'updated_at',"invoice_date_start","invoice_date_end"], 'safe'],
            [['amount', 'discount', 'tax', 'total_amount'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = CustomerBill::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'customer_id' => $this->customer_id,
            'invoice_date' => $this->invoice_date,
            'amount' => $this->amount,
            'discount' => $this->discount,
            'tax' => $this->tax,
            'total_amount' => $this->total_amount,
            'is_paid' => $this->is_paid,
            'bill_no' => $this->bill_no,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        if (!empty($this->invoice_date_start) && !empty($this->invoice_date_end)) {
            $query->andWhere(["between", $query->alias . "invoice_date", date("Y-m-d 00:00:00", strtotime($this->invoice_date_start)), date("Y-m-d 23:59:59", strtotime($this->invoice_date_end))]);
        }

        return $dataProvider;
    }

    public function advanceSearch($type = "")
    {
        return [
            ["label" => "Invoice No", "attribute" => "bill_no", "type" => "text"],
            ["label" => "Invoice Date", "attribute" => "invoice_date", "type" => "date_range"],
            ["label" => "Paid", "attribute" => "is_paid", "type" => "dropdown", "list" => C::INVOICE_STATUS],
        ];
    }

    public function displayColumn()
    {
        return [
            //['class' => 'yii\grid\SerialColumn'],
            "customer.name",
            "customer.mobile_no",
            "invoice_date",
            [
                "attribute" => "bill_no", "label" => "Invoice No",
                "content" => function ($model) {
                    if (F::is_export()) {
                        return $model->challan_no;
                    } else {
                        return  Html::a($model->bill_no, \Yii::$app->urlManager->createUrl(["bill/print-bill", 'id' => $model->id]), ['title' => 'Print ' . $model->bill_no]);
                    }
                },
            ],
            "amount",
            "discount",
            "tax",
            "total_amount",
            [
                'attribute' => 'is_paid', 'label' => 'Paid',
                'content' => function ($model) {
                    if (F::is_export()) {
                        return $model->is_paid > C::INVOICE_PAID ? "PAID" : ($model->is_paid > C::INVOICE_PARTIAL_PAID ? "Partial Paid" : "Pending");
                    } else {
                        return F::getBillLabel($model->is_paid);
                    }
                },
                'filter' => C::LABEL_STATUS,
            ]
        ];
    }
}
