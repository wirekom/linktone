<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i>
<img width="15" height="19" alt="arrow" src="<?php echo Yii::app()->request->baseUrl; ?>/images/tpl/icon/arrow.png">
</h1>

<!-- Movie Slider -->
<div class="movie">
<ul class="grid cs-style l jcarousel-skin-ie7" id="movie">
	<li>
		<figure>
			<div><img src="images/content/1.jpg" alt="img01"></div>
			<figcaption>
				<h3>Iron Man 2</h3>
				<span>Cras ligula felis, venenatis id gravida ut, semper nec elit. Vivamus fringilla varius nisi, ac euismod diam egestas nec. Donec id mattis nulla, vel ullamcorper orci. In faucibus lacus ante, in ornare turpis consequat ac. Aenean eget dui vitae ligula ullamcorper adipiscing sit amet at magna./span>
				<a href="index.php/site/detail">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="images/content/3.jpg" alt="img03"></div>
			<figcaption>
				<h3>Fighter</h3>
				<span>Cras nec erat lacus. Nam quam nisl, elementum nec consequat sit amet, venenatis consequat turpis. Nunc venenatis tellus vel tempus condimentum. Nam sodales magna vel nulla blandit, ut sodales turpis auctor. Ut consectetur nisl dolor, non facilisis neque vulputate nec.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="images/content/7.jpg" alt="img07"></div>
			<figcaption>
				<h3>Mulan</h3>
				<span>Ut purus risus, consectetur quis fringilla a, mattis aliquam ligula. Donec sed mauris vel velit gravida porttitor. Etiam cursus id nunc et adipiscing. Cras a nulla a lectus semper scelerisque non et dolor. Nullam at elit a erat hendrerit auctor. Ut mi metus, venenatis porttitor quam in.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="images/content/8.jpg" alt="img08"></div>
			<figcaption>
				<h3>Captain America</h3>
				<span>Pulvinar faucibus purus. Mauris at pulvinar neque. Ut malesuada vestibulum arcu, id pharetra nisl euismod sit amet. Curabitur in velit aliquet, convallis mauris sed, vehicula neque. Aliquam vel rhoncus velit, ut laoreet justo. Vivamus nisi ligula.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="images/content/9.jpg" alt="img09"></div>
			<figcaption>
				<h3>Cowboys Vs Aliens</h3>
				<span>Consectetur nec metus eget, lacinia rhoncus nibh. Aliquam erat volutpat. In hac habitasse platea dictumst. Duis dui leo, fermentum nec aliquet ac, bibendum at neque. Duis vel posuere lacus, a commodo ipsum. Donec dapibus placerat ligula quis volutpat. Nunc sed eros tellus.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="images/content/10.jpg" alt="img10"></div>
			<figcaption>
				<h3>Harry Brown</h3>
				<span>Quisque eu gravida orci. Praesent blandit lacus quis nisl varius volutpat. Sed vitae rutrum lectus. Praesent suscipit eros augue, at tincidunt velit fringilla viverra. Phasellus non pharetra dolor, et eleifend erat. Nullam luctus dictum interdum.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="images/content/11.jpg" alt="img11"></div>
			<figcaption>
				<h3>2012</h3>
				<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent porta dolor sed velit lobortis interdum. Nulla mattis varius nibh, sit amet ornare libero hendrerit sit amet. Curabitur suscipit neque nec mi fermentum elementum. Nullam sit amet magna sem. Proin lacinia tristique dictum.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="images/content/12.jpg" alt="img12"></div>
			<figcaption>
				<h3>Save</h3>
				<span>Sed eget interdum leo, vitae commodo enim. Nam diam ante, fermentum et ligula sit amet, viverra sollicitudin turpis. Nam at sagittis tellus. Phasellus felis mauris, bibendum id sem sit amet, fringilla sagittis augue. Suspendisse tempor ligula consequat nulla adipiscing consequat. Cras cursus tortor scelerisque purus condimentum.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	
	<li>
		<figure>
			<div><img src="images/content/13.jpg" alt="img13"></div>
			<figcaption>
				<h3>Transformers</h3>
				<span>Nullam non bibendum sem. Maecenas in quam elit. Vivamus augue magna, tincidunt in dictum nec, eleifend eget elit. Etiam lobortis interdum hendrerit. Proin vulputate diam ultricies lorem imperdiet convallis. In id orci ac mi suscipit aliquam a a metus. Phasellus auctor justo sem, a rhoncus est fringilla in.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="images/content/14.jpg" alt="img14"></div>
			<figcaption>
				<h3>Real Steel</h3>
				<span>Morbi feugiat, ipsum at fermentum elementum, lectus purus iaculis lacus, vulputate consequat dolor orci quis orci. Sed risus massa, lacinia nec libero quis, tincidunt semper lectus. Praesent pulvinar auctor eros, in rhoncus felis aliquam rutrum. Morbi blandit enim eget nisl sollicitudin auctor.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="images/content/15.jpg" alt="img15"></div>
			<figcaption>
				<h3>21 Jump Street</h3>
				<span>Cras ligula felis, venenatis id gravida ut, semper nec elit. Vivamus fringilla varius nisi, ac euismod diam egestas nec. Donec id mattis nulla, vel ullamcorper orci. In faucibus lacus ante, in ornare turpis consequat ac. Aenean eget dui vitae ligula ullamcorper adipiscing sit amet at magna./span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="images/content/16.jpg" alt="img16"></div>
			<figcaption>
				<h3>Hunger Games</h3>
				<span>Cras nec erat lacus. Nam quam nisl, elementum nec consequat sit amet, venenatis consequat turpis. Nunc venenatis tellus vel tempus condimentum. Nam sodales magna vel nulla blandit, ut sodales turpis auctor. Ut consectetur nisl dolor, non facilisis neque vulputate nec.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="images/content/17.jpg" alt="img017"></div>
			<figcaption>
				<h3>The Hobbit</h3>
				<span>Ut purus risus, consectetur quis fringilla a, mattis aliquam ligula. Donec sed mauris vel velit gravida porttitor. Etiam cursus id nunc et adipiscing. Cras a nulla a lectus semper scelerisque non et dolor. Nullam at elit a erat hendrerit auctor. Ut mi metus, venenatis porttitor quam in.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="images/content/18.jpg" alt="img18"></div>
			<figcaption>
				<h3>Abduction</h3>
				<span>Ut purus risus, consectetur quis fringilla a, mattis aliquam ligula. Donec sed mauris vel velit gravida porttitor. Etiam cursus id nunc et adipiscing. Cras a nulla a lectus semper scelerisque non et dolor. Nullam at elit a erat hendrerit auctor. Ut mi metus, venenatis porttitor quam in.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
