<?php

namespace app\forms;

use app\models\BaseForm;
use app\models\Brand;
use app\models\Category;
use app\models\ProductAttr;
use app\models\Products;

class ProductForm extends BaseForm
{

    public $id;
    public $name;
    public $category_id;
    public $brand_id;
    public $price;
    public $code;
    public $attr;
    public $description;
    public $vendor_id;
    public $status;

    public function scenarios()
    {
        return [
            Products::SCENARIO_CREATE => ['id', 'name', 'code', 'brand_id', 'category_id', 'amount', 'attr', 'description','vendor_id','price','status'],
            Products::SCENARIO_UPDATE => ['id', 'name', 'code', 'brand_id', 'category_id', 'amount', 'attr', 'description','vendor_id','price','status'],
        ];
    }

    public function rules()
    {
        return [
            [["name", "brand_id", "category_id", "amount", "attr",'vendor_id','price'], 'required'],
            [["brand_id", "category_id",'status','vendor_id'], 'integer'],
            [["name", "code"], 'string'],
            ['brand_id', 'exist', 'targetClass' => Brand::class, 'targetAttribute' => ['brand_id' => 'id']],
            ['category_id', 'exist', 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id']],
            [["price"], 'double'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'code' => 'Code',
            'price' => "Price",
            'category_id' => 'Category',
            'brand_id' => 'Brand',
            'description' => 'Description',
            'status' => 'Status',
            "vendor_id"=>"Vendor"
        ];
    }

    public function save()
    {
        if (!empty($this->id)) {
            return $this->update();
        } else {
            return $this->create();
        }
        return false;
    }

    public function create()
    {
        $model = new Products(['scenario' => Products::SCENARIO_CREATE]);
        $model->name = $this->name;
        $model->code = $this->code;
        $model->category_id = $this->category_id;
        $model->brand_id = $this->brand_id;
        $model->price = $this->price;
        $model->description = $this->description;
        $model->status =  $this->status;
        $model->vendor_id = $this->vendor_id;
        if ($model->validate() && $model->save()) {
            $this->assignAttributes($model->id);
            $this->id = $model->id;
            return true;
        }else{
            $this->addErrors($model->errors);
        }
        return false;
    }

    public function update()
    {
        $model = Products::findOne(['id' => $this->id]);
        if ($model instanceof Products) {
            $model->scenario = Products::SCENARIO_UPDATE;
            $model->name = $this->name;
            $model->code = $this->code;
            $model->category_id = $this->category_id;
            $model->brand_id = $this->brand_id;
            $model->description = $this->description;
            $model->status = $this->status;
            if ($model->validate() && $model->save()) {
                $this->assignAttributes($model->id);
                $this->id = $model->id;
                return true;
            }else{
                $this->addErrors($model->errors);
            }
        }
        return false;
    }

    public function assignAttributes($productId){
        if(!empty($this->attr)){
            ProductAttr::deleteAll(['product_id'=>$productId]);
            foreach($this->attr as $attr){
                $model = new ProductAttr(['scenario'=>ProductAttr::SCENARIO_CREATE]);
                $model->product_id = $productId;
                $model->attr_name = $attr['key'];
                $model->attr_value = $attr['value'];
                if($model->validate() && $model->save()){

                }
            }
        }
    }
}
