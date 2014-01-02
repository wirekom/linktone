<?php
/* @var $this RoleAccessController */
/* @var $model RoleAccess */
?>

<?php
$this->breadcrumbs = array(
    'Role Accesses' => array('admin'),
    $model->id,
);

$this->menu = array(
    array('label' => 'Manage', 'url' => array('admin'), 'icon' => 'list-alt'),
    array('label' => 'Create', 'url' => array('create'), 'icon' => 'file'),
    array('label' => 'Update', 'url' => array('update', 'id' => $model->id), 'icon' => 'pencil'),
    array('label' => 'Delete', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?'), 'icon' => 'trash'),
);
?>

<h1>View RoleAccess #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data' => $model,
    'attributes' => array(
        'access_name',
    ),
));
?>