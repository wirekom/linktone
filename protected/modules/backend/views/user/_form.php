<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form TbActiveForm */
?>

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

    <?php echo $form->textFieldControlGroup($model, 'username', array('span' => 5, 'maxlength' => 255)); ?>

    <?php echo $form->passwordFieldControlGroup($model, 'password', array('span' => 5, 'maxlength' => 255, 'autocomplete' => 'off')); ?>

    <?php echo $form->textFieldControlGroup($model, 'email', array('span' => 5, 'maxlength' => 255)); ?>

    <?php echo $form->datePickerControlGroup($model, 'birthdate', array('span' => 8, 'append' => '<icon class="icon-calendar"></icon>', 'pluginOptions' => array('format' => 'yyyy-mm-dd'))); ?>

    <?php echo $form->textFieldControlGroup($model, 'surename', array('span' => 5, 'maxlength' => 45)); ?>

    <?php echo $form->textFieldControlGroup($model, 'lastname', array('span' => 5, 'maxlength' => 45)); ?>

    <?php echo $form->dropDownListControlGroup($model, 'status', $model->statusOptions, array('span' => 5)); ?>

    <?php echo $form->dropDownListControlGroup($model, 'role_id', $model->roleOptions, array('span' => 5)); ?>

    <div class="form-actions">
        <?php
        echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array(
            'color' => TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        ));
        ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->