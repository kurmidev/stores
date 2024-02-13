<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%code_sequence}}`.
 */
class m240206_140341_create_code_sequence_table extends Migration
{
    public $table = "code_sequence";
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%code_sequence}}', [
            'id' => $this->primaryKey(),
            "name"=> $this->string()->unique()->notNull(),
            "sequence_for"=> $this->string()->null(),
            "value"=> $this->integer()->notNull()->defaultValue(1),
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
