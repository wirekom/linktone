<?php
/* @var $this RoleAccessController */
/* @var $model RoleAccess */


$this->breadcrumbs = array(
    'Role Accesses',
);

$this->menu = array(
    array('label' => 'Create', 'url' => array('create'), 'icon' => 'file'),
);
?>

<h1>Manage Role Accesses</h1>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'role-access-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'access_name',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));
?>