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
                    $model->qunatity_a = $data["qunatity_a"];
                    $model->qunatity_b = $data["qunatity_b"];
                    $model->actual_yp8 = $data["actual_yp8"];
                    $model->actual_yp7 = $data["actual_yp7"];
                    $model->actual_20m = $data["actual_20m"];
                    $model->actual_yra = $data["actual_yra"];
                    $model->actual_ytbr = $data["actual_ytbr"];
                    $model->cum_gap = $data["cum_gap"];
                    $model->cum_achive = $data["cum_achive"];
                    $model->line_stop = $data["line_stop"];
                    $model->engineering = $data["engineering"];
                    $model->adjustment = $data["adjustment"];
                    $model->co = $data["co"];
                    $model->material_storage = $data["material_storage"];
                    $model->bd = $data["bd"];
                    $model->other = $data["other"];
                    $model->total = $data["total"];
                    $model->bekidou = $data["bekidou"];
                    $model->pph = $data["pph"];
                    $model->chokko = $data["chokko"];
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