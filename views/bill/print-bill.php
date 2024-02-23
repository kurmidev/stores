<?php

use app\components\Constants as C;
use yii\bootstrap5\Html;

$i = 1;
$total = $base_amount = $tax = 0;
$f = new NumberFormatter("en_IN", NumberFormatter::SPELLOUT);
$base_amount = $tax = $total = 0;

?>
<div style="display:block;border:1px solid #000;text-align:left;margin:10px;font-size:12pt;">
    <table style="display:block;border:1px solid #000;text-align:left;border-collapse:collapse;" cellspacing="0" width="100%">
        <tr>
            <td>
                <b><?= SITE_NAME ?></b>
            </td>
            <td rowspan="4" style="text-align:center;width:50%;border:1px solid #000;">
                <?= !empty(SITE_LOGO) ? Html::img(SITE_LOGO, ["width" => "100px", "height" => "100px"]) : "" ?>
            </td>
        </tr>
        <tr>
            <td>
                <b>Address: </b> <?=SITE_ADDRESS ?>
            </td>
        </tr>
        <tr>
            <td> <b>Call :</b> <?=SITE_PHONE ?> /<b> Email :</b>
                <?=SITE_EMAIL ?>
            </td>
        </tr>
        <tr>
            <td>
                <b>GSTIN :</b> <?=  "" ?> / <b>PAN No. :</b> <?= "" ?>
            </td>
        </tr>
        <tr style="display:block;text-align:left;">
            <td style="border-right:1px solid #000;border-top:1px solid #000;">
                <b>Invoice No : </b> <?= $model->bill_no ?>
            </td>
            <td style="border-right:1px solid #000;">
                <b>Invoice Date : </b> <?= date("d/m/Y", strtotime($model->created_at)) ?>
            </td>
        </tr>
        <tr>
            <td style="border-right:1px solid #000;border-top:1px solid #000;padding:3px;"><b>Billed To:</b></td>
            <td style="border-left:1px solid #000;border-top:1px solid #000;padding:3px;"><b>Shipped To:</b></td>
        </tr>
        <tr>
            <td style="border-right:1px solid #000;"><?= $model->customer->name ?></td>
            <td style="border-right:1px solid #000;"><?= $model->customer->name ?></td>
        </tr>
        <tr>
            <td style="border-right:1px solid #000;"><?= $model->customer->address ?></td>
            <td style="border-left:1px solid #000;"><?= $model->customer->address ?></td>
        </tr>
        <tr>
            <td style="border-right:1px solid #000;padding:3px;"> <b> Mobile No:</b><?= $model->customer->mobile_no ?> </td>
            <td style="border-left:1px solid #000;padding:3px;"><b>Alternate No:</b><?= $model->customer->alternate_number ?></td>
        </tr>
        <tr>
            <td style="border-right:1px solid #000;padding:3px;"><b>GST/UIN No </b>:<?= $model->customer->gst_no ?></td>
            <td style="border-left:1px solid #000;padding:3px;"><b>GST/UIN No </b>:<?= $model->customer->gst_no ?></td>
        </tr>
        <tr>
            <td colspan="2">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sr.no</th>
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
                        <?php foreach ($model->billDetails as $d) { ?>
                            <tr>
                                <td><?= $i++ ?></td>
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
                            ?>
                        <?php } ?>
                        <tr>
                            <td colspan="5"></td>
                            <td colspan="2">Taxable Amount</td>
                            <td colspan="2" style="text-align:right;"><?= $base_amount ?></td>
                        </tr>
                        <tr>
                            <td colspan="5"></td>
                            <td colspan="2">Tax Amount</td>
                            <td colspan="2" style="text-align:right;"><?= $tax ?></td>
                        </tr>
                        <tr>
                            <td colspan="5"></td>
                            <td colspan="2">Payable Amount</td>
                            <td colspan="2" style="text-align:right;"><?= $total ?></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="13" style="border-top:1px solid #000;border-bottom:1px solid #000;padding:3px;">
                Amount Chargeable (in words) : <b><?= ucwords($f->format(round($total, 2))) . " only" ?></b>
            </td>
        </tr>
       <?php if(!empty($model->payment[0])){?> 
        <tr>
            <td colspan="2"><b>Payment Details:</b></td>
        </tr>
        <tr>
            <td colspan="2" ><b>Instrument No:</b> <?= $model->payment[0]["instrument_no"] ?></td>
        </tr>
        <tr>
            <td><b>Instrument Date:</b> <?= $model->payment[0]["instrument_date"] ?></td>
        </tr>
        <tr>
            <td><b>Mode:</b> <?=$model->payment[0]["instrument_mode"]?></td>
        </tr>
        <tr>
            <td><b>Receipt No:</b> <?= $model->payment[0]["receipt_no"] ?></td>
        </tr>
        <?php } ?>
        <tr>
            <td rowspan="2" style="border-right:1px solid #000;border-top:1px solid #000;padding:3px;">
                <b>Terms & Conditions :-</b><br>
                <ol>
                    <li> Goods once sold will not be taken back</li>
                    <li>Interest @18% p.a will be charged if the payment is not made with in the
                        stipulated time.</li>
                    <li>Subject of Maharashtra jurisdiction only</li>
                </ol>
            </td>
            <td  rowspan="2" style="border-top:1px solid #000;">
                <table width="100%">
                    <tbody>
                        <tr>
                            <td >
                                <br><br><br>
                                RECEIVER SIGN
                            </td>
                            <td>
                                FOR <?= SITE_NAME ?>
                                <br><br><br>

                                PROPRIETOR
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
</div>