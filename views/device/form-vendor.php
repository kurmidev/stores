<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\components\Constants as C;
use app\models\VehicleMaster;

$documentValues = !empty($model->documents) ? ArrayHelper::index($model->documents, 'document_type') : [];

?>
<?php $form = ActiveForm::begin(['id' => 'form-plan', 'options' => ['enctype' => 'multipart/form-data', 'class' => 'form-bordered']]); ?>
<div class="row">
    <div class="col-md-6">
        <div class="card ">
            <div class="card-header">
                <div class="card-title">
                    Personal Details
                </div>
            </div>
            <div class="card-body">
                <?= $form->field($model, 'company', ['options' => ['class' => 'form-group']])->begin() ?>
                <?= Html::activeLabel($model, 'company', ['class' => 'col-lg-12 col-sm-12 col-xs-12 control-label']); ?>
                <div class="col-lg-6 col-sm-6 col-xs-6">
                    <?= Html::activeTextInput($model, 'company', ['class' => 'form-control']) ?>
                    <?= Html::error($model, 'company', ['class' => 'error help-block']) ?>
                </div>
                <?= $form->field($model, 'company')->end() ?>

                <?= $form->field($model, 'contact_person', ['options' => ['class' => 'form-group']])->begin() ?>
                <?= Html::activeLabel($model, 'contact_person', ['class' => 'col-lg-12 col-sm-12 col-xs-12 control-label']); ?>
                <div class="col-lg-6 col-sm-6 col-xs-6">
                    <?= Html::activeTextInput($model, 'contact_person', ['class' => 'form-control']) ?>
                    <?= Html::error($model, 'contact_person', ['class' => 'error help-block']) ?>
                </div>
                <?= $form->field($model, 'contact_person')->end() ?>

                <?= $form->field($model, 'status', ['options' => ['class' => "form-group"]])->begin(); ?>
                <?= Html::activeLabel($model, 'status', ['class' => 'col-lg-12 col-sm-12 col-xs-12 control-label']) ?>
                <div class="col-lg-6 col-sm-6 col-xs-6">
                    <?= Html::activeDropDownList($model, 'status', C::LABEL_STATUS, ['class' => 'form-control', "prompt" => "Select One"]) ?>
                    <?= Html::error($model, 'status', ['class' => 'error help-block']) ?>
                </div>
                <?= $form->field($model, 'status')->end() ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card ">
            <div class="card-header">
                <div class="card-title">
                    Contact Details
                </div>
            </div>
            <div class="card-body">
                <?= $form->field($model, 'mobile_no', ['options' => ['class' => 'form-group']])->begin() ?>
                <?= Html::activeLabel($model, 'mobile_no', ['class' => 'col-lg-12 col-sm-12 col-xs-12 control-label']); ?>
                <div class="col-lg-6 col-sm-6 col-xs-6">
                    <?= Html::activeTextInput($model, 'mobile_no', ['class' => 'form-control','minlength'=>10,'maxlength'=>10]) ?>
                    <?= Html::error($model, 'mobile_no', ['class' => 'error help-block']) ?>
                </div>
                <?= $form->field($model, 'mobile_no')->end() ?>

                <?= $form->field($model, 'telephone_no', ['options' => ['class' => 'form-group']])->begin() ?>
                <?= Html::activeLabel($model, 'telephone_no', ['class' => 'col-lg-12 col-sm-12 col-xs-12 control-label']); ?>
                <div class="col-lg-6 col-sm-6 col-xs-6">
                    <?= Html::activeTextInput($model, 'telephone_no', ['class' => 'form-control','minlength'=>10,'maxlength'=>10]) ?>
                    <?= Html::error($model, 'telephone_no', ['class' => 'error help-block']) ?>
                </div>
                <?= $form->field($model, 'telephone_no')->end() ?>

                <?= $form->field($model, 'address', ['options' => ['class' => 'form-group']])->begin() ?>
                <?= Html::activeLabel($model, 'address', ['class' => 'col-lg-12 col-sm-12 col-xs-12 control-label']); ?>
                <div class="col-lg-6 col-sm-6 col-xs-6">
                    <?= Html::activeTextInput($model, 'address', ['class' => 'form-control']) ?>
                    <?= Html::error($model, 'address', ['class' => 'error help-block']) ?>
                </div>
                <?= $form->field($model, 'address')->end() ?>

                <?= $form->field($model, 'email', ['options' => ['class' => 'form-group']])->begin() ?>
                <?= Html::activeLabel($model, 'email', ['class' => 'col-lg-12 col-sm-12 col-xs-12 control-label']); ?>
                <div class="col-lg-6 col-sm-6 col-xs-6">
                    <?= Html::activeTextInput($model, 'email', ['class' => 'form-control']) ?>
                    <?= Html::error($model, 'email', ['class' => 'error help-block']) ?>
                </div>
                <?= $form->field($model, 'email')->end() ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card ">
            <div class="card-header">
                <div class="card-title">
                    Other Details
                </div>
            </div>
            <div class="card-body">
                <?= $form->field($model, 'gst_no', ['options' => ['class' => 'form-group']])->begin() ?>
                <?= Html::activeLabel($model, 'gst_no', ['class' => 'col-lg-12 col-sm-12 col-xs-12 control-label']); ?>
                <div class="col-lg-6 col-sm-6 col-xs-6">
                    <?= Html::activeTextInput($model, 'gst_no', ['class' => 'form-control']) ?>
                    <?= Html::error($model, 'gst_no', ['class' => 'error help-block']) ?>
                </div>
                <?= $form->field($model, 'gst_no')->end() ?>

                <?= $form->field($model, 'pan_no', ['options' => ['class' => 'form-group']])->begin() ?>
                <?= Html::activeLabel($model, 'pan_no', ['class' => 'col-lg-12 col-sm-12 col-xs-12 control-label',"minlength"=>10,"maxlength"=>10]); ?>
                <div class="col-lg-6 col-sm-6 col-xs-6">
                    <?= Html::activeTextInput($model, 'pan_no', ['class' => 'form-control']) ?>
                    <?= Html::error($model, 'pan_no', ['class' => 'error help-block']) ?>
                </div>
                <?= $form->field($model, 'pan_no')->end() ?>
            </div>
        </div>
    </div>

    <div class="card-footer mg-t-auto mg-d-10">
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-xs-6 col-sm-offset-3">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-secondary']) ?>
            </div>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>