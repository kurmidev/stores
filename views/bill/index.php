<?php


use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use app\components\Constants as C;
use app\components\ConstFunc as F;
use app\components\ImsGridView;

$title ="Bills";
$addUrl = 'bill/add-billing';

?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title"></h3>
        <div class="card-tools">
            <?= Html::a(Html::tag('span', '', ['class' => 'fa fa-plus']), \Yii::$app->urlManager->createUrl([$addUrl]), ['title' => "Add New {$title} ", 'class' => 'btn btn-primary btn-sm']) ?>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <?= ImsGridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    "customer.name",
                    "customer.mobile_no",
                    'bill_no',
                    "invoice_date",
                    "amount",
                    "discount",
                    "tax",
                    "total_amount",
                    [
                        'attribute' => 'is_paid', 'label' => 'Paid',
                        'content' => function ($model) {
                            return F::getBillLabel($model->is_paid);
                        },
                        'filter' => C::LABEL_STATUS,
                    ],
                    'actionOn',
                    'actionBy',
                    [
                        "label" => "Action",
                        "content" => function ($data) {
                            $url =  'device/edit-brand';
                            return Html::a(Html::tag('span', '', ['class' => 'fa fa-edit']), \Yii::$app->urlManager->createUrl([$url, 'id' => $data['id']]), ['title' => 'Update ' . $data['name'], 'class' => 'btn btn-primary-alt']);
                        }
                    ]
                ],
            ]); ?>
        </div>
    </div>
</div>