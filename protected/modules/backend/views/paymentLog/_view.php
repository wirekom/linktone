<?php
/* @var $this PaymentLogController */
/* @var $data PaymentLog */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ref_no')); ?>:</b>
	<?php echo CHtml::encode($data->ref_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tranx_id')); ?>:</b>
	<?php echo CHtml::encode($data->tranx_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('response_code')); ?>:</b>
	<?php echo CHtml::encode($data->response_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rc')); ?>:</b>
	<?php echo CHtml::encode($data->rc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->timestamp); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('bills_id')); ?>:</b>
	<?php echo CHtml::encode($data->bills_id); ?>
	<br />

	*/ ?>

</div>