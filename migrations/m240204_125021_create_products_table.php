<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m240204_125021_create_products_table extends Migration
{
    public $table = "products";
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->table, [
            'id' => $this->primaryKey(),
            "name" => $this->string()->null(),
            "code"=> $this->string()->notNull(),
            "price"=> $this->money()->notNull(),
            "category_id"=> $this->integer()->notNull(),
            "brand_id"=> $this->integer()->notNull(),
            "vendor_id"=> $this->integer()->notNull(),
            "description" => $this->string()->null(),
            "status"=> $this->string(),
            "created_at"=>$this->dateTime()->notNull()->defaultExpression("now()"),
            "created_by"=>$this->integer(),
            "updated_at"=>$this->dateTime(),
            "updated_by"=>$this->integer()
        ]);

        $this->addForeignKey("fk-{$this->table}-category_id",$this->table,"category_id","category","id");
        $this->addForeignKey("fk-{$this->table}-vendor_id",$this->table,"vendor_id","vendor ","id");
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->table);
    }
}
