<?php
/* @var $this UserController */
/* @var $model User */
?>

<?php
$this->breadcrumbs = array(
    'Users' => array('index'),
    $model->username,
);

$this->menu = array(
    array('label' => 'Manage', 'url' => array('admin'), 'icon' => 'list-alt'),
    array('label' => 'List', 'url' => array('index'), 'icon' => 'list'),
    array('label' => 'Create', 'url' => array('create'), 'icon' => 'file'),
    array('label' => 'Update', 'url' => array('update', 'id' => $model->id), 'icon' => 'pencil'),
    array('label' => 'Delete', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?'), 'icon' => 'trash'),
);
?>

<h1>View User #<?php echo $model->username; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data' => $model,
    'attributes' => array(
        'username',
        'email',
        'birthdate',
        'surename',
        'lastname',
        'status',
        array(
            'name' => 'role_id',
            'type' => 'raw',
            'value' => CHtml::link(CHtml::encode($model->role->name), array('role/view', 'id' => $model->role_id)),
        ),
        array(
            'name' => 'products_id',
            'type' => 'raw',
            'value' => CHtml::link(CHtml::encode($model->products->name), array('products/view', 'id' => $model->products_id)),
        ),
    ),
));
?>