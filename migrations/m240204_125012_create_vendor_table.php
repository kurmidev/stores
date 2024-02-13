<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vendor}}`.
 */
class m240204_125012_create_vendor_table extends Migration
{
    public $table = "vendor";
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->table, [
            'id' => $this->primaryKey(),
            "company" => $this->string()->null(),
            "contact_person"=> $this->string()->notNull(),
            "mobile_no"=> $this->string()->notNull(),
            "telephone_no"=> $this->string()->null(),
            "address"=> $this->string()->null(),
            "email"=> $this->string()->null(),
            "gst_no"=> $this->string()->null(),
            "pan_no"=> $this->string()->null(),
            "status"=> $this->integer()->notNull(),
            "created_at"=>$this->dateTime()->notNull()->defaultExpression("now()"),
            "created_by"=>$this->integer(),
            "updated_at"=>$this->dateTime(),
            "updated_by"=>$this->integer()
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
