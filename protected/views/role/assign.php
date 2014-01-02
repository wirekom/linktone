
<?php
$this->breadcrumbs = array(
    'Roles' => array('admin'),
    $model->name => array('view', 'id' => $model->id),
    'Assing',
);

$this->menu = array(
    array('label' => 'Manage', 'url' => array('admin'), 'icon' => 'list-alt'),
    array('label' => 'Create', 'url' => array('create'), 'icon' => 'file'),
    array('label' => 'Update', 'url' => array('update', 'id' => $model->id), 'icon' => 'pencil'),
    array('label' => 'View', 'url' => array('view', 'id' => $model->id), 'icon' => 'eye-open'),
);

Yii::app()->clientScript->registerScript('assign', "
jQuery('#user-grid a.assign').live('click',function() {
        if(!confirm('Are you sure you want to assign user?')) return false;
        
        var url = $(this).attr('href');
        //  do your post request here
        $.post(url,function(res){
             $.fn.yiiGridView.update('user-grid');
         });
        return false;
});
");
?>


<h1>Assing User to Role <?php echo $model->name; ?></h1>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'user-grid',
    'dataProvider' => $dataProvider,
    'columns' => array(
        'username',
        'email',
        'birthdate',
        'status',
        /*
          'surename',
          'lastname',
          'role_id',
          'products_id',
         */
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{assign}',
            'buttons' => array(
                'assign' => array(
                    'label' => 'Assign', //Text label of the button.
                    'options' => array('class' => 'assign'),
                    'url' => 'Yii::app()->createUrl("role/ajaxAssign", array("role_id"=>' . $model->id . ', "user_id"=>$data->id))',
                    'visible' => 'true', //A PHP expression for determining whether the button is visible.
                ),
            ),
        ),
    ),
));
?>