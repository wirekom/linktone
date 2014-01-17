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

<h1>View Products <?php echo $model->name; ?></h1>

<?php
$this->widget('bootstrap.widgets.TbTabs', array(
    'tabs' => array(
        array(
            'label' => 'Product',
            'active' => true,
            'content' => $this->widget('zii.widgets.CDetailView', array(
                'htmlOptions' => array(
                    'class' => 'table table-striped table-condensed table-hover',
                ),
                'data' => $model,
                'attributes' => array(
                    array(
                        'name' => 'type_product',
                        'type' => 'raw',
                        'value' => CHtml::encode($model->typeText),
                    ),
                    array(
                        'name' => 'parent_id',
                        'type' => 'raw',
                        'value' => CHtml::encode($model->parentName),
                    ),
                    'name',
                    'zte_product_code',
                    'price',
                )), true)
        ),
        array(
            'label' => 'Description',
            'content' => $this->widget('zii.widgets.CDetailView', array(
                'htmlOptions' => array(
                    'class' => 'table table-striped table-condensed table-hover',
                ),
                'data' => $model->productDescription,
                'attributes' => array(
                    'title',
                    'description',
                    'director',
                    'actors',
                    'genre',
                    'writer',
                    'author',
//                    'slug',
                    'created',
                    'updated',
                )), true)
        ),
    ),
));
?>