<?php
/* @var $this BillsController */
/* @var $model Bills */
?>

<?php
$this->breadcrumbs=array(
	'Bills'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage', 'url'=>array('admin'), 'icon' => 'list-alt'),
	array('label'=>'List', 'url'=>array('index'), 'icon'=>'list'),
);
?>

<h1>Create Bills</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>