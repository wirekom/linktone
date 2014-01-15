<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name ." | Product - " .$products->name;
?>
<h1><?php echo CHtml::encode($products->name); ?>
<img width="15" height="19" alt="arrow" src="<?php echo Yii::app()->request->baseUrl; ?>/images/tpl/icon/arrow.png">
</h1>

<ul class="grid cs-style l" id="foo">
	<?php 
	if($items != null){
		foreach ($items as $item){
	?>
	<li>
		<figure>
			<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/default.jpg" alt="img05"></div>
			<figcaption>
				<h3><?php echo $item->name?></h3>
				<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent porta dolor sed velit lobortis interdum. Nulla mattis varius nibh, sit amet ornare libero hendrerit sit amet. Curabitur suscipit neque nec mi fermentum elementum. Nullam sit amet magna sem. Proin lacinia tristique dictum.</span>
				<a href="<?php echo Yii::app()->createUrl('/site/detail/id/'.$item->id)?>">Watch</a>
			</figcaption>
		</figure>
	</li>
	<?php
		}
	}
	?>
</ul>
