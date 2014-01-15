<?php
/* @var $this UserController */
/* @var $model User */


$this->breadcrumbs = array(
    'Users' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List', 'url' => array('index'), 'icon' => 'list'),
    array('label' => 'Create', 'url' => array('create'), 'icon' => 'file'),
);
?>

<h1>Manage Users</h1>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'user-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'username',
        'email',
        'birthdate',
        array(
            'name' => 'status',
            'type' => 'raw',
            'value' => 'CHtml::encode($data->statusText)',
            'filter' => $model->statusOptions,
        ),
        /*
          'surename',
          'lastname',
          'role_id',
          'products_id',
         */
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));
?>