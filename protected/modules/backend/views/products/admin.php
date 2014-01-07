<?php
/* @var $this ProductsController */
/* @var $model Products */


$this->breadcrumbs = array(
    'Products' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List', 'url' => array('index'), 'icon' => 'list'),
    array('label' => 'Create', 'url' => array('create'), 'icon' => 'file'),
);
?>

<h1>Manage Products</h1>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'products-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        array(
            'name' => 'type_product',
            'type' => 'raw',
            'value' => 'CHtml::encode($data->typeText)',
            'filter' => $model->typeOptions,
        ),
        array(
            'name' => 'parent_id',
            'type' => 'raw',
            'value' => 'CHtml::encode($data->parentName)',
            'filter' => $model->productsOptions,
        ),
        'name',
        'zte_product_code',
        'price',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));
?>