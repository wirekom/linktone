<?php
/* @var $this BillsController */
/* @var $model Bills */
?>

<?php
$this->breadcrumbs = array(
    'Bills' => array('index'),
    $model->invoice_no => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'Manage', 'url' => array('admin'), 'icon' => 'list-alt'),
    array('label' => 'List', 'url' => array('index'), 'icon' => 'list'),
    array('label' => 'Create', 'url' => array('create'), 'icon' => 'file'),
    array('label' => 'View', 'url' => array('view', 'id' => $model->id), 'icon' => 'eye-open'),
);
?>

<?php 
$this->pageTitle = "Update Bills".$model->invoice_no;
?>


<?php $this->renderPartial('_form', array('model' => $model)); ?>