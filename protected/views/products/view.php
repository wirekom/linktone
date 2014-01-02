<?php
/* @var $this ProductsController */
/* @var $model Products */
?>

<?php
$this->breadcrumbs = array(
    'Products' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'Manage', 'url' => array('admin'), 'icon' => 'list-alt'),
    array('label' => 'List', 'url' => array('index'), 'icon' => 'list'),
    array('label' => 'Create', 'url' => array('create'), 'icon' => 'file'),
    array('label' => 'Update', 'url' => array('update', 'id' => $model->id), 'icon' => 'pencil'),
    array('label' => 'Delete', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?'), 'icon' => 'trash'),
);
?>

<h1>View Products #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data' => $model,
    'attributes' => array(
        array(
            'name' => 'type_product_id',
            'type' => 'raw',
            'value' => CHtml::link(CHtml::encode($model->typeProduct->name), array('typeProduct/view', 'id' => $model->type_product_id)),
        ),
        array(
            'name' => 'parent_id',
            'type' => 'raw',
            'value' => CHtml::encode($model->parentName),
        ),
        'parent_id',
        'name',
        'zte_product_code',
        'price',
    ),
));
?>