<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%customer_bill_details}}`.
 */
class m240212_060253_create_customer_bill_details_table extends Migration
{
    protected $table = "customer_bill_details";
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->table, [
            'id' => $this->primaryKey(),
            "bill_id" => $this->integer()->notNull(),
            "customer_id"=> $this->integer()->notNull(),
            "product_id"=> $this->integer()->notNull(),
            "serial_number"=> $this->string(),
            "product_name"=> $this->string()->notNull(),
            "rate"=> $this->money(),
            "warranty_end_date" => $this->date(),
            "quantity" => $this->integer(),
            "discount"=> $this->money(),
            "discount_type"=> $this->integer(),
            "amount" =>  $this->money(),
            "tax" =>    $this->money(),
            "total_price" => $this->money(),
            'created_at' => $this->dateTime()->notNull()->defaultExpression('now()'),
            'updated_at' => $this->dateTime()->null(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer()
        ]);

        $this->addForeignKey("fx-{$this->table}-customer_id",$this->table,'customer_id',"customer","id");
        $this->addForeignKey("fx-{$this->table}-product_id",$this->table,'product_id',"products","id");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->table);
    }
}
