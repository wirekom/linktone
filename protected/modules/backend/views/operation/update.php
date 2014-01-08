<?php
/* @var $this OperationController */
/* @var $model Operation */
?>

<?php
$this->breadcrumbs = array(
    'Operations' => array('admin'),
    $model->name => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'Manage', 'url' => array('admin'), 'icon' => 'list-alt'),
    array('label' => 'Create', 'url' => array('create'), 'icon' => 'file'),
);
?>

<h1>Update Operation <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>