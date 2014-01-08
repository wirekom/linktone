<?php
/* @var $this AccessLogController */
/* @var $model AccessLog */


$this->breadcrumbs = array(
    'Access Logs' => array('admin')
);

$this->menu = array(
    array('label' => 'Create', 'url' => array('create'), 'icon' => 'file'),
);
?>

<h1>Manage Access Logs</h1>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'access-log-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        array(
            'name' => 'user_id',
            'type' => 'raw',
            'value' => 'CHtml::encode($data->user->username)',
        ),
        'terminal_type',
        'access_type',
        'status_message',
        'result',
        'timestamp',
//        array(
//            'class' => 'bootstrap.widgets.TbButtonColumn',
//        ),
    ),
));
?>