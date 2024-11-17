<?php

namespace app\controllers;

use app\forms\GrindingAssemblyForm;
use app\models\GrindingAssemblyLine;
use app\models\GrindingAssemblyLineSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GrindingAssemblyLineController implements the CRUD actions for GrindingAssemblyLine model.
 */
class GrindingAssemblyLineController extends BaseController
{
    
    /**
     * Lists all GrindingAssemblyLine models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new GrindingAssemblyForm();
        $model->gd = $this->gridlineData();
        
        return $this->render('index', [
            "model"=>$model,
        ]);
    }

    public function gridlineData(){
        $model = GrindingAssemblyLine::find()->asArray()->all();
        $gd = [];
        foreach($model as $m){
            $rpday = date("d",strtotime($m["report_date"]));
            $gd[$m["shift_type"]][(int)$rpday] = [
                "qunatity_a" => $m["qunatity_a"],
                "qunatity_b" => $m["qunatity_b"],
                "actual_yp8" => $m["actual_yp8"],
                "actual_yp7" => $m["actual_yp7"],
                "actual_20m" => $m["actual_20m"],
                "actual_yra" => $m["actual_yra"],
                "actual_ytbr" => $m["actual_ytbr"],
                "cum_gap" => $m["cum_gap"],
                "cum_achive" => $m["cum_achive"],
                "line_stop" => $m["line_stop"],
                "engineering" => $m["engineering"],
                "adjustment" => $m["adjustment"],
                "co" => $m["co"],
                "material_storage" => $m["material_storage"],
                "bd" => $m["bd"],
                "other" => $m["other"],
                "total" => $m["total"],
                "bekidou" => $m["bekidou"],
                "pph" => $m["pph"],
                "chokko" => $m["chokko"],
            ];
        }

        return $gd;
    }

    /**
     * Displays a single GrindingAssemblyLine model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new GrindingAssemblyLine model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new GrindingAssemblyForm();
        $model->gd = $this->gridlineData();
        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save() ) {
                \Yii::$app->getSession()->setFlash('s', "GridLine Data has been saved successfully.");
                return $this->redirect(['index']);
            }
        }

        return $this->render('form-gal', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing GrindingAssemblyLine model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing GrindingAssemblyLine model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the GrindingAssemblyLine model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return GrindingAssemblyLine the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = GrindingAssemblyLine::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
