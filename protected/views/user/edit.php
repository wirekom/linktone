<?php
$this->pageTitle = Yii::app()->name . ' - ' . "Profile";
$this->breadcrumbs = array(
    "Profile" => array('profile'),
    "Edit",
);
$this->menu = array(
    array('label' => 'Profile', 'url' => array('/user/profile')),
    array('label' => 'Change Password', 'url' => array('changePassword')),
    array('label' => 'Logout', 'url' => array('/user/logout')),
);
?><h1><?php echo 'Edit profile'; ?></h1>

<?php if (Yii::app()->user->hasFlash('profileMessage')): ?>
    <div class="success">
        <?php echo Yii::app()->user->getFlash('profileMessage'); ?>
    </div>
<?php endif; ?>

<div class="form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.FTActiveForm', array(
        'id' => 'user-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model, 'email', array('span' => 5, 'maxlength' => 255)); ?>

    <?php echo $form->datePickerControlGroup($model, 'birthdate', array('span' => 8, 'append' => '<icon class="icon-calendar"></icon>', 'pluginOptions' => array('format' => 'yyyy-mm-dd'))); ?>

    <?php echo $form->textFieldControlGroup($model, 'surename', array('span' => 5, 'maxlength' => 45)); ?>

    <?php echo $form->textFieldControlGroup($model, 'lastname', array('span' => 5, 'maxlength' => 45)); ?>

    <?php echo $form->textAreaControlGroup($model, 'address', array('span' => 5, 'maxlength' => 45)); ?>

    <?php echo $form->textFieldControlGroup($model, 'city', array('span' => 5, 'maxlength' => 45)); ?>

    <?php echo $form->textFieldControlGroup($model, 'province', array('span' => 5, 'maxlength' => 45)); ?>

    <?php echo $form->textFieldControlGroup($model, 'country', array('span' => 5, 'maxlength' => 45)); ?>

    <div class="form-actions">
        <?php echo TbHtml::submitButton('Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
