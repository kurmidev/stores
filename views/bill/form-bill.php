<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\ebl\Constants as C;
use common\component\ImsGridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model common\models\Area */
/* @var $form yii\widgets\ActiveForm */

?>
<?php $form = ActiveForm::begin(['id' => 'form-bill', 'options' => ['enctype' => 'mutipart/form-data', 'class' => 'form-horizontal form-bordered']]); ?>
<div class="card bd-0 shadow-base widget-14 ht-100p">
    <div class="card-body row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-lg-3 col-sm-3 col-xs-3">
                    <?= $form->field($model, 'mobile_no', ['options' => ['class' => 'form-group']])->begin() ?>
                    <?= Html::activeLabel($model, 'mobile_no', ['class' => 'control-label']); ?>
                    <?= Html::activeTextInput($model, 'mobile_no', ['class' => 'form-control']) ?>
                    <?= Html::error($model, 'mobile_no', ['class' => 'error help-block']) ?>
                    <?= $form->field($model, 'mobile_no')->end() ?>
                </div>
                <div class="col-lg-3 col-sm-3 col-xs-3">
                    <?= $form->field($model, 'name', ['options' => ['class' => 'form-group']])->begin() ?>
                    <?= Html::activeLabel($model, 'name', ['class' => 'control-label']); ?>
                    <?= Html::activeTextInput($model, 'name', ['class' => 'form-control']) ?>
                    <?= Html::error($model, 'name', ['class' => 'error help-block']) ?>
                    <?= $form->field($model, 'name')->end() ?>
                </div>
                <div class="col-lg-3 col-sm-3 col-xs-3">
                    <?= $form->field($model, 'address', ['options' => ['class' => 'form-group']])->begin() ?>
                    <?= Html::activeLabel($model, 'address', ['class' => 'control-label']); ?>
                    <?= Html::activeTextInput($model, 'address', ['class' => 'form-control']) ?>
                    <?= Html::error($model, 'address', ['class' => 'error help-block']) ?>
                    <?= $form->field($model, 'address')->end() ?>
                </div>
                <div class="col-lg-3 col-sm-3 col-xs-3">
                    <?= $form->field($model, 'gst_no', ['options' => ['class' => 'form-group']])->begin() ?>
                    <?= Html::activeLabel($model, 'gst_no', ['class' => 'control-label']); ?>
                    <?= Html::activeTextInput($model, 'gst_no', ['class' => 'form-control']) ?>
                    <?= Html::error($model, 'gst_no', ['class' => 'error help-block']) ?>
                    <?= $form->field($model, 'gst_no')->end() ?>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body row">
        <div class="col-lg-12 col-sm-12 col-xs-12 mb-5">
            <h6 class="br-section-label p-4">Price
                <span class="pull-right"><?= Html::button('<span class="fa fa-plus btn btn-success btn-xs"></span>', ["class" => "btn btn-success", "onclick" => "addmoretablerow($('#rates'))"]) ?></span>
            </h6>
            <?= $this->render('_item_lists', ['model' => $model, 'form' => $form]) ?>
        </div>
    </div>
    <div class="card-footer mg-t-auto">
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-xs-6 col-sm-offset-3">
                <?= Html::activeHiddenInput($model, 'id') ?>
                <?= Html::submitButton(empty($model->id) ? 'Create' : 'Update', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>