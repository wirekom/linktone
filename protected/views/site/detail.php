<?php
$this->pageTitle=Yii::app()->name;
$this->breadcrumbs=array(
	'Detail',
);

if($products != NULL){
?>
<!-- Detail START -->
<div class="detail l">                             	
	<div class="det">                             	
		<div class="judul">
			<h3><?php echo $products->name?></h3>
		</div>
		<div class="hoaam">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/display.jpg" alt="display" />
		</div>
	</div>
</div>
<!-- Detail END -->
<div class="clearfix"></div>

<div class="howareyou">
	<div class="stuck">
		<div class="gambar"><!-- Gambar Movie -->
			<a class="thumbnail" href="<?php echo Yii::app()->request->baseUrl; ?>/images/content/default.jpg" title="">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/default.jpg" alt="default.jpg">
			</a>
			
			<span class="lope">
			<a href="#" title="">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/lope.png" alt="Gambar1" />
			</a>
			</span>
		</div>
		<div class="divide">
			<ul class="topten"><!-- Tombol -->
				<li>
					<a href="#" title="">
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/u.png" alt="Gambar1" />
					</a>
				</li>
				<li>
					<a href="#" title="">
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/y.png" alt="Gambar1" />
					</a>
					<span>eng</span>
				</li>
				<li>
					<a href="#" title="">
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/e.png" alt="Gambar1" />
					</a>
					<span>eng</span>
				</li>
			</ul>
			<!-- Keterangan Film -->
			<div class="txt-block"> 
				<h4 class="inline">Title :</h4>
				<span class="itemprop"><h3>Taylor Hackford</h3></span>
			</div>
			<div class="txt-block"> 
				<h4 class="inline">&nbsp;</h4>
				<span class="itemprop"><span>Unknow</span> <span>21:00</span></span>
			</div>
			<div class="txt-block"> 
				<h4 class="inline">Genre :</h4>
				<span class="itemprop">Action</span>
			</div>
			<div class="txt-block"> 
				<h4 class="inline">Directore :</h4>
				<span class="itemprop"><a href="#">Taylor Hackford</a></span>
			</div>
			<div class="txt-block"> 
				<h4 class="inline">Writer :</h4>
				<span class="itemprop"><a href="#"> John J. McLaughlin (screenplay)</a>, <a href="#">Donald E. Westlake (novel) </a></span>
			</div>
			<div class="txt-block"> 
				<h4 class="inline">Actor :</h4>
				<span class="itemprop"><a href="#">Jhon Stanham</a>,<a href="#">Jennifer Lopez</a></span>
			</div>
			<div class="txt-block"> 
				<h4 class="inline">Description :</h4>
				<span class="itemprop">A thief with a unique code of professional ethics is double-crossed by his crew and left for dead. Assuming a new disguise and forming an unlikely alliance with a woman on the inside, he looks to hijack the score of the crew's latest heist. </span>
			</div>
		</div>
		<a href="#" class="btn pull-right">WATCH in HD 20000Rs 5/month</a>
	</div>
</div>
<?php 
}
?>
<h1>Related Movie
	<img width="15" height="19" alt="arrow" src="<?php echo Yii::app()->request->baseUrl; ?>/images/tpl/icon/arrow.png">
