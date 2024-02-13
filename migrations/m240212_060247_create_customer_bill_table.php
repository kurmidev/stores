<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%customer_bill}}`.
 */
class m240212_060247_create_customer_bill_table extends Migration
{
    protected $table = "customer_bill";
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->table, [
            'id' => $this->primaryKey(),
            "bill_no"=> $this->string()->notNull()->unique(),
            "customer_id"=> $this->integer()->notNull(),
            "invoice_date" => $this->date(),
            "amount"=> $this->money(),
            "discount"=> $this->money(),
            "tax"=> $this->money(),
            "total_amount"=> $this->money(),
            "is_paid"=> $this->integer(),
            'created_at' => $this->dateTime()->notNull()->defaultExpression('now()'),
            'updated_at' => $this->dateTime()->null(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer()
        ]);

        $this->addForeignKey("fx-{$this->table}-customer_id",$this->table,'customer_id',"customer","id");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->table);
    }
}
