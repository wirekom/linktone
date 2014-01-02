<?php
/* @var $this RoleAccessController */
/* @var $model RoleAccess */
?>

<?php
$this->breadcrumbs = array(
    'Role Accesses' => array('admin'),
    'Create',
);

$this->menu = array(
    array('label' => 'Manage', 'url' => array('admin'), 'icon' => 'list-alt'),
);
?>

<h1>Create RoleAccess</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>