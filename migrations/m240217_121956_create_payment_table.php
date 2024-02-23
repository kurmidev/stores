<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%payment}}`.
 */
class m240217_121956_create_payment_table extends Migration
{
    public $table  = "payment";
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->table, [
            'id' => $this->primaryKey(),
            "bill_id"=> $this->integer()->notNull(),
            "receipt_no"=> $this->string()->unique()->notNull(),
            "amount"=> $this->money()->notNull(),
            "amount_received"=> $this->money(),
            "instrument_no"=> $this->string()->notNull(),
            "instrument_date"=> $this->date()->notNull(),
            "instrument_name"=> $this->string()->notNull(),
            "instrument_mode"=> $this->integer()->notNull(),
            "meta_data"=> $this->json()->null(),
            'created_at' => $this->dateTime()->notNull()->defaultExpression('now()'),
            'updated_at' => $this->dateTime()->null(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer()
        ]);

        $this->addForeignKey("fk-{$this->table}-bill_id", $this->table, "bill_id", "customer_bill", "id");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->table);
    }
}
