<?php
/* @var $this OperationController */
/* @var $model Operation */
?>

<?php
$this->breadcrumbs = array(
    'Operations' => array('admin'),
    'Create',
);

$this->menu = array(
    array('label' => 'Manage', 'url' => array('admin'), 'icon' => 'list-alt'),
);
?>

<h1>Create Operation</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>