</h1>
<ul class="grid cs-style l" id="foo">
	<li>
		<figure>
			<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/5.jpg" alt="img05"></div>
			<figcaption>
				<h3>The Untouchables</h3>
				<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent porta dolor sed velit lobortis interdum. Nulla mattis varius nibh, sit amet ornare libero hendrerit sit amet. Curabitur suscipit neque nec mi fermentum elementum. Nullam sit amet magna sem. Proin lacinia tristique dictum.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/6.jpg" alt="img06"></div>
			<figcaption>
				<h3>Shanghai Knights</h3>
				<span>Sed eget interdum leo, vitae commodo enim. Nam diam ante, fermentum et ligula sit amet, viverra sollicitudin turpis. Nam at sagittis tellus. Phasellus felis mauris, bibendum id sem sit amet, fringilla sagittis augue. Suspendisse tempor ligula consequat nulla adipiscing consequat. Cras cursus tortor scelerisque purus condimentum.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/2.jpg" alt="img02"></div>
			<figcaption>
				<h3>Dejavu</h3>
				<span>Nullam non bibendum sem. Maecenas in quam elit. Vivamus augue magna, tincidunt in dictum nec, eleifend eget elit. Etiam lobortis interdum hendrerit. Proin vulputate diam ultricies lorem imperdiet convallis. In id orci ac mi suscipit aliquam a a metus. Phasellus auctor justo sem, a rhoncus est fringilla in.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/4.jpg" alt="img04"></div>
			<figcaption>
				<h3>Kill Bill</h3>
				<span>Morbi feugiat, ipsum at fermentum elementum, lectus purus iaculis lacus, vulputate consequat dolor orci quis orci. Sed risus massa, lacinia nec libero quis, tincidunt semper lectus. Praesent pulvinar auctor eros, in rhoncus felis aliquam rutrum. Morbi blandit enim eget nisl sollicitudin auctor.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/1.jpg" alt="img01"></div>
			<figcaption>
				<h3>Iron Man 2</h3>
				<span>Cras ligula felis, venenatis id gravida ut, semper nec elit. Vivamus fringilla varius nisi, ac euismod diam egestas nec. Donec id mattis nulla, vel ullamcorper orci. In faucibus lacus ante, in ornare turpis consequat ac. Aenean eget dui vitae ligula ullamcorper adipiscing sit amet at magna./span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/3.jpg" alt="img03"></div>
			<figcaption>
				<h3>Fighter</h3>
				<span>Cras nec erat lacus. Nam quam nisl, elementum nec consequat sit amet, venenatis consequat turpis. Nunc venenatis tellus vel tempus condimentum. Nam sodales magna vel nulla blandit, ut sodales turpis auctor. Ut consectetur nisl dolor, non facilisis neque vulputate nec.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/7.jpg" alt="img07"></div>
			<figcaption>
				<h3>Mulan</h3>
				<span>Ut purus risus, consectetur quis fringilla a, mattis aliquam ligula. Donec sed mauris vel velit gravida porttitor. Etiam cursus id nunc et adipiscing. Cras a nulla a lectus semper scelerisque non et dolor. Nullam at elit a erat hendrerit auctor. Ut mi metus, venenatis porttitor quam in.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/8.jpg" alt="img08"></div>
			<figcaption>
				<h3>Captain America</h3>
				<span>Pulvinar faucibus purus. Mauris at pulvinar neque. Ut malesuada vestibulum arcu, id pharetra nisl euismod sit amet. Curabitur in velit aliquet, convallis mauris sed, vehicula neque. Aliquam vel rhoncus velit, ut laoreet justo. Vivamus nisi ligula.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/9.jpg" alt="img09"></div>
			<figcaption>
				<h3>Cowboys Vs Aliens</h3>
				<span>Consectetur nec metus eget, lacinia rhoncus nibh. Aliquam erat volutpat. In hac habitasse platea dictumst. Duis dui leo, fermentum nec aliquet ac, bibendum at neque. Duis vel posuere lacus, a commodo ipsum. Donec dapibus placerat ligula quis volutpat. Nunc sed eros tellus.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/10.jpg" alt="img10"></div>
			<figcaption>
				<h3>Harry Brown</h3>
				<span>Quisque eu gravida orci. Praesent blandit lacus quis nisl varius volutpat. Sed vitae rutrum lectus. Praesent suscipit eros augue, at tincidunt velit fringilla viverra. Phasellus non pharetra dolor, et eleifend erat. Nullam luctus dictum interdum.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/11.jpg" alt="img11"></div>
			<figcaption>
				<h3>2012</h3>
				<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent porta dolor sed velit lobortis interdum. Nulla mattis varius nibh, sit amet ornare libero hendrerit sit amet. Curabitur suscipit neque nec mi fermentum elementum. Nullam sit amet magna sem. Proin lacinia tristique dictum.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/12.jpg" alt="img12"></div>
			<figcaption>
				<h3>Save</h3>
				<span>Sed eget interdum leo, vitae commodo enim. Nam diam ante, fermentum et ligula sit amet, viverra sollicitudin turpis. Nam at sagittis tellus. Phasellus felis mauris, bibendum id sem sit amet, fringilla sagittis augue. Suspendisse tempor ligula consequat nulla adipiscing consequat. Cras cursus tortor scelerisque purus condimentum.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
</ul>

<!-- Sugestion -->
<h1>Last Update
	<img width="15" height="19" alt="arrow" src="<?php echo Yii::app()->request->baseUrl; ?>/images/tpl/icon/arrow.png">
