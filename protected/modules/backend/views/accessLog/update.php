<?php
/* @var $this AccessLogController */
/* @var $model AccessLog */
?>

<?php
$this->breadcrumbs=array(
	'Access Logs'=>array('index'),
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

    <h1>Update AccessLog <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>