<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payment_details".
 *
 * @property int $id
 * @property int $payment_id
 * @property int $bill_id
 * @property int $amount_paid
 * @property int $installment_no
 * @property float|null $principal_amount
 * @property float|null $interest
 * @property string $created_at
 * @property string|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 *
 * @property CustomerBill $bill
 * @property Payment $payment
 */
class PaymentDetails extends \app\models\BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment_details';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['payment_id', 'bill_id', 'amount_paid'], 'required'],
            [['payment_id', 'bill_id', 'amount_paid', 'installment_no', 'created_by', 'updated_by'], 'integer'],
            [['principal_amount', 'interest'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
            [['bill_id'], 'exist', 'skipOnError' => true, 'targetClass' => CustomerBill::class, 'targetAttribute' => ['bill_id' => 'id']],
            [['payment_id'], 'exist', 'skipOnError' => true, 'targetClass' => Payment::class, 'targetAttribute' => ['payment_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'payment_id' => 'Payment ID',
            'bill_id' => 'Bill ID',
            'amount_paid' => 'Amount Paid',
            'installment_no' => 'Installment No',
            'principal_amount' => 'Principal Amount',
            'interest' => 'Interest',
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
     * Gets query for [[Payment]].
     *
     * @return \yii\db\ActiveQuery|PaymentQuery
     */
    public function getPayment()
    {
        return $this->hasOne(Payment::class, ['id' => 'payment_id']);
    }

    /**
     * {@inheritdoc}
     * @return PaymentDetailsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PaymentDetailsQuery(get_called_class());
    }
}
