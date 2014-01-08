<?php
/* @var $this PaymentLogController */
/* @var $model PaymentLog */
?>

<?php
$this->breadcrumbs=array(
	'Payment Logs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Manage', 'url'=>array('admin'), 'icon' => 'list-alt'),
	array('label'=>'List', 'url'=>array('index'), 'icon'=>'list'),
	array('label'=>'Create', 'url'=>array('create'), 'icon'=>'file'),
	array('label'=>'Update', 'url'=>array('update', 'id'=>$model->id), 'icon'=>'pencil'),
	array('label'=>'Delete', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'), 'icon'=>'trash'),
);
?>

<h1>View PaymentLog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'ref_no',
		'tranx_id',
		'response_code',
		'rc',
		'amount',
		'timestamp',
		'bills_id',
	),
)); ?>