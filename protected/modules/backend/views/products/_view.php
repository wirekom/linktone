<?php
/* @var $this ProductsController */
/* @var $data Products */
?>

<div class="well well-small">

    <b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('zte_product_code')); ?>:</b>
    <?php echo CHtml::encode($data->zte_product_code); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
    <?php echo CHtml::encode($data->price); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('parent_id')); ?>:</b>
    <?php echo CHtml::encode($data->parentName); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('type_product')); ?>:</b>
    <?php echo CHtml::encode($data->typeText); ?>
    <br />


</div>