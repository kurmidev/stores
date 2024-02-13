<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%brand}}`.
 */
class m240204_132242_create_brand_table extends Migration
{
    public $table = "brand";
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->table, [
            'id' => $this->primaryKey(),
            "name"=> $this->string()->unique()->notNull(),
            "code"=> $this->string()->unique()->notNull(),
            "description"=> $this->string()->null(),
            "status"=> $this->integer()->notNull(),
            "created_at"=>$this->dateTime()->notNull()->defaultExpression("now()"),
            "created_by"=>$this->integer(),
            "updated_at"=>$this->dateTime(),
            "updated_by"=>$this->integer()
        ]);

        $this->addForeignKey("fk-products-brand_id","products","brand_id","brand","id");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->table);
    }
}
