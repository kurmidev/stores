<?php

namespace app\forms;
use app\models\BaseForm;
use app\models\Customer;
use app\models\CustomerBill;
use app\models\CustomerBillDetails;
use app\models\Products;
use yii\base\DynamicModel;
use app\components\ConstFunc as F;
use PhpParser\Node\Stmt\Else_;

class BillForm extends BaseForm{

    public $id;
    public $name;
    public $address;
    public $mobile_no;
    public $gst_no;
    public $alternate_number;
    public $items;
    public $bill_no;


    public function scenarios(){
        return [
            CustomerBill::SCENARIO_CREATE => ["name","address","mobile_no","alternate_number","items","gst_no"],
            CustomerBill::SCENARIO_UPDATE => ["name","address","mobile_no","alternate_number","items","gst_no"],
        ];
    }

    public function rules(){
        $items = (new DynamicModel(['product_id', 'product_name','quantity', 'discount_type','rate', 'discount', 'amount','serial_number',"warranty_end_date"]))
        ->addRule(['product_id', 'product_name','quantity','warranty_end_date'],"required")
        ->addRule(['product_id', 'quantity', 'discount','discount_type'],"integer")
        ->addRule([ 'product_name','serial_number'],'string');

        return [
            [["name","address","mobile_no","items"],"required"],
            [["name","address","mobile_no","alternate_number","gst_no"],"string"],
            [['items'], 'ValidateMulti', 'params' => ['isMulti' => TRUE, 'ValidationModel' => $items, 'allowEmpty' => true]],
        ];
    }

    public function save(){
        if(!$this->hasErrors()){
            if(!empty($this->id)){
                return $this->update();
            }else{
                return $this->create();
            }
        }
        return false;
    }

    public function update(){
        $customer_id = $this->createUpdateCustomer();
        if($customer_id){
            $this->updateInvoiceDetails($this->id);
            return true;
        }
        return false;
    }

    public function create(){
        $customer_id = $this->createUpdateCustomer();
        if($customer_id){
            $invoice =  $this->createTempInvoice($customer_id);
            $this->createInvoiceDetails($invoice);
            return true;
        }
        return false;
    }

    public function updateInvoiceDetails($id){
        $invoice = CustomerBill::findOne(['id'=>$id]);
        if(($invoice instanceof CustomerBill) && !empty($this->items)){
            $amount = $discount = $tax = $total_amount =0;
            foreach($this->items as $item){
                $product = Products::findOne(['id'=>$item['product_id']]);
                $model = CustomerBillDetails::findOne(["bill_id"=>$invoice->id,"customer_id"=>$invoice->customer_id,"product_id"=>$item['product_id']]);
                if(($model instanceof CustomerBillDetails) && ($product instanceof Products)){
                    $model->scenario = CustomerBillDetails::SCENARIO_UPDATE;
                    $model->bill_id= $invoice->id;
                    $model->customer_id= $invoice->customer_id;
                    $model->product_id= $item["product_id"];
                    $model->quantity= $item["quantity"];
                    $model->discount_type= $item["discount_type"];
                    $model->rate= $item["rate"];
                    $model->discount= $item["discount"];
                    $model->serial_number= $item["serial_number"];
                    $model->amount= $product->price * $model->rate;
                    $model->product_name = $product->name;
                    $model->warranty_end_date = $item['warranty_end_date'];
                    $model->tax= F::calculateTax($model->amount- $model->discount,18);
                    $model->total_price= $model->amount - $model->discount + $model->tax;
                    if($model->validate() && $model->save()){
                        $amount += $model->amount;
                        $discount += $model->discount;
                        $tax += $model->tax;
                        $total_amount += $model->total_price;
                    }
                }
            }
            CustomerBill::updateAll(["amount"=>$amount,"discount"=>$discount,"tax"=>$tax,"total_amount"=>$total_amount],["id"=> $invoice->id]);
        }
    }

    public function createInvoiceDetails(CustomerBill $invoice){
        if(($invoice instanceof CustomerBill) && !empty($this->items)){
            $amount = $discount = $tax = $total_amount =0;
            foreach($this->items as $item){
                $product = Products::findOne(['id'=>$item['product_id']]);
                $model = CustomerBillDetails::findOne(["bill_id"=>$invoice->id,"customer_id"=>$invoice->customer_id,"product_id"=>$item['product_id']]);
                if((!$model instanceof CustomerBillDetails) && ($product instanceof Products)){
                    $model = new CustomerBillDetails(['scenario'=>CustomerBillDetails::SCENARIO_CREATE]);
                    $model->bill_id= $invoice->id;
                    $model->customer_id= $invoice->customer_id;
                    $model->product_id= $item["product_id"];
                    $model->quantity= $item["quantity"];
                    $model->discount_type= $item["discount_type"];
                    $model->rate= $item["rate"];
                    $model->discount= $item["discount"];
                    $model->serial_number= $item["serial_number"];
                    $model->amount= $product->price;
                    $model->product_name = $product->name;
                    $model->warranty_end_date = $item['warranty_end_date'];
                    $model->tax= F::calculateTax($model->amount- $model->discount,18);
                    $model->total_price= $model->amount - $model->discount + $model->tax;
                    if($model->validate() && $model->save()){
                        $amount += $model->amount;
                        $discount += $model->discount;
                        $tax += $model->tax;
                        $total_amount += $model->total_price;
                    }
                }
            }
            CustomerBill::updateAll(["amount"=>$amount,"discount"=>$discount,"tax"=>$tax,"total_amount"=>$total_amount],["id"=> $invoice->id]);
        }
    }

    public function createTempInvoice($customer_id){
        $model = new CustomerBill(['scenario'=>CustomerBill::SCENARIO_CREATE]);
        $model->customer_id =  $customer_id;
        $model->is_paid=0;
         $model->invoice_date = date("Y-m-d");
        $model->amount = $model->discount = $model->tax = $model->total_amount=0;
        if($model->validate() && $model->save()){
            $this->bill_no = $model->bill_no;
            return $model;
        }else{
            $this->addErrors($model->errors);
        }
        return false;
    }

    public function createUpdateCustomer(){
        $model = Customer::findOne(['mobile_no'=>$this->mobile_no]);
        if(!$model instanceof Customer){
            $model =  new Customer(['scenario'=>Customer::SCENARIO_CREATE]);
            $model->mobile_no = $this->mobile_no;
        }else{
            $model->scenario = Customer::SCENARIO_UPDATE;
        }
        $model->name = $this->name;
        $model->alternate_number = $this->alternate_number;
        $model->address = $this->address;
        //$model->gst_no = $this->gst_no;
        if($model->validate() && $model->save()){
            return $model->id;
        }else{
            $this->addErrors($model->errors);
        }
        return false;
    }
}