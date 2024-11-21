<?php

namespace app\forms;

use app\models\BaseForm;
use app\models\GrindingAssemblyLine;

class GrindingAssemblyForm extends BaseForm{


    public $gd;

    public function rules(){
        return [
            [["gd"],"required"]
        ];
    }

    public function scenarios(){
        return [
            GrindingAssemblyLine::SCENARIO_CREATE => ["gd"],
            GrindingAssemblyLine::SCENARIO_UPDATE => ["gd"],
        ];
    }

    public function save(){
    $succes = $error = [];  
        if(!$this->hasErrors()){
            foreach($_POST["GrindingAssemblyForm"]["gd"] as $shift=>$shiftData){
                foreach($shiftData as $day=>$data){
                    $date = date("Y-m-d",strtotime(date("Y-m-").$day));
                    $model = GrindingAssemblyLine::findOne(["report_date"=>$date, "shift_type"=>$shift]);
                    if(!$model instanceof GrindingAssemblyLine){
                        $model = new GrindingAssemblyLine(['scenario'=>GrindingAssemblyLine::SCENARIO_CREATE]);
                    }
                    $model->report_date = $date;
                    $model->shift_type = $shift;
                    $model->qunatity_a = !empty($data["qunatity_a"])?$data["qunatity_a"]:null;
                    $model->qunatity_b = !empty($data["qunatity_b"])?$data["qunatity_b"]:null;
                    $model->actual_yp8 = !empty($data["actual_yp8"])?$data["actual_yp8"]:null;
                    $model->actual_yp7 = !empty($data["actual_yp7"])?$data["actual_yp7"]:null;
                    $model->actual_20m = !empty($data["actual_20m"])?$data["actual_20m"]:null;
                    $model->actual_yra = !empty($data["actual_yra"])?$data["actual_yra"]:null;
                    $model->actual_ytbr =!empty($data["actual_ytbr"])?$data["actual_ytbr"]:null;
                    $model->cum_gap = !empty($data["cum_gap"])?$data["cum_gap"]:null;
                    $model->cum_achive = !empty($data["cum_achive"])?$data["cum_achive"]:null;
                    $model->line_stop = !empty($data["line_stop"])?$data["line_stop"]:null;
                    $model->engineering = !empty($data["engineering"])?$data["engineering"]:null;
                    $model->adjustment = !empty($data["adjustment"])?$data["adjustment"]:null;
                    $model->co = !empty($data["co"])?$data["co"]:null;
                    $model->material_storage = !empty($data["material_storage"])?$data["material_storage"]:null;
                    $model->bd = !empty($data["bd"])?$data["bd"]:null;
                    $model->other = !empty($data["other"])?$data["other"]:null;
                    $model->total = !empty($data["total"])?$data["total"]:null;
                    $model->bekidou = !empty($data["bekidou"])?$data["bekidou"]:null;
                    $model->pph = !empty($data["pph"])?$data["pph"]:null;
                    $model->chokko = !empty($data["chokko"])?$data["chokko"]:null;
                    if($model->validate() && $model->save()) {
                        $succes[] = "data for date {$date} saved successfully";
                    }else{
                        $error[] = $model->getErrorSummary(true);
                    }
                }
            }
        }
        if(!empty($succes)){
            return true;
        }
        return false;
    }
}