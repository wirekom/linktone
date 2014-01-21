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

<?php 
$this->pageTitle = "Create Bills";
?>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>