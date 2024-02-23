<?php

namespace app\forms;

use app\models\BaseForm;
use app\models\CustomerBill;
use app\models\Payment;
use app\components\Constants as C;
class PaymentForm extends BaseForm
{

    public $id;
    public $bill_id;
    public $receipt_no;
    public $amount;
    public $instrument_no;
    public $instrument_date;
    public $instrument_name;
    public $instrument_mode;
    public $roi;
    public $emi_month;
    public $emi_amount;

    public function scenarios(){
        return [
            Payment::SCENARIO_CREATE=>["bill_id", "instrument_no", "instrument_date", "instrument_name", "instrument_mode","amount","payment_details","roi","emi_month","emi_amount"],
            Payment::SCENARIO_UPDATE=>["bill_id", "instrument_no", "instrument_date", "instrument_name", "instrument_mode","amount","payment_details","roi","emi_month","emi_amount"],
        ];
    }

    public function rules()
    {
        return [
            [["bill_id", "instrument_no", "instrument_date", "instrument_name", "instrument_mode","amount"], "required"],
            [["bill_id", "instrument_mode","roi","emi_month","emi_amount"], "integer"],
            [["instrument_no", "instrument_name"], "string"],
            [['payment_details', 'instrument_date'], 'safe']
        ];
    }

    public function save()
    {
        if (!$this->hasErrors()) {
            if (!empty($this->id)) {
                return $this->update();
            } else {
                return $this->create();
            }
        }
        return false;
    }

    public function create()
    {
        $model = new Payment(['scenario' => Payment::SCENARIO_CREATE]);
        $model->bill_id = $this->bill_id;
        $model->amount = $this->amount;
        $model->instrument_no = $this->instrument_no;
        $model->instrument_date = $this->instrument_date;
        $model->instrument_name = $this->instrument_name;
        $model->instrument_mode = $this->instrument_mode;
        if ($model->validate() && $model->save()) {
            $this->id = $model->id;
            $this->settleBills($this->bill_id);
            $this->addPaymentDetails($model->id);
            return true;
        }else{
            $this->addErrors($model->errors);
        }
        return false;
    }

    public function update()
    {
        $model = Payment::findOne(['receipt_no' => $this->receipt_no, 'bill_id' => $this->bill_id]);
        if ($model instanceof Payment) {
            $model->amount = $this->amount;
            $model->instrument_no = $this->instrument_no;
            $model->instrument_date = $this->instrument_date;
            $model->instrument_name = $this->instrument_name;
            $model->instrument_mode = $this->instrument_mode;
            $model->meta_data = [
                "roi"=> $this->roi,
                "emi_amount"=> $this->emi_amount,
                "emi_month"=> $this->emi_month
            ];
            if ($model->validate() && $model->save()) {
                $this->id = $model->id;
                return true;
            }else{
                $this->addErrors($model->errors);
            }
        }
        return false;
    }

    public function settleBills($billId){
        $paidsum = Payment::find()->where(['bill_id'=>$billId])->sum('amount');
        $billAmount = CustomerBill::find()->where(['id'=>$billId])->sum('total_amount');
        if($paidsum>=$billAmount){
            CustomerBill::updateAll(['is_paid'=> C::INVOICE_PAID],['id'=>$billId]);
        }
    }

    public function addPaymentDetails($paymentid){
        

    }
}
