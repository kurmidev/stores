<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\GrindingAssemblyLine $model */
/** @var yii\widgets\ActiveForm $form */

$endDay = date("t");

?>

<?php $form = ActiveForm::begin(['id' => 'form-paymode', 'options' => ['enctype' => 'multipart/form-data', 'class' => 'form-bordered']]); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <h3 class="card-title"></h3>
                <div class="card-tools">
                    <?= Html::a(Html::tag('span', '', ['class' => 'fa fa-plus']), \Yii::$app->urlManager->createUrl(["grinding-assembly-line/create"]), ['title' => "Grinding Assembly Line ", 'class' => 'btn btn-primary btn-sm']) ?>
                </div>
            </div>
            <div class="card-body">

                <table style="border-collapse:collapse;margin-left:1.33001pt" cellspacing="0">
                    <tr style="height:5pt">
                        <td style="width:78pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="5">
                            <p class="s1" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">DATE</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) {
                            $bg = strtolower(date("D", strtotime(date("Y-m-") . $i))) == "sun" ? "#99CCFF" : "";
                        ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="<?= $bg ?>">
                                <p class="s2" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: center;"><?= $i ?></p>
                            </td>
                        <?php  } ?>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3" style="padding-left: 7pt;text-indent: 0pt;line-height: 3pt;text-align: left;">Total</p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:78pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="5">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) {
                            $bg = strtolower(date("D", strtotime(date("Y-m-") . $i))) == "sun" ? "#99CCFF" : "";
                        ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="<?= $bg ?>">
                                <p class="s3" style="padding-left: 8pt;text-indent: 0pt;line-height: 3pt;text-align: left;"><?= date("D", strtotime(date("Y-m-") . $i)) ?></p>
                            </td>
                        <?php  } ?>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:38pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="3">
                            <p class="s1" style="padding-left: 10pt;text-indent: 0pt;line-height: 3pt;text-align: left;">Work Days</p>
                        </td>
                        <td style="width:14pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#FFFF00">
                            <p class="s1" style="text-indent: 0pt;line-height: 3pt;text-align: center;">24</p>
                        </td>
                        <td style="width:26pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="<?= $bg ?>">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) {
                            $bg = strtolower(date("D", strtotime(date("Y-m-") . $i))) == "sun" ? "#99CCFF" : "";
                        ?>
                            <td style="width:26pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="<?= $bg ?>">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <br />
                                </p>
                            </td>
                        <?php } ?>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:15pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#00AF50">
                            <p class="s4" style="padding-top: 1pt;padding-left: 2pt;text-indent: 0pt;line-height: 2pt;text-align: left;">LINE No</p>
                        </td>
                        <td style="width:8pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="20">
                            <p class="s1" style="padding-top: 2pt;text-indent: 0pt;text-align: center;">A-Shift</p>
                        </td>
                        <td style="width:15pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;text-align: left;">Qty</p>
                        </td>
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">Plan<span class="s5">‥</span>A</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[a][' . $i . '][qunatity_a]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>


                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:15pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#00AF50">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">Actual Sum<span class="s5">・・</span>B</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[a][' . $i . '][qunatity_b]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>


                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:15pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="6" bgcolor="#00AF50">
                            <p style="padding-top: 2pt;text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                            <p class="s6" style="padding-left: 6pt;text-indent: 0pt;text-align: left;">1</p>
                        </td>
                        <td style="width:15pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="5">
                            <p class="s3" style="padding-left: 4pt;text-indent: 2pt;line-height: 92%;text-align: right;">Cum achiv rate=(actu sum/plan)*1</p>
                        </td>
                        <td style="width:14pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="5">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                            <p class="s1" style="padding-left: 2pt;text-indent: 0pt;text-align: left;">Actual</p>
                        </td>
                        <td style="width:26pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s1" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">YP8</p>
                        </td>

                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[a][' . $i . '][actual_yp8]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>



                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:26pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s1" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">YL7</p>
                        </td>

                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[a][' . $i . '][actual_yp7]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>


                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:26pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s1" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">20M</p>
                        </td>

                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[a][' . $i . '][actual_20m]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>


                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:26pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s1" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">YRA</p>
                        </td>

                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[a][' . $i . '][actual_yra]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>


                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:26pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s1" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">YTB-R</p>
                        </td>

                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[a][' . $i . '][actual_ytbr]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>


                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:15pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt" rowspan="2">
                            <p class="s3" style="padding-right: 4pt;text-indent: 0pt;line-height: 92%;text-align: justify;">e al 00</p>
                        </td>
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">Cum Gap<span class="s5">‥</span>C=B-A</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[a][' . $i . '][cum_gap]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:15pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="49">
                            <p class="s7" style="padding-top: 4pt;padding-left: 61pt;text-indent: 0pt;text-align: left;">HUB GRINDING &amp; ASSEMBLY LINE-01</p>
                        </td>
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s1" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">Cum Achive Rate %</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[a][' . $i . '][cum_achive]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:15pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="7">
                            <p class="s3" style="padding-top: 2pt;padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;text-align: left;">Non bekido items (Min)</p>
                        </td>
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">Line Stop</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[a][' . $i . '][line_stop]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">ENGINEERING</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[a][' . $i . '][engineering]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">ADJUSTMENT</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[a][' . $i . '][adjustment]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">C/O</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[a][' . $i . '][co]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">MATERIAL SHORTAGE</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[a][' . $i . '][material_storage]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">B/D</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[a][' . $i . '][bd]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">Others</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[a][' . $i . '][other]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>


                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:55pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="3">
                            <p class="s1" style="padding-left: 15pt;text-indent: 0pt;line-height: 3pt;text-align: left;">Total</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[a][' . $i . '][total]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>


                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:15pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="3" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                            <p class="s8" style="padding-left: 3pt;text-indent: 0pt;text-align: left;">KPI</p>
                        </td>
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2" bgcolor="#D8E1F2">
                            <p class="s8" style="padding-left: 5pt;text-indent: 0pt;line-height: 4pt;text-align: left;">Bekidou(%)</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[a][' . $i . '][bekidou]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2" bgcolor="#D8E1F2">
                            <p class="s8" style="padding-left: 5pt;text-indent: 0pt;line-height: 4pt;text-align: left;">PPH(Pcs/H)</span></p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[a][' . $i . '][pph]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2" bgcolor="#D8E1F2">
                            <p class="s8" style="padding-left: 5pt;text-indent: 0pt;line-height: 4pt;text-align: left;">Chokko(％)</span></p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[a][' . $i . '][chokko]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:8pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="20">
                            <p class="s1" style="padding-top: 2pt;text-indent: 0pt;text-align: center;">B-Shift</p>
                        </td>
                        <td style="width:15pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;text-align: left;">Qty</p>
                        </td>
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">Plan<span class="s5">‥</span>A</p>
                        </td>

                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[b][' . $i . '][qunatity_a]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>


                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">Actual Sum..B</p>
                        </td>

                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[b][' . $i . '][qunatity_b]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:15pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="5">
                            <p class="s3" style="padding-left: 4pt;text-indent: 2pt;line-height: 92%;text-align: right;">Cum achiv rate=(actu sum/plan)*1</p>
                        </td>
                        <td style="width:14pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="5">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                            <p class="s1" style="padding-left: 2pt;text-indent: 0pt;text-align: left;">Actual</p>
                        </td>
                        <td style="width:26pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s1" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">YP8</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[b][' . $i . '][actual_yp8]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:26pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s1" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">YL7</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[b][' . $i . '][actual_yp7]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:26pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s1" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">20M</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[b][' . $i . '][actual_20m]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:26pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s1" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">YRA</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[b][' . $i . '][actual_yra]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:26pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s1" style="padding-left: 0pt;text-indent: 0pt;line-height: 4pt;text-align: left;">YTB-R</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[b][' . $i . '][actual_ytbr]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:15pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt" rowspan="2">
                            <p class="s3" style="padding-right: 4pt;text-indent: 0pt;line-height: 92%;text-align: justify;">e al 00</p>
                        </td>
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 0pt;text-indent: 0pt;line-height: 8pt;text-align: left;">Cum Gap <br />C=B-A</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[b][' . $i . '][cum_gap]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>


                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s1" style="padding-left: 1pt;text-indent: 0pt;line-height: 8pt;text-align: left;">Cum Achive Rate %</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[b][' . $i . '][cum_achive]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:15pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="7">
                            <p class="s3" style="padding-top: 2pt;padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;text-align: left;">Non bekido items (Min)</p>
                        </td>
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">Line Stop</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[b][' . $i . '][line_stop]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">ENGINEERING</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[b][' . $i . '][engineering]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">ADJUSTMENT</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[b][' . $i . '][adjustment]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">C/O</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[b][' . $i . '][co]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>


                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 9pt;text-align: left;">MATERIAL SHORTAGE</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[b][' . $i . '][material_storage]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>


                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">B/D</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[b][' . $i . '][bd]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">Others</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[b][' . $i . '][other]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:4pt">
                        <td style="width:55pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="3">
                            <p class="s1" style="padding-left: 15pt;text-indent: 0pt;line-height: 3pt;text-align: left;">Total</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[b][' . $i . '][total]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:15pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="3" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                            <p class="s8" style="padding-left: 3pt;text-indent: 0pt;text-align: left;">KPI</p>
                        </td>
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2" bgcolor="#D8E1F2">
                            <p class="s8" style="padding-left: 5pt;text-indent: 0pt;line-height: 4pt;text-align: left;">Bekidou(%)</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[b][' . $i . '][bekidou]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2" bgcolor="#D8E1F2">
                            <p class="s8" style="padding-left: 1pt;text-indent: 0pt;line-height: 8pt;text-align: left;">PPH<br>(Pcs/H）</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[b][' . $i . '][pph]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2" bgcolor="#D8E1F2">
                            <p class="s8" style="padding-left: 5pt;text-indent: 0pt;line-height: 4pt;text-align: left;">Chokko(％)</span></p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[b][' . $i . '][chokko]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:8pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="17">
                            <p class="s1" style="padding-top: 2pt;padding-left: 24pt;text-indent: 0pt;text-align: left;">C-Shift</p>
                        </td>
                        <td style="width:15pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;text-align: left;">Qty</p>
                        </td>
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">Plan<span class="s5">‥</span>A</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[c][' . $i . '][qunatity_a]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">Actual Sum<span class="s5">・・</span>B</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[c][' . $i . '][qunatity_b]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:15pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="5">
                            <p class="s3" style="padding-left: 4pt;text-indent: 2pt;line-height: 92%;text-align: right;">Cum achiv rate=(actu sum/plan)*1</p>
                        </td>
                        <td style="width:14pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="5">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                            <p class="s1" style="padding-left: 2pt;text-indent: 0pt;text-align: left;">Actual</p>
                        </td>
                        <td style="width:26pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s1" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">YP8</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[c][' . $i . '][actual_yp8]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:26pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s1" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">YL7</p>
                        </td>

                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[c][' . $i . '][actual_yp7]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:26pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s1" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">20M</p>
                        </td>

                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[c][' . $i . '][actual_20m]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:26pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s1" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">YRA</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[c][' . $i . '][actual_yra]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:26pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s1" style="padding-left: 1pt;text-indent: 0pt;line-height: 8pt;text-align: left;">YTB-R</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[c][' . $i . '][actual_ytbr]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:15pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt" rowspan="2">
                            <p class="s3" style="padding-right: 4pt;text-indent: 0pt;line-height: 92%;text-align: justify;">e al 00</p>
                        </td>
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 8pt;text-align: left;">Cum Gap<br>C=B-A</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[c][' . $i . '][cum_gap]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s1" style="padding-left: 1pt;text-indent: 0pt;line-height: 8pt;text-align: left;">Cum Achive Rate %</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[c][' . $i . '][cum_achive]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:15pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="7">
                            <p class="s3" style="padding-top: 2pt;padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;text-align: left;">Non bekido items (Min)</p>
                        </td>
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">Line Stop</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[c][' . $i . '][line_stop]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">ENGINEERING</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[c][' . $i . '][engineering]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">ADJUSTMENT</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[c][' . $i . '][adjustment]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">C/O</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[c][' . $i . '][co]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 8pt;text-align: left;">MATERIAL SHORTAGE</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[c][' . $i . '][material_storage]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">B/D</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[c][' . $i . '][bd]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                            <p class="s3" style="padding-left: 1pt;text-indent: 0pt;line-height: 3pt;text-align: left;">Others</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[c][' . $i . '][other]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:55pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="3">
                            <p class="s1" style="padding-left: 15pt;text-indent: 0pt;line-height: 3pt;text-align: left;">Total</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[c][' . $i . '][total]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:6pt">
                        <td style="width:15pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="3">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:8pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="3">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:15pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="3" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                            <p class="s8" style="padding-left: 3pt;text-indent: 0pt;text-align: left;">KPI</p>
                        </td>
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2" bgcolor="#D8E1F2">
                            <p class="s8" style="padding-left: 5pt;text-indent: 0pt;line-height: 4pt;text-align: left;">Bekidou(%)</p>
                        </td>

                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[c][' . $i . '][bekidou]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2" bgcolor="#D8E1F2">
                            <p class="s8" style="padding-left: 5pt;text-indent: 0pt;line-height: 4pt;text-align: left;">PPH(Pcs/H)</span></p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[c][' . $i . '][pph]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2" bgcolor="#D8E1F2">
                            <p class="s8" style="padding-left: 5pt;text-indent: 0pt;line-height: 4pt;text-align: left;">Chokko(%)</p>
                        </td>
                        <?php for ($i = 1; $i <= $endDay; $i++) { ?>
                            <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;">
                                    <?= Html::activeTextInput($model, 'gd[c][' . $i . '][chokko]', ["class" => ""]) ?>
                                </p>
                            </td>
                        <?php } ?>

                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:78pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="5" bgcolor="#D8E1F2">
                            <p class="s12" style="padding-left: 8pt;text-indent: 0pt;line-height: 3pt;text-align: left;">Total Production Plan <span class="s13">【</span>A+B+C ,Qty<span class="s13">】</span></p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:23pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:23pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:23pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:23pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:23pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:23pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                    <tr style="height:5pt">
                        <td style="width:78pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="5" bgcolor="#D8E1F2">
                            <p class="s12" style="padding-left: 8pt;text-indent: 0pt;line-height: 3pt;text-align: left;">Total Production Actual<span class="s13">【</span>A+B+C,Qty<span class="s13">】</span></p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:23pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:23pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:23pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:23pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:23pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:23pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                        <td style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D8E1F2">
                            <p style="text-indent: 0pt;text-align: left;">
                                <br />
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="card-footer mg-t-auto mg-d-10">

        </div>
        <?php ActiveForm::end(); ?>