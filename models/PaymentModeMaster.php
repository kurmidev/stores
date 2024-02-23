<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payment_mode_master".
 *
 * @property int $id
 * @property int $name
 * @property string|null $description
 * @property int $action_type
 * @property int $status
 * @property string $created_at
 * @property string|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 */
class PaymentModeMaster extends \app\models\BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment_mode_master';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'action_type','status'], 'required'],
            [[ 'action_type', 'status', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['description'], 'string', 'max' => 255],
        ];
    }

    public function scenarios(){
        return [
            self::SCENARIO_CREATE => ['name', 'action_type','status','description'],
            self::SCENARIO_UPDATE => ['name', 'action_type','status','description'],
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
            'description' => 'Description',
            'action_type' => 'Action Type',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * {@inheritdoc}
     * @return PaymentModeMasterQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PaymentModeMasterQuery(get_called_class());
    }
}
