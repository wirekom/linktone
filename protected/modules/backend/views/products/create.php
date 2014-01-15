<?php
/* @var $this ProductsController */
/* @var $products Products */
?>

<?php
$this->breadcrumbs = array(
    'Products' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'Manage', 'url' => array('admin'), 'icon' => 'list-alt'),
    array('label' => 'List', 'url' => array('index'), 'icon' => 'list'),
);
?>

<h1>Create Products</h1>

<?php $this->renderPartial('_form', array('products' => $products)); ?>