<?php
$this->pageTitle = Yii::app()->name . ' - ' . "Profile";
$this->breadcrumbs = array(
    "Profile",
);
$this->menu = array(
    array('label' => 'Edit', 'url' => array('edit')),
    array('label' => 'Change password', 'url' => array('changepassword')),
    array('label' => 'Logout', 'url' => array('/site/logout')),
);
?><h1><?php echo 'Your profile'; ?></h1>

<?php if (Yii::app()->user->hasFlash('profileMessage')): ?>
    <div class="success">
        <?php echo Yii::app()->user->getFlash('profileMessage'); ?>
    </div>
<?php endif; ?>

<?php
$this->widget('bootstrap.widgets.TbTabs', array(
    'tabs' => array(
        array(
            'label' => 'Profile',
            'active' => true,
            'content' => $this->widget('zii.widgets.CDetailView', array(
                'htmlOptions' => array(
                    'class' => 'table table-striped table-condensed table-hover',
                ),
                'data' => $model,
                'attributes' => array(
                    'username',
                    'surename',
                    'lastname',
                    'email',
                    'birthdate',
                    'address',
                    'country',
                    'province',
                    'city',
                )), true)
        ),
        array(
            'label' => 'Your Product',
            'content' => $this->widget('bootstrap.widgets.TbGridView', array(
                'id' => 'products-grid',
                'dataProvider' => new CArrayDataProvider($model->products),
                'columns' => array(
                    array(
                        'name' => 'type_product',
                        'type' => 'raw',
                        'value' => 'CHtml::encode($data->typeText)',
                    ),
                    array(
                        'name' => 'parent_id',
                        'type' => 'raw',
                        'value' => 'CHtml::encode($data->parentName)',
                    ),
                    'name',
                ),
            ), true)
            
        ),
        array(
            'label' => 'Your Balance',
            'content' => $model->balance
        ),
    ),
));
?>