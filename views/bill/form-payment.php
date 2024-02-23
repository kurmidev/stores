<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\components\Constants as C;
use app\models\PaymentModeMaster;

$paymentModes = PaymentModeMaster::find()->active()->all();
$paymentModeList = ArrayHelper::map($paymentModes, 'id', 'name');

?>
<?php $form = ActiveForm::begin(['id' => 'form-payment', 'options' => ['enctype' => 'multipart/form-data', 'class' => 'form-bordered']]); ?>
<div class="row">
    <div class="col-md-8">
        <div class="card ">
            <div class="card-header">
                Bill Details
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td><?= $bill->customer->name ?></td>
                            <td>Contact No.</td>
                            <td><?= $bill->customer->mobile_no ?>/<?= $bill->customer->alternate_number ?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><?= $bill->customer->address ?></td>
                            <td>Email </td>
                            <td><?= $bill->customer->email ?></td>
                        </tr>
                        <tr>
                            <td>GST No.</td>
                            <td><?= $bill->customer->gst_no ?></td>
                            <td>Bill No.</td>
                            <td><?= $bill->bill_no ?></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>SR.</th>
                            <th>Rate</th>
                            <th>Quantity</th>
                            <th>Disc</th>
                            <th>Amount</th>
                            <th>Tax</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $base_amount = $tax = $total=0; ?>
                        <?php foreach ($bill->billDetails as $d) { ?>
                            <tr>
                                <td><?= $d["product_name"] ?></td>
                                <td><?= $d["serial_number"] ?></td>
                                <td><?= $d["rate"] ?></td>
                                <td><?= $d["quantity"] ?></td>
                                <td><?= $d["discount"] ?></td>
                                <td><?= $d["amount"] ?></td>
                                <td><?= $d["tax"] ?></td>
                                <td><?= $d["total_price"] ?></td>
                            </tr>

                        <?php
                        $base_amount += $d['amount']; 
                        $tax += $d['tax'];
                        $total += $d['total_price'];
                    } ?>
                    <tr><td colspan="8"></td></tr>
                    <tr><td colspan="8"></td></tr>
                    <tr><td colspan="8"></td></tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4"></td>
                            <th colspan="2">Taxable Amount</th>
                            <td colspan="2" style="text-align:right;"><?= $base_amount ?></td>
                        </tr>
                        <tr>
                            <td colspan="4"></td>
                            <th colspan="2">Tax Amount</th>
                            <td colspan="2" style="text-align:right;"><?= $tax ?></td>
                        </tr>
                        <tr>
                            <td colspan="4"></td>
                            <th colspan="2">Payable Amount</th>
                            <td colspan="2" style="text-align:right;"><?= $total ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card ">
            <div class="card-header">
                Payment Details
            </div>
            <div class="card-body">
                <?= $form->field($model, 'amount', ['options' => ['class' => 'form-group']])->begin() ?>
                <?= Html::activeLabel($model, 'amount', ['class' => 'col-lg-12 col-sm-12 col-xs-12 control-label']); ?>
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <?= Html::activeTextInput($model, 'amount', ['class' => 'form-control',"value"=>$total]) ?>
                    <?= Html::error($model, 'amount', ['class' => 'error help-block']) ?>
                </div>
                <?= $form->field($model, 'amount')->end() ?>

                <?= $form->field($model, 'instrument_no', ['options' => ['class' => 'form-group']])->begin() ?>
                <?= Html::activeLabel($model, 'instrument_no', ['class' => 'col-lg-12 col-sm-12 col-xs-12 control-label']); ?>
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <?= Html::activeTextInput($model, 'instrument_no', ['class' => 'form-control']) ?>
                    <?= Html::error($model, 'instrument_no', ['class' => 'error help-block']) ?>
                </div>
                <?= $form->field($model, 'instrument_no')->end() ?>

                <?= $form->field($model, 'instrument_date', ['options' => ['class' => 'form-group']])->begin() ?>
                <?= Html::activeLabel($model, 'instrument_date', ['class' => 'col-lg-12 col-sm-12 col-xs-12 control-label']); ?>
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <?= Html::activeTextInput($model, 'instrument_date', ['class' => 'form-control  cal',"readonly"=>true]) ?>
                    <?= Html::error($model, 'instrument_date', ['class' => 'error help-block']) ?>
                </div>
                <?= $form->field($model, 'instrument_name')->end() ?>
                <?= $form->field($model, 'instrument_name', ['options' => ['class' => 'form-group']])->begin() ?>
                <?= Html::activeLabel($model, 'instrument_name', ['class' => 'col-lg-12 col-sm-12 col-xs-12 control-label']); ?>
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <?= Html::activeTextInput($model, 'instrument_name', ['class' => 'form-control']) ?>
                    <?= Html::error($model, 'instrument_name', ['class' => 'error help-block']) ?>
                </div>
                <?= $form->field($model, 'instrument_mode')->end() ?>

                <?= $form->field($model, 'instrument_mode', ['options' => ['class' => 'form-group']])->begin() ?>
                <?= Html::activeLabel($model, 'instrument_mode', ['class' => 'col-lg-12 col-sm-12 col-xs-12 control-label']); ?>
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <?= Html::activeDropDownList($model, 'instrument_mode', $paymentModeList, ['class' => 'form-control', 'prompt' => "Select One"]) ?>
                    <?= Html::error($model, 'instrument_mode', ['class' => 'error help-block']) ?>
                </div>
                <?= $form->field($model, 'instrument_mode')->end() ?>

                <?= $form->field($model, 'roi', ['options' => ['class' => 'form-group']])->begin() ?>
                <?= Html::activeLabel($model, 'roi', ['class' => 'col-lg-12 col-sm-12 col-xs-12 control-label']); ?>
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <?= Html::activeTextInput($model, 'roi', ['class' => 'form-control']) ?>
                    <?= Html::error($model, 'roi', ['class' => 'error help-block']) ?>
                </div>
                <?= $form->field($model, 'roi')->end() ?>

                <?= $form->field($model, 'emi_month', ['options' => ['class' => 'form-group']])->begin() ?>
                <?= Html::activeLabel($model, 'emi_month', ['class' => 'col-lg-12 col-sm-12 col-xs-12 control-label']); ?>
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <?= Html::activeTextInput($model, 'emi_month', ['class' => 'form-control']) ?>
                    <?= Html::error($model, 'emi_month', ['class' => 'error help-block']) ?>
                </div>
                <?= $form->field($model, 'emi_month')->end() ?>

                <?= $form->field($model, 'emi_amount', ['options' => ['class' => 'form-group']])->begin() ?>
                <?= Html::activeLabel($model, 'emi_amount', ['class' => 'col-lg-12 col-sm-12 col-xs-12 control-label']); ?>
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <?= Html::activeTextInput($model, 'emi_amount', ['class' => 'form-control']) ?>
                    <?= Html::error($model, 'emi_amount', ['class' => 'error help-block']) ?>
                </div>
                <?= $form->field($model, 'emi_amount')->end() ?>
            </div>
        </div>
    </div>
    <div class="card-footer mg-t-auto mg-d-10">
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-xs-6 col-sm-offset-3">
                <?= Html::submitButton('Make Payment', ['class' => 'btn btn-secondary']) ?>
            </div>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>