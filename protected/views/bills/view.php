<?php
/* @var $this BillsController */
/* @var $model Bills */
?>

<?php
$this->breadcrumbs = array(
    'Bills' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'Manage', 'url' => array('admin'), 'icon' => 'list-alt'),
    array('label' => 'List', 'url' => array('index'), 'icon' => 'list'),
    array('label' => 'Create', 'url' => array('create'), 'icon' => 'file'),
    array('label' => 'Update', 'url' => array('update', 'id' => $model->id), 'icon' => 'pencil'),
    array('label' => 'Delete', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?'), 'icon' => 'trash'),
);
?>

<h1>View Bills #<?php echo $model->invoice_no; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data' => $model,
    'attributes' => array(
        array(
            'name' => 'user_id',
            'type' => 'raw',
            'value' => CHtml::link(CHtml::encode($model->user->username), array('user/view', 'id' => $model->user_id)),
        ),
        array(
            'name' => 'payment_methods_id',
            'type' => 'raw',
            'value' => CHtml::link(CHtml::encode($model->paymentMethods->payment_name), array('paymentMethods/view', 'id' => $model->payment_methods_id)),
        ),
        'invoice_no',
        'amount',
        'date_produced',
        'due_date',
        'payment_time',
    ),
));
?>