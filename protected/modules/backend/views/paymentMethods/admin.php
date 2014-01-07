<?php
/* @var $this PaymentMethodsController */
/* @var $model PaymentMethods */


$this->breadcrumbs = array(
    'Payment Methods',
);

$this->menu = array(
    array('label' => 'Create', 'url' => array('create'), 'icon' => 'file'),
);
?>

<h1>Manage Payment Methods</h1>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'payment-methods-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'payment_name',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));
?>