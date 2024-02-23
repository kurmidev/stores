<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer_bill".
 *
 * @property int $id
 * @property string $bill_no
 * @property int $customer_id
 * @property string|null $invoice_date
 * @property float|null $amount
 * @property float|null $discount
 * @property float|null $tax
 * @property float|null $total_amount
 * @property int|null $is_paid
 * @property string $created_at
 * @property string|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 *
 * @property Customer $customer
 */
class CustomerBill extends \app\models\BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer_bill';
    }

    public function scenarios()
    {
        return [
            self::SCENARIO_CREATE => ['bill_no', 'customer_id', 'is_paid', 'invoice_date', 'amount', 'discount', 'tax', 'total_amount'],
            self::SCENARIO_UPDATE => ['bill_no', 'customer_id', 'is_paid', 'invoice_date', 'amount', 'discount', 'tax', 'total_amount'],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id'], 'required'],
            [['customer_id', 'is_paid', 'created_by', 'updated_by'], 'integer'],
            [['invoice_date', 'created_at', 'updated_at'], 'safe'],
            [['amount', 'discount', 'tax', 'total_amount'], 'number'],
            [['bill_no'], 'string', 'max' => 255],
            [['bill_no'], 'unique'],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::class, 'targetAttribute' => ['customer_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bill_no' => 'Bill No',
            'customer_id' => 'Customer ID',
            'invoice_date' => 'Invoice Date',
            'amount' => 'Amount',
            'discount' => 'Discount',
            'tax' => 'Tax',
            'total_amount' => 'Total Amount',
            'is_paid' => 'Is Paid',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * Gets query for [[Customer]].
     *
     * @return \yii\db\ActiveQuery|CustomerQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::class, ['id' => 'customer_id']);
    }

    /**
     * Gets query for [[Customer]].
     *
     * @return \yii\db\ActiveQuery|CustomerQuery
     */
    public function getBillDetails()
    {
        return $this->hasMany(CustomerBillDetails::class, ['bill_id' => 'id']);
    }

    /**
     * Gets query for [[Payment Details]].
     *
     * @return \yii\db\ActiveQuery|CustomerQuery
     */
    public function getPayment()
    {
        return $this->hasMany(Payment::class, ['bill_id' => 'id']);
    }


    /**
     * {@inheritdoc}
     * @return CustomerBillQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CustomerBillQuery(get_called_class());
    }

    public function beforeSave($insert)
    {
        if ($insert) {
            $this->bill_no = !empty($this->bill_no) ? $this->bill_no : $this->generateSequence("JPR", "CUSTBILL");
        }

        return parent::beforeSave($insert);
    }

    public function getMobile_no(){
        return !empty($this->customer)?$this->customer->mobile_no:"";
    }

    public function getName(){
        return !empty($this->customer)?$this->customer->name:"";
    }

    public function getGst_no(){
        return !empty($this->customer)?$this->customer->gst_no:"";
    }

    public function getAddress(){
        return !empty($this->customer)?$this->customer->address:"";
    }

    public function getAttList()
    {
        $result = [];
        if (!empty($this->billDetails)) {
            foreach ($this->billDetails as $bill) {
                $result[] = [
                    "product_id" => $bill["product_id"],
                    "serial_number" => $bill["serial_number"],
                    "warranty_end_date" => $bill["warranty_end_date"],
                    "rate" => $bill["rate"],
                    "quantity" => $bill["quantity"],
                    "amount" => $bill["amount"],
                    "discount_type" => $bill["discount_type"],
                    "discount" => $bill["discount"],
                    "tax" => $bill["tax"],
                    "total_price" => $bill["total_price"],
                ];
            }
        }
        return $result;
    }
}
