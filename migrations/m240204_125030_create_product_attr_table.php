<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_attr}}`.
 */
class m240204_125030_create_product_attr_table extends Migration
{
    public $table="product_attr";
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->table, [
            'id' => $this->primaryKey(),
            "product_id"=> $this->integer()->notNull(),
            "attr_name"=> $this->string()->notNull(),
            "attr_value"=> $this->string()->notNull(),
            "created_at"=>$this->dateTime()->notNull()->defaultExpression("now()"),
            "created_by"=>$this->integer(),
            "updated_at"=>$this->dateTime(),
            "updated_by"=>$this->integer()
        ]);
        $this->addForeignKey("fk-{$this->table}-product_id",$this->table,"product_id","products","id");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->table);
    }
}
