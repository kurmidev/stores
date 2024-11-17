<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grinding_assembly_line".
 *
 * @property int $id
 * @property string|null $report_date
 * @property int|null $shift_type
 * @property int|null $qunatity_a
 * @property int|null $qunatity_b
 * @property int|null $actual_yp8
 * @property int|null $actual_yp7
 * @property int|null $actual_20m
 * @property int|null $actual_yra
 * @property int|null $actual_ytbr
 * @property float|null $cum_gap
 * @property float|null $cum_achive
 * @property int|null $line_stop
 * @property int|null $engineering
 * @property int|null $adjustment
 * @property int|null $co
 * @property int|null $material_storage
 * @property int|null $bd
 * @property int|null $other
 * @property int|null $total
 * @property int|null $bekidou
 * @property int|null $pph
 * @property int|null $chokko
 */
class GrindingAssemblyLine extends \app\models\BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'grinding_assembly_line';
    }

    public function scenarios(){
        return [
            self::SCENARIO_DEFAULT=>['shift_type', 'qunatity_a', 'qunatity_b', 'actual_yp8', 'actual_yp7', 'actual_20m', 'actual_yra', 'actual_ytbr', 'line_stop', 'engineering', 'adjustment', 'co', 'material_storage', 'bd', 'other', 'total', 'bekidou', 'pph', 'chokko','cum_gap', 'cum_achive','report_date'],
            self::SCENARIO_CREATE=>['shift_type', 'qunatity_a', 'qunatity_b', 'actual_yp8', 'actual_yp7', 'actual_20m', 'actual_yra', 'actual_ytbr', 'line_stop', 'engineering', 'adjustment', 'co', 'material_storage', 'bd', 'other', 'total', 'bekidou', 'pph', 'chokko','cum_gap', 'cum_achive','report_date'],
            self::SCENARIO_UPDATE=>['shift_type', 'qunatity_a', 'qunatity_b', 'actual_yp8', 'actual_yp7', 'actual_20m', 'actual_yra', 'actual_ytbr', 'line_stop', 'engineering', 'adjustment', 'co', 'material_storage', 'bd', 'other', 'total', 'bekidou', 'pph', 'chokko','cum_gap', 'cum_achive','report_date'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['report_date'], 'safe'],
            [['shift_type'],"string"],
            [[ 'qunatity_a', 'qunatity_b', 'actual_yp8', 'actual_yp7', 'actual_20m', 'actual_yra', 'actual_ytbr', 'line_stop', 'engineering', 'adjustment', 'co', 'material_storage', 'bd', 'other', 'total', 'bekidou', 'pph', 'chokko'], 'integer'],
            [['cum_gap', 'cum_achive'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'report_date' => 'Report Date',
            'shift_type' => 'Shift Type',
            'qunatity_a' => 'Qunatity A',
            'qunatity_b' => 'Qunatity B',
            'actual_yp8' => 'Actual Yp8',
            'actual_yp7' => 'Actual Yp7',
            'actual_20m' => 'Actual 20m',
            'actual_yra' => 'Actual Yra',
            'actual_ytbr' => 'Actual Ytbr',
            'cum_gap' => 'Cum Gap',
            'cum_achive' => 'Cum Achive',
            'line_stop' => 'Line Stop',
            'engineering' => 'Engineering',
            'adjustment' => 'Adjustment',
            'co' => 'Co',
            'material_storage' => 'Material Storage',
            'bd' => 'Bd',
            'other' => 'Other',
            'total' => 'Total',
            'bekidou' => 'Bekidou',
            'pph' => 'Pph',
            'chokko' => 'Chokko',
        ];
    }

    /**
     * {@inheritdoc}
     * @return GrindingAssemblyLineQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GrindingAssemblyLineQuery(get_called_class());
    }
}
