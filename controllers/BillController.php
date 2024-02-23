<?php

namespace app\controllers;

use app\forms\BillForm;
use app\forms\PaymentForm;
use app\models\Customer;
use app\models\CustomerBill;
use app\models\CustomerBillSearch;
use app\models\CustomerSearch;
use app\models\Products;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\components\ConstFunc as F;

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
        $model->items = $bill->getAttList();
        $model->mobile_no = $bill->mobile_no;
        $model->name = $bill->name;
        $model->address = $bill->address;
        $model->gst_no = $bill->gst_no;
        $model->id = $bill->id;
        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            \Yii::$app->getSession()->setFlash('s', "{$bill->bill_no} has been updated successfully.");
            return $this->redirect(['billing']);
        }

        return $this->render('form-bill', [
            'model' => $model,
        ]);
    }

    public function actionMakePayment($id){
        $bill = CustomerBill::findOne(['id'=>$id]);
        if (!$bill instanceof CustomerBill) {
            \Yii::$app->getSession()->setFlash('e', 'Record not found');
            return $this->redirect(["billing"]);
        }

        $model = new PaymentForm(['scenario'=>Products::SCENARIO_CREATE]);
        if($this->request->isPost){
            $model->load($this->request->post(),'PaymentForm');
            $model->bill_id = $bill->id;    
            if ($model->save()) {
                \Yii::$app->getSession()->setFlash('s', "{$bill->bill_no} payment received successfully.");
                return $this->redirect(['billing']);
            }
        }
        
        return $this->render('form-payment', [
            'model' => $model,
            "bill" =>  $bill
        ]);
    }

    public function actionPrintBill($id){
        $this->layout = false;
        $model = CustomerBill::find()->where(['id' => $id])->with(['customer','billDetails','payment'])->one();
        $filename = "{$model->bill_no}.pdf";
        $content = $this->render('@app/views/bill/print-bill', [
            'model' => $model
        ]);

        return F::printPdf($content, $filename);

    }

}
