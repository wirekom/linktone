
<?php echo $form->dropDownListControlGroup($products, 'parent_id', $products->productsOptions, array('empty' => 'root'), array('span' => 5)); ?>

<?php echo $form->dropDownListControlGroup($products, 'type_product', $products->typeOptions, array('span' => 5)); ?>

<?php echo $form->textFieldControlGroup($products, 'name', array('span' => 5, 'maxlength' => 255)); ?>

<?php echo $form->textFieldControlGroup($products, 'zte_product_code', array('span' => 5, 'maxlength' => 45)); ?>

<?php echo $form->textFieldControlGroup($products, 'price', array('span' => 5)); ?>
