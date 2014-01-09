<?php
$this->pageTitle = Yii::app()->name . ' - ' . "Restore";
$this->breadcrumbs = array(
    "Login" => array('/site/login'),
    "Restore",
);
?>

<h1><?php echo "Restore"; ?></h1>

<?php if (Yii::app()->user->hasFlash('recoveryMessage')): ?>
    <div class="success">
        <?php echo Yii::app()->user->getFlash('recoveryMessage'); ?>
    </div>
<?php else: ?>

    <div class="form">
        <?php echo TbHtml::beginForm(); ?>

        <?php echo TbHtml::errorSummary($form); ?>

        <div class="row">
            <?php echo TbHtml::activeTextFieldControlGroup($form, 'login_or_email') ?>
            <p class="hint"><?php echo "Please enter your login or email addres."; ?></p>
        </div>

        <div class="row submit">
            <?php echo TbHtml::submitButton("Restore"); ?>
        </div>

        <?php echo TbHtml::endForm(); ?>
    </div><!-- form -->
<?php endif; ?>