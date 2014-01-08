<?php /* @var $this Controller */ ?>
<?php $this->beginContent('/layouts/main'); ?>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span10">
            <!--Body content-->
            <?php echo $content; ?>
        </div>
        <div class="span2">
            <!--Sidebar content-->
            <?php
            $this->widget('bootstrap.widgets.TbNav', array(
                'type' => TbHtml::NAV_TYPE_TABS,
                'stacked' => true,
                'items' => $this->menu,
            ));
            ?>
        </div>
    </div>
</div>
<?php $this->endContent(); ?>