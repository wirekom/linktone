<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="well well-small">

    <b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->username), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
    <?php echo CHtml::encode($data->email); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('birthdate')); ?>:</b>
    <?php echo CHtml::encode($data->birthdate); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('surename')); ?>:</b>
    <?php echo CHtml::encode($data->surename); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('lastname')); ?>:</b>
    <?php echo CHtml::encode($data->lastname); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
    <?php echo CHtml::encode($data->status); ?>
    <br />
    <?php if ($data->role !== NULL): ?>
        <b><?php echo CHtml::encode($data->getAttributeLabel('role_id')); ?>:</b>
        <?php echo CHtml::encode($data->role->name); ?>
        <br />
    <?php endif; ?>


</div>