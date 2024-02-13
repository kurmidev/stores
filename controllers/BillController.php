<?php

namespace app\controllers;

use app\forms\BillForm;
use app\models\Customer;
use app\models\CustomerBill;
use app\models\CustomerBillSearch;
use app\models\CustomerSearch;
use app\models\Products;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BillController implements the CRUD actions for Customer model.
 */
class BillController extends BaseController
{
    /**
     * Lists all Customer models.
     *
     * @return string
     */
    public function actionBilling()
    {
        $searchModel = new CustomerBillSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

  
    public function actionAddBilling(){
        $model = new BillForm(['scenario'=>Products::SCENARIO_CREATE]);
        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                \Yii::$app->getSession()->setFlash('s', "Bill $model->bill_no added successfully.");
                return $this->redirect(['billing']);
            }
        }
        return $this->render('form-bill', [
            'model' => $model,
        ]);
    }

    public function actionUpdateBilling($id){
        $bill = CustomerBill::findOne(['id'=>$id]);
        if (!$bill instanceof CustomerBill) {
            \Yii::$app->getSession()->setFlash('e', 'Record not found');
            return $this->redirect(["billing"]);
        }
        $model = new BillForm(['scenario'=>Products::SCENARIO_UPDATE]);
        $model->load($bill->attributes, '');
        $model->attr = $bill->getAttList();
        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            \Yii::$app->getSession()->setFlash('s', "{$model->bill_no} has been updated successfully.");
            return $this->redirect(['billing']);
        }

        return $this->render('form-bill', [
            'model' => $model,
        ]);
    }

    public function actionMakePayment(){
        
    }
}
