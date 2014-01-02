<?php
/* @var $this RoleController */
/* @var $model Role */
?>

<?php
$this->breadcrumbs = array(
    'Roles' => array('admin'),
    'Create',
);

$this->menu = array(
    array('label' => 'Manage', 'url' => array('admin'), 'icon' => 'list-alt'),
);
?>

<h1>Create Role</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>