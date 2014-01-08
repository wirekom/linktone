<?php
/* @var $this PaymentLogController */
/* @var $model PaymentLog */
?>

<?php
$this->breadcrumbs=array(
	'Payment Logs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage', 'url'=>array('admin'), 'icon' => 'list-alt'),
	array('label'=>'List', 'url'=>array('index'), 'icon'=>'list'),
);
?>

<h1>Create PaymentLog</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>