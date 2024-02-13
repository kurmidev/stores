<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vendor".
 *
 * @property int $id
 * @property string|null $company
 * @property string $contact_person
 * @property string $mobile_no
 * @property string|null $telephone_no
 * @property string|null $address
 * @property string|null $email
 * @property string|null $gst_no
 * @property string|null $pan_no
 * @property string|null $status
 * @property string $created_at
 * @property int|null $created_by
 * @property string|null $updated_at
 * @property int|null $updated_by
 */
class Vendor extends \app\models\BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vendor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['contact_person', 'mobile_no'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by','status'], 'integer'],
            [['company', 'contact_person', 'mobile_no', 'telephone_no', 'address', 'email', 'gst_no', 'pan_no', ], 'string', 'max' => 255],
        ];
    }

    public function scenarios(){
        return [
            self::SCENARIO_CREATE => ['company', 'contact_person', 'mobile_no', 'telephone_no', 'address', 'email', 'gst_no', 'pan_no', 'status'],
            self::SCENARIO_UPDATE => ['company', 'contact_person', 'mobile_no', 'telephone_no', 'address', 'email', 'gst_no', 'pan_no', 'status'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company' => 'Company',
            'contact_person' => 'Contact Person',
            'mobile_no' => 'Mobile No',
            'telephone_no' => 'Telephone No',
            'address' => 'Address',
            'email' => 'Email',
            'gst_no' => 'Gst No',
            'pan_no' => 'Pan No',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * {@inheritdoc}
     * @return VendorQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new VendorQuery(get_called_class());
    }
}
