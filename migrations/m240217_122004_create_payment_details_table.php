<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%payment_details}}`.
 */
class m240217_122004_create_payment_details_table extends Migration
{
    public $table = "payment_details";
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->table, [
            'id' => $this->primaryKey(),
            "payment_id" => $this->integer()->notNull(),
            "bill_id" => $this->integer()->notNull(),
            "amount_paid"=>$this->integer()->notNull(),
            "installment_no"=>$this->integer()->notNull()->defaultValue(0),
            "principal_amount"=>$this->money(),
            "interest"=>$this->money(),
            'created_at' => $this->dateTime()->notNull()->defaultExpression('now()'),
            'updated_at' => $this->dateTime()->null(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer()
        ]);

        $this->addForeignKey("fk-{$this->table}-payment_id", $this->table, "payment_id", "payment", "id");
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
