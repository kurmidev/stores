<?php

use yii\helpers\Html;
use app\components\Constants as C;
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-footer">
                <div class="row">
                    <div class="col-sm-2 col-2">
                        <div class="description-block border-right">
                            <h5 class="description-header"><?= Html::a($model->unpaidInvoice, Yii::$app->urlManager->createUrl(["report/invoice-summary","CustomerBillSearch[is_paid]"=>0,1]), ["class" => "text-warning"]) ?></h5>
                            <span class="description-text">UNPAID INVOICE</span>
                        </div>
                    </div>
                    <div class="col-sm-2 col-2">
                        <div class="description-block border-right">
                            <h5 class="description-header"><?= Html::a($model->paidInvoice, Yii::$app->urlManager->createUrl(["report/invoice-summary","CustomerBillSearch[is_paid]"=>2]), ["class" => "text-success"]) ?></h5>
                            <span class="description-text">PAID INVOICE</span>
                        </div>
                    </div>
                    <div class="col-sm-2 col-2">
                        <div class="description-block border-right">
                            <h5 class="description-header">
                                <?= Html::a(round($model->totalOutstanding,2), Yii::$app->urlManager->createUrl(["report/invoice-summary","CustomerBillSearch[is_paid]"=>0,1]), ["class" => "text-danger"]) ?>
                            </h5>
                            <span class="description-text">OUTSTANDING</span>
                        </div>

                    </div>
                    <div class="col-sm-2 col-2">
                        <div class="description-block border-right">
                            <h5 class="description-header">
                                <?= Html::a(round($model->partialPaid,2), Yii::$app->urlManager->createUrl(["report/invoice-summary","CustomerBillSearch[is_paid]"=>1]), ['class' => "text-success"]) ?>
                            </h5>
                            <span class="description-text">PARTIAL PAID</span>
                        </div>
                    </div>
                    <div class="col-sm-2 col-2">
                        <div class="description-block border-right">
                            <h5 class="description-header">
                                <?= Html::a(round($model->totalPaid,2), Yii::$app->urlManager->createUrl(["report/invoice-summary","CustomerBillSearch[is_paid]"=>2]), ['class' => "text-success"]) ?>
                            </h5>
                            <span class="description-text">PAID</span>
                        </div>
                    </div>
                    <div class="col-sm-2 col-2">
                        <div class="description-block border-right">
                            <h5 class="description-header">
                                <?= Html::a(round($model->totalInvoice,2), Yii::$app->urlManager->createUrl(["report/invoice-summary"]), ["class" => "text-warning"]) ?>
                            </h5>
                            <span class="description-text">TOTAL INVOICE</span>
                        </div>
                    </div>
          
                </div>
            </div>
        </div>
    </div>
</div>