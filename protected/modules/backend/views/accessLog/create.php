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

<div class="span12">
<div class="widget">
<div class="widget-head"><h4 class="heading glyphicons conversation"><i></i>Manage Access Logs</h4></div>
<div class="widget-body">
<div class="linner">
<?php $this->renderPartial('_form', array('model'=>$model)); ?>

</div>
</div>
</div>
</div>