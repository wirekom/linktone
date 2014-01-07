<?php
/* @var $this BillsController */
/* @var $data Bills */
?>

<div class="well well-small">

    <b><?php echo CHtml::encode($data->getAttributeLabel('payment_methods_id')); ?>:</b>
    <?php echo CHtml::encode($data->paymentMethods->payment_name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
    <?php echo CHtml::encode($data->user->username); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('invoice_no')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->invoice_no), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
    <?php echo CHtml::encode($data->amount); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('date_produced')); ?>:</b>
    <?php echo CHtml::encode($data->date_produced); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('due_date')); ?>:</b>
    <?php echo CHtml::encode($data->due_date); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('payment_time')); ?>:</b>
    <?php echo CHtml::encode($data->payment_time); ?>
    <br />

</div>