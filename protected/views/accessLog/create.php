<?php
/* @var $this AccessLogController */
/* @var $model AccessLog */
?>

<?php
$this->breadcrumbs=array(
	'Access Logs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage', 'url'=>array('admin'), 'icon' => 'list-alt'),
	array('label'=>'List', 'url'=>array('index'), 'icon'=>'list'),
);
?>

<h1>Create AccessLog</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>