<?php
/* @var $this TypeProductController */
/* @var $model TypeProduct */
?>

<?php
$this->breadcrumbs = array(
    'Type Products' => array('admin'),
    'Create',
);

$this->menu = array(
    array('label' => 'Manage', 'url' => array('admin'), 'icon' => 'list-alt'),
);
?>

<h1>Create TypeProduct</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>