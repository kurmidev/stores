<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%grinding_assembly_line}}`.
 */
class m241115_092518_create_grinding_assembly_line_table extends Migration
{
    public $table = "grinding_assembly_line";
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->table, [
            'id' => $this->primaryKey(),
            "report_date"=>$this->date(),
            "shift_type"=> $this->string(),
            "qunatity_a"=> $this->integer(),
            "qunatity_b"=> $this->integer(),
            "actual_yp8" => $this->integer(),
            "actual_yp7" => $this->integer(),
            "actual_20m" => $this->integer(),
            "actual_yra" => $this->integer(),
            "actual_ytbr" => $this->integer(),
            "cum_gap" => $this->money(),
            "cum_achive" => $this->money(),
            "line_stop" => $this->integer(),
            "engineering" => $this->integer(),
            "adjustment" => $this->integer(),
            "co" => $this->integer(),
            "material_storage" => $this->integer(),
            "bd" => $this->integer(),
            "other" => $this->integer(),
            "total" => $this->integer(),
            "bekidou" => $this->integer(),
            "pph" => $this->integer(),
            "chokko" => $this->integer(),
            'created_at' => $this->dateTime()->notNull()->defaultExpression('now()'),
            'updated_at' => $this->dateTime()->null(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer()
        ]);

        $this->createIndex("IX-{$this->table}-report_date",$this->table,'report_date');
        $this->createIndex("IX-{$this->table}-shift_type",$this->table,'shift_type');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->table);
    }
}
