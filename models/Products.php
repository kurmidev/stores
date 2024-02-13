<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string|null $name
 * @property string $code
 * @property int $category_id
 * @property int $brand_id
 * @property int $price
 * @property int $vendor_id
 * @property string|null $description
 * @property string|null $status
 * @property string $created_at
 * @property int|null $created_by
 * @property string|null $updated_at
 * @property int|null $updated_by
 *
 * @property Brand $brand
 * @property Category $category
 * @property ProductAttr[] $productAttrs
 */
class Products extends \app\models\BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    public function scenarios()
    {
        return [
            self::SCENARIO_CREATE => ['code', 'category_id', 'brand_id', 'price', 'name', 'price'],
            self::SCENARIO_UPDATE => ['code', 'category_id', 'brand_id', 'price', 'name', 'price'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'category_id', 'brand_id', 'price', 'vendor_id'], 'required'],
            [['category_id', 'brand_id', 'created_by', 'updated_by', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'code', 'description'], 'string', 'max' => 255],
            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brand::class, 'targetAttribute' => ['brand_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id']],
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
            'code' => 'Code',
            'category_id' => 'Category',
            'brand_id' => 'Brand',
            'vendor_id' => 'Vendor',
            'price' => 'Price',
            'description' => 'Description',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * Gets query for [[Brand]].
     *
     * @return \yii\db\ActiveQuery|BrandQuery
     */
    public function getBrand()
    {
        return $this->hasOne(Brand::class, ['id' => 'brand_id']);
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery|CategoryQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    /**
     * Gets query for [[ProductAttrs]].
     *
     * @return \yii\db\ActiveQuery|ProductAttrQuery
     */
    public function getProductAttrs()
    {
        return $this->hasMany(ProductAttr::class, ['product_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return ProductsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProductsQuery(get_called_class());
    }

    public function getAttList()
    {
        $attr = [];
        if (!empty($this->productAttrs)) {
            foreach ($this->productAttrs as $a) {
                $attr[] = [
                    "key" => $a["attr_name"],
                    "value" => $a["attr_value"],
                ];
            }
        }
        return $attr;
    }
}
