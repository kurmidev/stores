<?php

namespace app\controllers;

use app\models\CustomerBill;
use app\models\CustomerBillSearch;
use Yii;

class ReportController extends  BaseController
{


    public function actionInvoiceSummary()
    {
        if ($this->is_pdf || $this->is_csv) {
            $this->layout = false;
        }

        $searchModel = new CustomerBillSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->joinWith(['customer c']);
        if ($this->is_pdf || $this->is_csv) {
            $dataProvider->sort = false;
            $dataProvider->pagination = false;
        } else {
            $dataProvider->pagination->pageSize = 20;
        }
        $content = $this->render('@app/views/reports/index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            "columns" => $searchModel->displayColumn(),
            "title" => "Invoice Summary",
            "search" => $searchModel->advanceSearch(),
            "is_pdf" => $this->is_pdf,
            "is_csv" =>  $this->is_csv
        ]);
        return $this->setReportRender($content, "Invoice Summary", $dataProvider, $searchModel->displayColumn());
    }
}
