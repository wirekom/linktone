<?php
/* @var $this BillsController */
/* @var $model Bills */


$this->breadcrumbs = array(
    'Bills' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List', 'url' => array('index'), 'icon' => 'list'),
    array('label' => 'Create', 'url' => array('create'), 'icon' => 'file'),
);
?>

<?php 
$this->pageTitle = "Manage Bills";
?>


<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'bills-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        array(
            'name' => 'user_id',
            'type' => 'raw',
            'value' => 'CHtml::encode($data->user->username)',
            'filter' => $model->userOptions,
        ),
        array(
            'name' => 'payment_methods_id',
            'type' => 'raw',
            'value' => 'CHtml::encode($data->paymentMethods->payment_name)',
            'filter' => $model->paymentMethodsOptions,
        ),
        'invoice_no',
        'amount',
        'date_produced',
        'due_date',
        'payment_time',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));
?>