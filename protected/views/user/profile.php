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
$this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data' => $model,
    'attributes' => array(
        array(
            'name' => 'products_id',
            'type' => 'raw',
            'value' => CHtml::link(CHtml::encode($model->products->name), array('backend/products/view', 'id' => $model->products_id)),
        ),
        'username',
        'email',
        'birthdate',
        'surename',
        'lastname',
        array(
            'name' => 'status',
            'type' => 'raw',
            'value' => $model->statusText,
        ),
    ),
));
?>
