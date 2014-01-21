<?php /* @var $this Controller */ ?>
<?php $this->beginContent('/layouts/main'); ?>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span10">
            <!--Body content-->
            <div class="widget">
			<div class="widget-head"><h4 class="heading glyphicons folder_open"><i></i><?php echo $this->pageTitle ?></h4></div>
			<div class="widget-body">
			<div class="linner">
            <?php echo $content; ?>
			</div>
			</div>
			</div>
		</div>
        <div class="span2">
            <!--Sidebar content-->
            <div class="widget">
			<div class="widget-head"><h4 class="heading glyphicons pen"><i></i>Operation</h4></div>
			<div class="widget-body">
			<div class="linner">
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
        </div>
    </div>
</div>
<?php $this->endContent(); ?>