<?php
$this->pageTitle = Yii::app()->name . ' - ' . "Change Password";
$this->breadcrumbs = array(
    "Profile" => array('/user/profile'),
    "Change Password",
);
$this->menu = array(
    array('label' => 'Profile', 'url' => array('/user/profile')),
    array('label' => 'Change Password', 'url' => array('changePassword')),
    array('label' => 'Logout', 'url' => array('/user/logout')),
);
?>

<h1><?php echo "Change password"; ?></h1>

<div class="form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
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

    <p class="hint">
        <?php echo "Minimal password length 4 symbols."; ?>
    </p>
    <?php echo $form->passwordFieldControlGroup($model, 'password'); ?>
    <?php echo $form->passwordFieldControlGroup($model, 'repeatpassword'); ?>

    <div class="form-actions">
        <?php
        echo TbHtml::submitButton('Save', array(
            'color' => TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        ));
        ?>
    </div>

    <?php $this->endWidget(); ?>
</div><!-- form -->