<?php
/* @var $this AccessLogController */
/* @var $model AccessLog */
?>

<?php
$this->breadcrumbs=array(
	'Access Logs'=>array('index'),
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

<h1>View AccessLog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'terminal_type',
		'access_type',
		'status_message',
		'result',
		'timestamp',
		'user_id',
	),
)); ?>