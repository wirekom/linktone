<?php
/* @var $this PaymentLogController */
/* @var $model PaymentLog */


$this->breadcrumbs = array(
    'Payment Logs',
);

$this->menu = array(
    array('label' => 'List', 'url' => array('index'), 'icon' => 'list'),
    array('label' => 'Create', 'url' => array('create'), 'icon' => 'file'),
);
?>

<h1>Manage Payment Logs</h1>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'payment-log-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        array(
            'name' => 'bills_id',
            'type' => 'raw',
            'value' => 'CHtml::link(CHtml::encode($data->bills->invoice_no), array(\'bills/view\', \'id\' => $data->bills_id))',
        ),
        'ref_no',
        'tranx_id',
        'response_code',
        'rc',
        'amount',
        'timestamp',
//        array(
//            'class' => 'bootstrap.widgets.TbButtonColumn',
//        ),
    ),
));
?>