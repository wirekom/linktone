<?php
/* @var $this BillsController */
/* @var $model Bills */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'amount',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'invoice_no',array('span'=>5,'maxlength'=>45)); ?>

                    <?php echo $form->textFieldControlGroup($model,'date_produced',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'due_date',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'payment_time',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'payment_methods_id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'user_id',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->