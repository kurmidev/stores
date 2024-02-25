<div class="row">
    <?= $this->render('_level1', ['model' => $model]); ?>
</div>
<div class="row">
  
    <div class="col-md-6">
        <?= $this->render('bar_chart', [
            "title" => "Invoice",
            "response" => [
                "id"=>"invoicebargraph",
                "paid_invoice" => $model->getMonthlyPaidInvoice(false),
                "unpaid_invoice" => $model->getMonthlyUnPaidInvoice(false)
            ]
        ]) ?>
    </div>
    <div class="col-md-6">
        <?= $this->render('donut_chart', [
            "title" => "  Top 5 Product Sales",
            "response" => $model->topFiveProductSold
        ]) ?>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <?= $this->render('_table', [
            "title" => " Paid Invoice",
            "header" => ["Month", "Count", "Amount"],
            "response" => $model->monthlyPaidInvoice
        ]) ?>
    </div>
    <div class="col-md-3">
        <?= $this->render('_table', [
            "title" => " Un-Paid Invoice",
            "header" => ["Month", "Count", "Amount"],
            "response" => $model->monthlyUnPaidInvoice
        ]) ?>
    </div>
    <div class="col-md-3">
        <?= $this->render('_table', [
            "title" => "  Customer Invoice Summary",
            "header" => ["Month", "Count", "Amount"],
            "response" => $model->monthlyOutstanding
        ]) ?>
    </div>
   
    <div class="col-md-3">
        <?= $this->render('_details_table', [
            "title" => "Invoice Summary",
            "header" => ["Month", "Count", "Amount"],
            "response" => $model->customerInvoiceSummary
        ]) ?>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <?= $this->render('_table', [
            "title" => "  New Sales & Collection Summary ",
            "header" => ["Month", "Customer", "Total Bills", "Total Amount", "Pending Bills", "Pending Amount", "Collected Bills", "Collected Amount"],
            "response" => $model->Summary
        ]) ?>
    </div>
</div>