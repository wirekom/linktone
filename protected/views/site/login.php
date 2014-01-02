<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
    'Login',
);
?>

<div class="h1">
    <h1>
        Log into your profile to continue.
    </h1>
</div>
<div class="blocking">
    <div class="login">
        <div class="form">
            <?php
            $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                'id' => 'login-form',
                // Please note: When you enable ajax validation, make sure the corresponding
                // controller action is handling ajax validation correctly.
                // There is a call to performAjaxValidation() commented in generated controller code.
                // See class documentation of CActiveForm for details on this.
                'enableAjaxValidation' => false,
            ));
            ?>

            <?php //echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model, 'username', array('span' => 5, 'maxlength' => 255, 'placeholder' => 'Username')); ?>

            <?php echo $form->passwordFieldControlGroup($model, 'password', array('span' => 5, 'maxlength' => 255,'placeholder' => 'Password')); ?>

            <?php echo $form->checkBoxControlGroup($model, 'rememberMe', array('span' => 5)); ?>
            <br />
            <div class="control-group">
                <?php
                echo TbHtml::submitButton('Login', array(
                    'color' => TbHtml::BUTTON_COLOR_PRIMARY,
                    'size' => TbHtml::BUTTON_SIZE_LARGE,
                ));
                echo   TbHtml::resetButton('Reset');
                echo TbHtml::button('Home');
                ?>
            </div>

            <?php $this->endWidget(); ?>

        </div><!-- form -->
    </div><!-- login -->
</div><!-- blocking -->