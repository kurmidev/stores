<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payment".
 *
 * @property int $id
 * @property int $bill_id
 * @property string $receipt_no
 * @property float $amount
 * @property float|null $amount_received
 * @property string $instrument_no
 * @property string $instrument_date
 * @property string $instrument_name
 * @property string $instrument_mode
 * @property string $created_at
 * @property string $meta_data
 * @property string|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 *
 * @property CustomerBill $bill
 * @property PaymentDetails[] $paymentDetails
 */
class Payment extends \app\models\BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bill_id', 'amount', 'instrument_no', 'instrument_date', 'instrument_name','instrument_mode'], 'required'],
            [['bill_id', 'created_by', 'updated_by','instrument_mode'], 'integer'],
            [['amount', 'amount_received'], 'number'],
            [['instrument_date', 'created_at', 'updated_at'], 'safe'],
            [['receipt_no', 'instrument_no', 'instrument_name'], 'string', 'max' => 255],
            [['receipt_no'], 'unique'],
            [["meta_data"],'safe'],
            [['bill_id'], 'exist', 'skipOnError' => true, 'targetClass' => CustomerBill::class, 'targetAttribute' => ['bill_id' => 'id']],
        ];
    }

    public function scenarios(){
        return [
            self::SCENARIO_CREATE => ['bill_id', 'receipt_no', 'amount', 'instrument_no', 'instrument_date', 'instrument_name','meta_data'],
            self::SCENARIO_UPDATE => ['bill_id', 'receipt_no', 'amount', 'instrument_no', 'instrument_date', 'instrument_name','meta_data']
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
            'receipt_no' => 'Receipt No',
            'amount' => 'Amount',
            'amount_received' => 'Amount Received',
            'instrument_no' => 'Instrument No',
            'instrument_date' => 'Instrument Date',
            'instrument_name' => 'Instrument Name',
            'instrument_mode'=> 'Instrument Mode',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * Gets query for [[Bill]].
     *
     * @return \yii\db\ActiveQuery|CustomerBillQuery
     */
    public function getBill()
    {
        return $this->hasOne(CustomerBill::class, ['id' => 'bill_id']);
    }

    /**
     * Gets query for [[PaymentDetails]].
     *
     * @return \yii\db\ActiveQuery|PaymentDetailsQuery
     */
    public function getPaymentDetails()
    {
        return $this->hasMany(PaymentDetails::class, ['payment_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return PaymentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PaymentQuery(get_called_class());
    }

    public function beforeSave($insert){
        if($insert){
            $this->receipt_no = !empty($this->receipt_no) ? $this->receipt_no : $this->generateSequence("JPR", "CUSTRECIEPT");
        }
        return parent::beforeSave($insert);
    }
}
