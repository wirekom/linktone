<?php
/* @var $this PaymentMethodsController */
/* @var $model PaymentMethods */
?>

<?php
$this->breadcrumbs = array(
    'Payment Methods' => array('admin'),
    'Create',
);

$this->menu = array(
    array('label' => 'Manage', 'url' => array('admin'), 'icon' => 'list-alt'),
);
?>

<h1>Create PaymentMethods</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>