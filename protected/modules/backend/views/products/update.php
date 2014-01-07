<?php
/* @var $this ProductsController */
/* @var $model Products */
?>

<?php
$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Manage', 'url'=>array('admin'), 'icon' => 'list-alt'),
	array('label'=>'List', 'url'=>array('index'), 'icon'=>'list'),
	array('label'=>'Create', 'url'=>array('create'), 'icon'=>'file'),
	array('label'=>'View', 'url'=>array('view', 'id'=>$model->id), 'icon'=>'eye-open'),
);
?>

    <h1>Update Products <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>