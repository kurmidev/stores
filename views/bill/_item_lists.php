<?php

use app\models\TaxMaster;
use yii\helpers\Html;
use app\components\Constants as C;
use app\models\Products;
use yii\helpers\ArrayHelper;

$productData = Products::find()->where(['status'=>C::STATUS_ACTIVE])->asArray()->all();
$productList = ArrayHelper::map($productData,'id','name');

$cnt = !empty($model->items) ? array_keys($model->items) : [0];
?>
<table class="table table-striped table-bordered" id="clonetable">
    <thead>
        <tr>
            <th>Product</th>
            <th>Serial Number</th>
            <th>Warranty End date</th>
            <th>Rate</th>
            <th>Quantity</th>
            <th>MRP</th>
            <th>Discount Type</th>
            <th>Discount</th>
            <th>MRP Tax</th>
            <th>Total MRP</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($cnt as $i) {
        ?>
            <tr>
                <td>
                    <?= $form->field($model, 'items[' . $i . '][product_id]', ['options' => ['class' => 'form-group']])->begin() ?>
                    <?= Html::activeDropDownList($model, 'items[' . $i . '][product_id]',$productList, ['class' => 'form-control product reset',"id"=>"items_{$i}_product_id",  "prompt" => "Select Option", "rel" =>$i]) ?>
                    <?= Html::error($model, 'items[' . $i . '][product_id]', ['class' => 'error help-block']) ?>
                    <?= $form->field($model, 'items[' . $i . '][product_id]')->end() ?>
                </td>
                <td>
                    <?= $form->field($model, 'items[' . $i . '][serial_number]', ['options' => ['class' => 'form-group']])->begin() ?>
                    <?= Html::activeTextInput($model, 'items[' . $i . '][serial_number]', ['class' => 'form-control  reset']) ?>
                    <?= Html::error($model, 'items[' . $i . '][serial_number]', ['class' => 'error help-block']) ?>
                    <?= $form->field($model, 'items[' . $i . '][serial_number]')->end() ?>
                </td>
                <td>
                    <?= $form->field($model, 'items[' . $i . '][warranty_end_date]', ['options' => ['class' => 'form-group']])->begin() ?>
                    <?= Html::activeTextInput($model, 'items[' . $i . '][warranty_end_date]', ['class' => 'form-control cal reset']) ?>
                    <?= Html::error($model, 'items[' . $i . '][warranty_end_date]', ['class' => 'error help-block']) ?>
                    <?= $form->field($model, 'items[' . $i . '][warranty_end_date]')->end() ?>
                </td>
                <td>
                    <?= $form->field($model, 'items[' . $i . '][rate]', ['options' => ['class' => 'form-group']])->begin() ?>
                    <?= Html::activeTextInput($model, 'items[' . $i . '][rate]', ['class' => 'form-control  reset', "id" => 'items_' . $i . '_rate']) ?>
                    <?= Html::error($model, 'items[' . $i . '][rate]', ['class' => 'error help-block']) ?>
                    <?= $form->field($model, 'items[' . $i . '][rate]')->end() ?>
                </td>
                <td>
                    <?= $form->field($model, 'items[' . $i . '][quantity]', ['options' => ['class' => 'form-group']])->begin() ?>
                    <?= Html::activeTextInput($model, 'items[' . $i . '][quantity]', ['class' => 'form-control quan reset', "id" => 'items_' . $i . '_quantity', "rel" =>$i]) ?>
                    <?= Html::error($model, 'items[' . $i . '][quantity]', ['class' => 'error help-block']) ?>
                    <?= $form->field($model, 'items[' . $i . '][quantity]')->end() ?>
                </td>
                <td>
                    <?= $form->field($model, 'items[' . $i . '][amount]', ['options' => ['class' => 'form-group']])->begin() ?>
                    <?= Html::activeTextInput($model, 'items[' . $i . '][amount]', ['class' => 'form-control  reset', "id" => 'items_' . $i . '_amount']) ?>
                    <?= Html::error($model, 'items+' . $i . '_amount', ['class' => 'error help-block']) ?>
                    <?= $form->field($model, 'items[' . $i . '][amount]')->end() ?>
                </td>
                <td>
                    <?= $form->field($model, 'items[' . $i . '][discount_type]', ['options' => ['class' => 'form-group']])->begin() ?>
                    <?= Html::activeDropDownList($model, 'items[' . $i . '][discount_type]',C::DISCOUNT_LABEL, ['class' => 'form-control disc reset', "prompt" => "Select Option", "id" => 'items_' . $i . '_discount_type', "rel" =>$i]) ?>
                    <?= Html::error($model, 'items[' . $i . '][discount_type]', ['class' => 'error help-block']) ?>
                    <?= $form->field($model, 'items[' . $i . '][discount_type]')->end() ?>
                </td>
                <td>
                    <?= $form->field($model, 'items[' . $i . '][discount]', ['options' => ['class' => 'form-group']])->begin() ?>
                    <?= Html::activeTextInput($model, 'items[' . $i . '][discount]', ['class' => 'form-control discv reset', "id" => 'items_' . $i . '_discount', "rel" =>$i]) ?>
                    <?= Html::error($model, 'items[' . $i . '][discount]', ['class' => 'error help-block']) ?>
                    <?= $form->field($model, 'items[' . $i . '][discount]')->end() ?>
                </td>
                <td>
                    <?= $form->field($model, 'items[' . $i . '][tax]', ['options' => ['class' => 'form-group']])->begin() ?>
                    <?= Html::activeTextInput($model, 'items[' . $i . '][tax]', ['class' => 'form-control  reset', "id" => 'items_' . $i . '_tax']) ?>
                    <?= Html::error($model, 'items[' . $i . '][tax]', ['class' => 'error help-block']) ?>
                    <?= $form->field($model, 'items[' . $i . '][tax]')->end() ?>
                </td>
                <td>
                    <?= $form->field($model, 'items[' . $i . '][total_price]', ['options' => ['class' => 'form-group']])->begin() ?>
                    <?= Html::activeTextInput($model, 'items[' . $i . '][total_price]', ['class' => 'form-control  reset', "id" => 'items_' . $i . '_total_price']) ?>
                    <?= Html::error($model, 'items[' . $i . '][total_price]', ['class' => 'error help-block']) ?>
                    <?= $form->field($model, 'items[' . $i . '][total_price]')->end() ?>
                </td>
                <td>
                    <button type="button" class="btn btn-danger"><span class="fa fa-minus"></span></button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php
$formula = [];
$taxObj = TaxMaster::find();
foreach ($taxObj->all() as $tax) {
    $formula[] = $tax->formula;
}

$js = '
        var formulas = ' . json_encode($formula) . ';
        var product = '.json_encode($productData).'
        
        var total = 0;
        function calculateTax(amount){
           return formulas.reduce((total,formula)=> parseFloat(eval(total)) + parseFloat(eval(formula)));
        }
   
        function getproductDetails(id){
            return product.filter(function (n,i){
                return n.id===id;
            });        
        }

        function caclulateData(i){
                var product_id =  $("#items_"+i+"_product_id").val();
                var products = getproductDetails(product_id);
                if(products.length>0){
                var discount_type = $("#items_"+i+"_discount_type").val();
                var discount = $("#items_"+i+"_discount").val();
                var quantity = $("#items_"+i+"_quantity").val();
                var rate = parseFloat(products[0].price);
                var amount = quantity * rate;
                var discount_amount = discount_type=='.C::DISCOUNT_AMOUNT.' ? discount: (amount*discount)/100;
                var tax = 0;//calculateTax(amount-discount_amount)
                var final_amount = amount - discount_amount  + tax;
                $("#items_"+i+"_rate").val(rate);
                $("#items_"+i+"_amount").val(amount);
                $("#items_"+i+"_tax").val(tax);
                $("#items_"+i+"_total_price").val(final_amount);
                }
        }

        $("body").on("change", ".quan",function () {
            var rel = $(this).attr("rel");
            caclulateData(rel)
        });

        $("body").on("change", ".disc",function () {
            var rel = $(this).attr("rel");
            caclulateData(rel)
        });

        $("body").on("change", ".discv",function () {
            var rel = $(this).attr("rel");
            caclulateData(rel)
        });


        $("body").on("change", ".product",function () {
            var rel = $(this).attr("rel");

            caclulateData(rel)
        });

';
$this->registerJs($js, $this::POS_READY);
?>