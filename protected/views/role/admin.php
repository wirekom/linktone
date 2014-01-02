<?php
/* @var $this RoleController */
/* @var $model Role */


$this->breadcrumbs = array(
    'Roles',
);

$this->menu = array(
    array('label' => 'Create', 'url' => array('create'), 'icon' => 'file'),
);
?>

<h1>Manage Roles</h1>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'role-grid',
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