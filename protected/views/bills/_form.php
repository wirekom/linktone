<?php
/* @var $this BillsController */
/* @var $model Bills */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.FTActiveForm', array(
        'id' => 'bills-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->dropDownListControlGroup($model, 'payment_methods_id', $model->paymentMethodsOptions, array('span' => 5)); ?>

    <?php echo $form->dropDownListControlGroup($model, 'user_id', $model->userOptions, array('span' => 5)); ?>

    <?php echo $form->textFieldControlGroup($model, 'amount', array('span' => 5)); ?>

    <?php echo $form->textFieldControlGroup($model, 'invoice_no', array('span' => 5, 'maxlength' => 45)); ?>

    <?php echo $form->datePickerControlGroup($model, 'date_produced', array('span' => 8, 'append' => '<icon class="icon-calendar"></icon>', 'pluginOptions' => array('format' => 'yyyy-mm-dd'))); ?>

    <?php echo $form->datePickerControlGroup($model, 'due_date', array('span' => 8, 'append' => '<icon class="icon-calendar"></icon>', 'pluginOptions' => array('format' => 'yyyy-mm-dd'))); ?>

    <?php echo $form->dateTimePickerControlGroup($model, 'payment_time', array('span' => 8)); ?>

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