<?php
/* @var $this ProductsController */
/* @var $model Products */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'products-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($products); ?>
    <?php // echo $form->errorSummary(array($products, $productDescription)); ?>

    <?php
    $this->widget('bootstrap.widgets.TbTabs', array(
        'tabs' => array(
            array(
                'label' => 'Product',
                'active' => true,
                'content' => $this->renderPartial('_fproduct', array('products' => $products, 'form' => $form), true)
            ),
            array(
                'label' => 'Description',
                'content' => $this->renderPartial('_fdescription', array('productDescription' => $products->productDescription, 'form' => $form), true)
            ),
        ),
    ));
    ?>
    <div class="form-actions">
        <?php echo TbHtml::submitButton($products->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->