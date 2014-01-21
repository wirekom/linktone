<?php /* @var $this Controller */ ?>
<?php $this->beginContent('/layouts/main'); ?>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <!--Body content-->
            <?php echo $content; ?>
        </div>
    </div>
</div>
<?php $this->endContent(); ?>