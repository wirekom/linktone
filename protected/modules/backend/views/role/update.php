<?php
/* @var $this RoleController */
/* @var $model Role */
?>

<?php
$this->breadcrumbs = array(
    'Roles' => array('admin'),
    $model->name => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'Manage', 'url' => array('admin'), 'icon' => 'list-alt'),
    array('label' => 'Create', 'url' => array('create'), 'icon' => 'file'),
    array('label' => 'View', 'url' => array('view', 'id' => $model->id), 'icon' => 'eye-open'),
);
?>

<h1>Update Role <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>