</ul>
</div>
<div class="clearfix"></div>

<!-- Movie Terbaru -->
<h1>Whats New
<img width="15" height="19" alt="arrow" src="<?php echo Yii::app()->request->baseUrl; ?>/images/tpl/icon/arrow.png">
</h1>

<ul class="grid cs-style l" id="foo">
	<li>
		<figure>
			<div><img src="images/content/5.jpg" alt="img05"></div>
			<figcaption>
				<h3>The Untouchables</h3>
				<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent porta dolor sed velit lobortis interdum. Nulla mattis varius nibh, sit amet ornare libero hendrerit sit amet. Curabitur suscipit neque nec mi fermentum elementum. Nullam sit amet magna sem. Proin lacinia tristique dictum.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="images/content/6.jpg" alt="img06"></div>
			<figcaption>
				<h3>Shanghai Knights</h3>
				<span>Sed eget interdum leo, vitae commodo enim. Nam diam ante, fermentum et ligula sit amet, viverra sollicitudin turpis. Nam at sagittis tellus. Phasellus felis mauris, bibendum id sem sit amet, fringilla sagittis augue. Suspendisse tempor ligula consequat nulla adipiscing consequat. Cras cursus tortor scelerisque purus condimentum.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="images/content/2.jpg" alt="img02"></div>
			<figcaption>
				<h3>Dejavu</h3>
				<span>Nullam non bibendum sem. Maecenas in quam elit. Vivamus augue magna, tincidunt in dictum nec, eleifend eget elit. Etiam lobortis interdum hendrerit. Proin vulputate diam ultricies lorem imperdiet convallis. In id orci ac mi suscipit aliquam a a metus. Phasellus auctor justo sem, a rhoncus est fringilla in.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="images/content/4.jpg" alt="img04"></div>
			<figcaption>
				<h3>Kill Bill</h3>
				<span>Morbi feugiat, ipsum at fermentum elementum, lectus purus iaculis lacus, vulputate consequat dolor orci quis orci. Sed risus massa, lacinia nec libero quis, tincidunt semper lectus. Praesent pulvinar auctor eros, in rhoncus felis aliquam rutrum. Morbi blandit enim eget nisl sollicitudin auctor.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="images/content/1.jpg" alt="img01"></div>
			<figcaption>
				<h3>Iron Man 2</h3>
				<span>Cras ligula felis, venenatis id gravida ut, semper nec elit. Vivamus fringilla varius nisi, ac euismod diam egestas nec. Donec id mattis nulla, vel ullamcorper orci. In faucibus lacus ante, in ornare turpis consequat ac. Aenean eget dui vitae ligula ullamcorper adipiscing sit amet at magna./span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="images/content/3.jpg" alt="img03"></div>
			<figcaption>
				<h3>Fighter</h3>
				<span>Cras nec erat lacus. Nam quam nisl, elementum nec consequat sit amet, venenatis consequat turpis. Nunc venenatis tellus vel tempus condimentum. Nam sodales magna vel nulla blandit, ut sodales turpis auctor. Ut consectetur nisl dolor, non facilisis neque vulputate nec.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="images/content/7.jpg" alt="img07"></div>
			<figcaption>
				<h3>Mulan</h3>
				<span>Ut purus risus, consectetur quis fringilla a, mattis aliquam ligula. Donec sed mauris vel velit gravida porttitor. Etiam cursus id nunc et adipiscing. Cras a nulla a lectus semper scelerisque non et dolor. Nullam at elit a erat hendrerit auctor. Ut mi metus, venenatis porttitor quam in.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="images/content/8.jpg" alt="img08"></div>
			<figcaption>
				<h3>Captain America</h3>
				<span>Pulvinar faucibus purus. Mauris at pulvinar neque. Ut malesuada vestibulum arcu, id pharetra nisl euismod sit amet. Curabitur in velit aliquet, convallis mauris sed, vehicula neque. Aliquam vel rhoncus velit, ut laoreet justo. Vivamus nisi ligula.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="images/content/9.jpg" alt="img09"></div>
			<figcaption>
				<h3>Cowboys Vs Aliens</h3>
				<span>Consectetur nec metus eget, lacinia rhoncus nibh. Aliquam erat volutpat. In hac habitasse platea dictumst. Duis dui leo, fermentum nec aliquet ac, bibendum at neque. Duis vel posuere lacus, a commodo ipsum. Donec dapibus placerat ligula quis volutpat. Nunc sed eros tellus.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="images/content/10.jpg" alt="img10"></div>
			<figcaption>
				<h3>Harry Brown</h3>
				<span>Quisque eu gravida orci. Praesent blandit lacus quis nisl varius volutpat. Sed vitae rutrum lectus. Praesent suscipit eros augue, at tincidunt velit fringilla viverra. Phasellus non pharetra dolor, et eleifend erat. Nullam luctus dictum interdum.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="images/content/11.jpg" alt="img11"></div>
			<figcaption>
				<h3>2012</h3>
				<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent porta dolor sed velit lobortis interdum. Nulla mattis varius nibh, sit amet ornare libero hendrerit sit amet. Curabitur suscipit neque nec mi fermentum elementum. Nullam sit amet magna sem. Proin lacinia tristique dictum.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="images/content/12.jpg" alt="img12"></div>
			<figcaption>
				<h3>Save</h3>
				<span>Sed eget interdum leo, vitae commodo enim. Nam diam ante, fermentum et ligula sit amet, viverra sollicitudin turpis. Nam at sagittis tellus. Phasellus felis mauris, bibendum id sem sit amet, fringilla sagittis augue. Suspendisse tempor ligula consequat nulla adipiscing consequat. Cras cursus tortor scelerisque purus condimentum.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
</ul>
