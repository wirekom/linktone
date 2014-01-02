<?php
/* @var $this RoleController */
/* @var $model Role */
?>

<?php
$this->breadcrumbs = array(
    'Roles' => array('admin'),
    $model->name,
);

$this->menu = array(
    array('label' => 'Manage', 'url' => array('admin'), 'icon' => 'list-alt'),
    array('label' => 'Create', 'url' => array('create'), 'icon' => 'file'),
    array('label' => 'Update', 'url' => array('update', 'id' => $model->id), 'icon' => 'pencil'),
    array('label' => 'Delete', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?'), 'icon' => 'trash'),
);
?>

<h1>View Role #<?php echo $model->name; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data' => $model,
    'attributes' => array(
        'name',
        array(
            'name' => 'operations',
            'type' => 'html',
            'value' => $model->operationsFormat,
        ),
    ),
));
?>
<div id="users">
    <?php
    $this->renderPartial('_users', array(
        'users' => $model->users,
    ));
    ?>
</div>