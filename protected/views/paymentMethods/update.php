<?php
/* @var $this PaymentMethodsController */
/* @var $model PaymentMethods */
?>

<?php
$this->breadcrumbs=array(
	'Payment Methods'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Manage', 'url'=>array('admin'), 'icon' => 'list-alt'),
	array('label'=>'Create', 'url'=>array('create'), 'icon'=>'file'),
	array('label'=>'View', 'url'=>array('view', 'id'=>$model->id), 'icon'=>'eye-open'),
);
?>

    <h1>Update PaymentMethods <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>