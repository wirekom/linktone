<?php
/* @var $this ProductsController */
/* @var $products Products */
?>

<?php
$this->breadcrumbs = array(
    'Products' => array('index'),
    $products->name => array('view', 'id' => $products->id),
    'Update',
);

$this->menu = array(
    array('label' => 'Manage', 'url' => array('admin'), 'icon' => 'list-alt'),
    array('label' => 'List', 'url' => array('index'), 'icon' => 'list'),
    array('label' => 'Create', 'url' => array('create'), 'icon' => 'file'),
    array('label' => 'View', 'url' => array('view', 'id' => $products->id), 'icon' => 'eye-open'),
);
?>

<h1>Update Products <?php echo $products->id; ?></h1>

<?php $this->renderPartial('_form', array('products' => $products)); ?>