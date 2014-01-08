<?php
/* @var $this AccessLogController */
/* @var $data AccessLog */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('terminal_type')); ?>:</b>
	<?php echo CHtml::encode($data->terminal_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('access_type')); ?>:</b>
	<?php echo CHtml::encode($data->access_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_message')); ?>:</b>
	<?php echo CHtml::encode($data->status_message); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('result')); ?>:</b>
	<?php echo CHtml::encode($data->result); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->timestamp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />


</div>