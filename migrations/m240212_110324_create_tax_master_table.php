<?php

use yii\db\Migration;
use app\components\Constants as C;
/**
 * Handles the creation of table `{{%tax_master}}`.
 */
class m240212_110324_create_tax_master_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tax_master}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'code' => $this->string()->notNull()->unique(),
            'type' => $this->smallInteger()->defaultValue(C::TAX_PERCENTAGE),
            'value' => $this->money()->notNull(),
            'applicable_on' => $this->json()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(C::STATUS_ACTIVE),
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
        $this->dropTable('{{%tax_master}}');
    }
}
