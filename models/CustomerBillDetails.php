<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer_bill_details".
 *
 * @property int $id
 * @property int $bill_id
 * @property int $customer_id
 * @property int $product_id
 * @property string|null $serial_number
 * @property string $product_name
 * @property float|null $rate
 * @property string|null $warranty_end_date
 * @property int|null $quantity
 * @property float|null $discount
 * @property int|null $discount_type
 * @property float|null $amount
 * @property float|null $tax
 * @property float|null $total_price
 * @property string $created_at
 * @property string|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 *
 * @property Customer $customer
 * @property Products $product
 */
class CustomerBillDetails extends \app\models\BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer_bill_details';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bill_id', 'customer_id', 'product_id', 'product_name'], 'required'],
            [['bill_id', 'customer_id', 'product_id', 'quantity', 'discount_type', 'created_by', 'updated_by'], 'integer'],
            [['rate', 'discount', 'amount', 'tax', 'total_price'], 'number'],
            [['warranty_end_date', 'created_at', 'updated_at'], 'safe'],
            [['serial_number', 'product_name'], 'string', 'max' => 255],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::class, 'targetAttribute' => ['customer_id' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Products::class, 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    public function scenarios(){
        return [
            self::SCENARIO_CREATE=>['bill_no', 'customer_id', 'product_id', 'product_name','quantity', 'discount_type','rate', 'discount', 'amount', 'tax', 'total_price','serial_number'],
            self::SCENARIO_UPDATE=>['bill_no', 'customer_id', 'product_id', 'product_name','quantity', 'discount_type','rate', 'discount', 'amount', 'tax', 'total_price','serial_number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bill_id' => 'Bill ID',
            'customer_id' => 'Customer ID',
            'product_id' => 'Product ID',
            'serial_number' => 'Serial Number',
            'product_name' => 'Product Name',
            'rate' => 'Rate',
            'warranty_end_date' => 'Warranty End Date',
            'quantity' => 'Quantity',
            'discount' => 'Discount',
            'discount_type' => 'Discount Type',
            'amount' => 'Amount',
            'tax' => 'Tax',
            'total_price' => 'Total Price',
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
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery|ProductsQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::class, ['id' => 'product_id']);
    }

    /**
     * {@inheritdoc}
     * @return CustomerBillDetailsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CustomerBillDetailsQuery(get_called_class());
    }
}
