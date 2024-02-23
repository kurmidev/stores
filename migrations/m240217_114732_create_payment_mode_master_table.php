<?php

use yii\db\Migration;
use app\components\Constants as C;

/**
 * Handles the creation of table `{{%payment_mode_master}}`.
 */
class m240217_114732_create_payment_mode_master_table extends Migration
{

    public $table = "payment_mode_master";
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->table, [
            'id' => $this->primaryKey(),
            "name" => $this->string()->notNull(),
            "description" => $this->string()->null(),
            "action_type"=> $this->integer()->notNull(),
            "status" => $this->integer()->notNull()->defaultValue(C::STATUS_ACTIVE),
            'created_at' => $this->dateTime()->notNull()->defaultExpression('now()'),
            'updated_at' => $this->dateTime()->null(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->table);
    }
}
