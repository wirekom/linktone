<?php
/* @var $this PaymentLogController */
/* @var $model PaymentLog */
?>

<?php
$this->breadcrumbs=array(
	'Payment Logs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Manage', 'url'=>array('admin'), 'icon' => 'list-alt'),
	array('label'=>'List', 'url'=>array('index'), 'icon'=>'list'),
	array('label'=>'Create', 'url'=>array('create'), 'icon'=>'file'),
	array('label'=>'View', 'url'=>array('view', 'id'=>$model->id), 'icon'=>'eye-open'),
);
?>

    <h1>Update PaymentLog <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>