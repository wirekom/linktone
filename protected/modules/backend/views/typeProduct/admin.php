<?php
/* @var $this TypeProductController */
/* @var $model TypeProduct */


$this->breadcrumbs = array(
    'Type Products',
);

$this->menu = array(
    array('label' => 'Create', 'url' => array('create'), 'icon' => 'file'),
);
?>

<h1>Manage Type Products</h1>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'type-product-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'name',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));
?>