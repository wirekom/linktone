<?php
/* @var $this OperationController */
/* @var $model Operation */


$this->breadcrumbs = array(
    'Operations',
);

$this->menu = array(
    array('label' => 'Generate All', 'url' => array('generate'), 'icon' => 'asterisk'),
    array('label' => 'Create', 'url' => array('create'), 'icon' => 'file'),
);
?>

<h1>Manage Operations</h1>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'operation-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'name',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{update}{delete}',
        ),
    ),
));
?>