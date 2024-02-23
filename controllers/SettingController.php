<?php

namespace app\controllers;

use app\models\PaymentModeMaster;
use app\models\PaymentModeMasterSearch;

class SettingController extends BaseController{

    /**
     * Lists all paymode models.
     *
     * @return string
     */
    public function actionPaymode()
    {
        $searchModel = new PaymentModeMasterSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('paymode', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new paymode model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionAddPaymode()
    {
        $model = new PaymentModeMaster(['scenario'=>PaymentModeMaster::SCENARIO_CREATE]);

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                \Yii::$app->getSession()->setFlash('s', "Payment mode $model->name added successfully.");
                return $this->redirect(['paymode']);
            }
        }

        return $this->render('form-paymode', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing paymode model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdatePaymode($id)
    {
        $model = PaymentModeMaster::findOne(['id'=>$id]);
        $model->scenario = PaymentModeMaster::SCENARIO_UPDATE;
        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            \Yii::$app->getSession()->setFlash('s', "{$model->name} has been updated successfully.");
            return $this->redirect(['paymode']);
        }

        return $this->render('form-paymode', [
            'model' => $model,
        ]);
    }

}