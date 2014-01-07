<?php
/* @var $this BillsController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Bills',
);

$this->menu=array(
	array('label'=>'Manage', 'url'=>array('admin'), 'icon' => 'list-alt'),
	array('label'=>'Create','url'=>array('create'), 'icon'=>'file'),
);
?>

<h1>Bills</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>