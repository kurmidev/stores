<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_attr".
 *
 * @property int $id
 * @property int $product_id
 * @property string $attr_name
 * @property string $attr_value
 * @property string $created_at
 * @property int|null $created_by
 * @property string|null $updated_at
 * @property int|null $updated_by
 *
 * @property Products $product
 */
class ProductAttr extends \app\models\BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_attr';
    }

    public function scenarios(){
        return [
            self::SCENARIO_CREATE=>['product_id', 'attr_name', 'attr_value'],
            self::SCENARIO_UPDATE =>['product_id', 'attr_name', 'attr_value']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'attr_name', 'attr_value'], 'required'],
            [['product_id', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['attr_name', 'attr_value'], 'string', 'max' => 255],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Products::class, 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'attr_name' => 'Attr Name',
            'attr_value' => 'Attr Value',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
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
     * @return ProductAttrQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProductAttrQuery(get_called_class());
    }
}