</h1>
<ul class="grid cs-style l" id="foo">
	<li>
		<figure>
			<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/5.jpg" alt="img05"></div>
			<figcaption>
				<h3>The Untouchables</h3>
				<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent porta dolor sed velit lobortis interdum. Nulla mattis varius nibh, sit amet ornare libero hendrerit sit amet. Curabitur suscipit neque nec mi fermentum elementum. Nullam sit amet magna sem. Proin lacinia tristique dictum.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/6.jpg" alt="img06"></div>
			<figcaption>
				<h3>Shanghai Knights</h3>
				<span>Sed eget interdum leo, vitae commodo enim. Nam diam ante, fermentum et ligula sit amet, viverra sollicitudin turpis. Nam at sagittis tellus. Phasellus felis mauris, bibendum id sem sit amet, fringilla sagittis augue. Suspendisse tempor ligula consequat nulla adipiscing consequat. Cras cursus tortor scelerisque purus condimentum.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/2.jpg" alt="img02"></div>
			<figcaption>
				<h3>Dejavu</h3>
				<span>Nullam non bibendum sem. Maecenas in quam elit. Vivamus augue magna, tincidunt in dictum nec, eleifend eget elit. Etiam lobortis interdum hendrerit. Proin vulputate diam ultricies lorem imperdiet convallis. In id orci ac mi suscipit aliquam a a metus. Phasellus auctor justo sem, a rhoncus est fringilla in.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/4.jpg" alt="img04"></div>
			<figcaption>
				<h3>Kill Bill</h3>
				<span>Morbi feugiat, ipsum at fermentum elementum, lectus purus iaculis lacus, vulputate consequat dolor orci quis orci. Sed risus massa, lacinia nec libero quis, tincidunt semper lectus. Praesent pulvinar auctor eros, in rhoncus felis aliquam rutrum. Morbi blandit enim eget nisl sollicitudin auctor.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/1.jpg" alt="img01"></div>
			<figcaption>
				<h3>Iron Man 2</h3>
				<span>Cras ligula felis, venenatis id gravida ut, semper nec elit. Vivamus fringilla varius nisi, ac euismod diam egestas nec. Donec id mattis nulla, vel ullamcorper orci. In faucibus lacus ante, in ornare turpis consequat ac. Aenean eget dui vitae ligula ullamcorper adipiscing sit amet at magna./span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/3.jpg" alt="img03"></div>
			<figcaption>
				<h3>Fighter</h3>
				<span>Cras nec erat lacus. Nam quam nisl, elementum nec consequat sit amet, venenatis consequat turpis. Nunc venenatis tellus vel tempus condimentum. Nam sodales magna vel nulla blandit, ut sodales turpis auctor. Ut consectetur nisl dolor, non facilisis neque vulputate nec.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/7.jpg" alt="img07"></div>
			<figcaption>
				<h3>Mulan</h3>
				<span>Ut purus risus, consectetur quis fringilla a, mattis aliquam ligula. Donec sed mauris vel velit gravida porttitor. Etiam cursus id nunc et adipiscing. Cras a nulla a lectus semper scelerisque non et dolor. Nullam at elit a erat hendrerit auctor. Ut mi metus, venenatis porttitor quam in.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/8.jpg" alt="img08"></div>
			<figcaption>
				<h3>Captain America</h3>
				<span>Pulvinar faucibus purus. Mauris at pulvinar neque. Ut malesuada vestibulum arcu, id pharetra nisl euismod sit amet. Curabitur in velit aliquet, convallis mauris sed, vehicula neque. Aliquam vel rhoncus velit, ut laoreet justo. Vivamus nisi ligula.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/9.jpg" alt="img09"></div>
			<figcaption>
				<h3>Cowboys Vs Aliens</h3>
				<span>Consectetur nec metus eget, lacinia rhoncus nibh. Aliquam erat volutpat. In hac habitasse platea dictumst. Duis dui leo, fermentum nec aliquet ac, bibendum at neque. Duis vel posuere lacus, a commodo ipsum. Donec dapibus placerat ligula quis volutpat. Nunc sed eros tellus.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/10.jpg" alt="img10"></div>
			<figcaption>
				<h3>Harry Brown</h3>
				<span>Quisque eu gravida orci. Praesent blandit lacus quis nisl varius volutpat. Sed vitae rutrum lectus. Praesent suscipit eros augue, at tincidunt velit fringilla viverra. Phasellus non pharetra dolor, et eleifend erat. Nullam luctus dictum interdum.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/11.jpg" alt="img11"></div>
			<figcaption>
				<h3>2012</h3>
				<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent porta dolor sed velit lobortis interdum. Nulla mattis varius nibh, sit amet ornare libero hendrerit sit amet. Curabitur suscipit neque nec mi fermentum elementum. Nullam sit amet magna sem. Proin lacinia tristique dictum.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
	<li>
		<figure>
			<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/12.jpg" alt="img12"></div>
			<figcaption>
				<h3>Save</h3>
				<span>Sed eget interdum leo, vitae commodo enim. Nam diam ante, fermentum et ligula sit amet, viverra sollicitudin turpis. Nam at sagittis tellus. Phasellus felis mauris, bibendum id sem sit amet, fringilla sagittis augue. Suspendisse tempor ligula consequat nulla adipiscing consequat. Cras cursus tortor scelerisque purus condimentum.</span>
				<a href="#">Watch</a>
			</figcaption>
		</figure>
	</li>
</ul>