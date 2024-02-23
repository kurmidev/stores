<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int $id
 * @property string $name
 * @property string $mobile_no
 * @property string|null $alternate_number
 * @property string|null $address
 * @property string|null $gst_no
 * @property string|null $email
 * @property string $created_at
 * @property string|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 *
 * @property CustomerBillDetails[] $customerBillDetails
 * @property CustomerBill[] $customerBills
 */
class Customer extends \app\models\BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'mobile_no'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by'], 'integer'],
            [['name', 'mobile_no', 'alternate_number', 'address','email','gst_no'], 'string', 'max' => 255],
        ];
    }

    public function scenarios(){
        return [
            self::SCENARIO_CREATE=>['name', 'mobile_no', 'alternate_number', 'address','email','gst_no'],
            self::SCENARIO_UPDATE=>['name', 'mobile_no', 'alternate_number', 'address','email','gst_no'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'mobile_no' => 'Mobile No',
            'alternate_number' => 'Alternate Number',
            'address' => 'Address',
            'email'=>"Email",
            'gst_no'=>"Gst No",
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * Gets query for [[CustomerBillDetails]].
     *
     * @return \yii\db\ActiveQuery|CustomerBillDetailsQuery
     */
    public function getCustomerBillDetails()
    {
        return $this->hasMany(CustomerBillDetails::class, ['customer_id' => 'id']);
    }

    /**
     * Gets query for [[CustomerBills]].
     *
     * @return \yii\db\ActiveQuery|CustomerBillQuery
     */
    public function getCustomerBills()
    {
        return $this->hasMany(CustomerBill::class, ['customer_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return CustomerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CustomerQuery(get_called_class());
    }
}
