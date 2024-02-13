<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\components\Constants as C;
use app\models\Brand;
use app\models\Category;
use app\models\Vendor;

$brandList = ArrayHelper::map(Brand::find()->active()->asArray()->all(), 'id', 'name');
$categoryList = ArrayHelper::map(Category::find()->active()->asArray()->all(), 'id', 'name');
$vendorList = ArrayHelper::map(Vendor::find()->active()->asArray()->all(), 'id', 'company');
?>

<?php $form = ActiveForm::begin(['id' => 'form-expense', 'options' => ['enctype' => 'mutipart/form-data', 'class' => 'form-horizontal form-bordered']]); ?>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Product Details</h3>
                <div class="card-tools">
                </div>
            </div>
            <div class="card-body">
                <?= $form->field($model, 'name', ['options' => ['class' => 'form-group']])->begin() ?>
                <?= Html::activeLabel($model, 'name', ['class' => 'col-lg-12 col-sm-12 col-xs-12 control-label']); ?>
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <?= Html::activeTextInput($model, 'name', ['class' => 'form-control']) ?>
                    <?= Html::error($model, 'name', ['class' => 'error help-block']) ?>
                </div>
                <?= $form->field($model, 'name')->end() ?>

                <?= $form->field($model, 'code', ['options' => ['class' => 'form-group']])->begin() ?>
                <?= Html::activeLabel($model, 'code', ['class' => 'col-lg-12 col-sm-12 col-xs-12 control-label']); ?>
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <?= Html::activeTextInput($model, 'code', ['class' => 'form-control']) ?>
                    <?= Html::error($model, 'code', ['class' => 'error help-block']) ?>
                </div>
                <?= $form->field($model, 'code')->end() ?>

                <?= $form->field($model, 'price', ['options' => ['class' => 'form-group']])->begin() ?>
                <?= Html::activeLabel($model, 'price', ['class' => 'col-lg-12 col-sm-12 col-xs-12 control-label']); ?>
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <?= Html::activeTextInput($model, 'price', ['class' => 'form-control']) ?>
                    <?= Html::error($model, 'price', ['class' => 'error help-block']) ?>
                </div>
                <?= $form->field($model, 'price')->end() ?>

                <?= $form->field($model, 'status', ['options' => ['class' => 'form-group']])->begin() ?>
                <?= Html::activeLabel($model, 'status', ['class' => 'col-lg-12 col-sm-12 col-xs-12 control-label']); ?>
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <?= Html::activeDropDownList($model, "status",C::LABEL_STATUS, ["prompt"=>"Select one","class"=>"form-control"])?>
                    <?= Html::error($model, 'status', ['class' => 'error help-block']) ?>
                </div>
                <?= $form->field($model, 'status')->end() ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Product Mapping</h3>
                <div class="card-tools">
                </div>
            </div>
            <div class="card-body">
                <?= $form->field($model, 'category_id', ['options' => ['class' => 'form-group']])->begin() ?>
                <?= Html::activeLabel($model, 'category_id', ['class' => 'col-lg-12 col-sm-12 col-xs-12 control-label']); ?>
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <?= Html::activeDropDownList($model, 'category_id', $categoryList, ['class' => 'form-control', 'prompt' => 'Select one']) ?>
                    <?= Html::error($model, 'category_id', ['class' => 'error help-block']) ?>
                </div>
                <?= $form->field($model, 'category_id')->end() ?>

                <?= $form->field($model, 'brand_id', ['options' => ['class' => 'form-group']])->begin() ?>
                <?= Html::activeLabel($model, 'brand_id', ['class' => 'col-lg-12 col-sm-12 col-xs-12 control-label']); ?>
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <?= Html::activeDropDownList($model, 'brand_id', $brandList, ['class' => 'form-control', 'prompt' => 'Select one']) ?>
                    <?= Html::error($model, 'brand_id', ['class' => 'error help-block']) ?>
                </div>
                <?= $form->field($model, 'brand_id')->end() ?>

                <?= $form->field($model, 'vendor_id', ['options' => ['class' => 'form-group']])->begin() ?>
                <?= Html::activeLabel($model, 'vendor_id', ['class' => 'col-lg-12 col-sm-12 col-xs-12 control-label']); ?>
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <?= Html::activeDropDownList($model, 'vendor_id', $vendorList, ['class' => 'form-control', "prompt" => "Select One", "id" => "payment_modes"]) ?>
                    <?= Html::error($model, 'vendor_id', ['class' => 'error help-block']) ?>
                </div>
                <?= $form->field($model, 'vendor_id')->end() ?>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Products Attributes</h3>
                <div class="card-tools">
                    <?= Html::a(Html::tag('span', '', ['class' => 'fa fa-plus']), "#", ['title' => 'Add More', 'class' => 'btn btn-primary btn-sm', "onclick" => "addmoretablerow()"]) ?>
                </div>
            </div>
            <div class="card-body">
                <table id="clonetable" class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Value</th>
                            <th>More</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        if (!empty($model->attr)) {
                            foreach ($model->attr as $e) {
                        ?>
                                <tr>
                                    <td>
                                        <?= Html::activeTextInput($model, 'attr[' . $i . '][key]', ['class' => 'form-control', 'value' => $e['key']]) ?>
                                    </td>
                                    <td>
                                        <?= Html::activeTextInput($model, 'attr[' . $i . '][value]', ['class' => 'form-control', 'value' => $e['value']]) ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger">
                                            <span class="fa fa-minus" onclick="<?= $i > 0 ? "$(this).closest('tr').remove();" : "" ?>"></span>
                                        </button>
                                    </td>

                            <?php
                                $i++;
                            }
                        }
                            ?>
                                <tr>
                                    <td>
                                        <?= Html::activeTextInput($model, 'attr[' . $i . '][key]', ['class' => 'form-control']) ?>
                                    </td>
                                    <td>
                                        <?= Html::activeTextInput($model, 'attr[' . $i . '][value]', ['class' => 'form-control']) ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger">
                                            <span class="fa fa-minus" onclick="<?= $i > 0 ? "$(this).closest('tr').remove();" : "" ?>"></span>
                                        </button>
                                    </td>
                                </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card-footer mg-t-auto col-md-12">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12 col-sm-offset-3">
                <?= Html::submitButton($model->id ? 'Create' : 'Update', ['class' => 'btn btn-secondary']) ?>
            </div>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>