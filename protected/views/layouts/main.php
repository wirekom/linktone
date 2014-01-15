<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Movie Bay</title>
        <meta name="description" content="Movie Bay: welcome page" />
        <meta name="keywords" content="okezone, welcome page, OTT, Movie Bay, Movie, video, MNC" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/base.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/moviebay.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/images/JQ/skin.css" />
        <!-- Bootstrap css-->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/cssBootstrap/bootstrap.css" /> 
		

        <!-- include jQuery + carouFredSel plugin -->
        <script type="text/javascript" language="javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.8.2.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.custom.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.js"></script>

        <!-- optionally include helper plugins -->
        <script type="text/javascript" language="javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/helper-plugins/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" language="javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/helper-plugins/jquery.touchSwipe.min.js"></script>
        <script type="text/javascript" language="javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/helper-plugins/jquery.transit.min.js"></script>
        <script type="text/javascript" language="javascript" sr	c="<?php echo Yii::app()->request->baseUrl; ?>/js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>
        <script type="text/javascript" language="javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.jcarousel.js"></script>

        <!-- fire plugin onDocumentReady -->
        
		<script type="text/javascript">
		tb_pathToImage = "../../../images/JQ/loading-thickbox.gif";
		function mycarousel_initCallback(carousel)
		{
			// Disable autoscrolling if the user clicks the prev or next button.
			carousel.buttonNext.bind('click', function() {
				carousel.startAuto(0);
			});

			carousel.buttonPrev.bind('click', function() {
				carousel.startAuto(0);
			});

			// Pause autoscrolling if the user moves with the cursor over the clip.
			carousel.clip.hover(function() {
				carousel.stopAuto();
			}, function() {
				carousel.startAuto();
			});
		};
		jQuery(document).ready(function() {
			jQuery('#movie').jcarousel({
				// Configuration goes here
				auto: 5,
				visible: 6,
				wrap: 'last',
				animation: 900,
				initCallback: mycarousel_initCallback,
			});
		});
		</script>
        <!--[if (IE 8)]>
        <script>
            $(document).ready(function(){
                $(".radio-options li").bind("click", function() {
                    $(this).siblings(".checked").removeClass("checked");
                    $(this).addClass("checked");
                    });
            });
        </script>
        <![endif]-->
        <script>
            $(document).ready(function() {
                if (Modernizr.touch) {
                    $(".radio-options").bind("click", function(event) {
                        if (!($(this).parent('.radio-container').hasClass("active"))) {
                            $(this).parent('.radio-container').addClass("active");
                            event.stopPropagation();
                        }
                    });
                    $(".toggle").bind("click", function() {
                        $(this).parents('.radio-container').removeClass("active");
                        return false;
                    });
                }
            })
        </script>
    </head>
    <body>
		<!-- HEADER START -->	
		<div class="header clearfix">
			<div class="container">
				<div class="top">
					<div class="logo">
						<a href="<?php echo Yii::app()->request->baseUrl; ?>">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/tpl/icon/logo.png" width="76" height="58" alt="logo movie bay" />
						</a>
					</div>
					<!-- Menu Start -->
					<nav>
						<ul class="menu">
							<li>
								<a href="channel.html" title="Channel">CHANNEL</a>
								<ul>
									<li><a href="#">RCTI</a></li>
									<li><a href="#">MNC TV</a></li>
									<li><a href="#">Global TV</a></li>	
									<li><a href="#">Sindo TV</a></li>
									<li><a href="#">MNC News</a></li>
									<li><a href="#">MNC Business</a></li>
									<li><a href="#">MNC Sport</a></li>
									<li><a href="#">MNC Lifestyle</a></li>
									<li><a href="#">MNC Kids</a></li>
									<li><a href="#">MNC Fashion</a></li>
									<li><a href="#">MNC Drama</a></li>
									<li><a href="#">MNC Muslim</a></li>
									<li><a href="#">MNC Food</a></li>
									<li><a href="#">MNC Travel</a></li>
									<li><a href="#">MNC Shop</a></li>
								</ul>
							</li>
							<li>
								<a href="movie.html" title="Movie">MOVIE</a>
								<ul>
									<li><a href="#">Disney</a></li>
									<li><a href="#">Western</a></li>
									<li><a href="#">Chinese</a></li>
									<li><a href="#">Indonesian</a></li>
								</ul>
							</li>
							<li>
								<a href="tv.html" title="TV Show">TV SERIES</a>
								<ul>
									<li><a href="#">Disney</a></li>
									<li><a href="#">Western</a></li>
									<li><a href="#">Chinese</a></li>
									<li><a href="#">MNC TV Movies</a></li>
									<li><a href="#">MNC Drama Series</a></li>
									<li><a href="#">MNC Comedy Series</a></li>
								</ul>
							</li>
							<li>
								<a href="kods.html" title="TV Show">KIDS</a>
								<ul>
									<li><a href="#">Animated Series</a></li>
									<li><a href="#">Animated Movie</a></li>
									<li><a href="#">Family Movie</a></li>
								</ul>
							</li>
							<li>
								<a href="clip.html" title="Video Clip">CLIP</a>
								<ul>
									<li><a href="#">Seputar Indonesia Clips</a></li>
									<li><a href="#">Intens Clips</a></li>
									<li><a href="#">Silet Clips</a></li>
									<li><a href="#">Go Spot Clips</a></li>
									<li><a href="#">Obsesi Clips</a></li>
									<li><a href="#">Fokus Selebriti Clips</a></li>
									<li><a href="#">Dahsyat Clips</a></li>
								</ul>
							</li>
						</ul>
					</nav>
					<!-- Menu END -->
					<div class="search">
						<form>
							<input type="text" />
							<input type="submit" value="" />
						</form>
					</div>

					<!-- USER START -->
					<div class="user l">
						<ul>
							<li><a href="#" title="Upgrade previllage">UPGRADE</a></li>
							<li><a href="#" title="Nama USer">Si Fulan (0)</a>
								<ul>
									<li><a href="#" title="Akun">Akun</a></li>
									<li><a href="#" title="Pesan">Pesan <span class="r">(0)</span></a></li>
									<li><a href="#" title="favorit">Favorit</a></li>
									<li><a href="#" title="Petunjuk">Petunjuk</a></li>
									<li><a href="#" title="Keluar">Keluar</a></li>
								</ul>
							</li>
							<li><a href="#" title="Avatar"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/tpl/icon/avatar.jpg" width="50" height="50" alt="avatar user" /></a></li>
						</ul>
					</div>
					<!-- USER END -->
				</div>
			</div>
		</div>
		<!-- HEADER END -->	
			<div class="l bc">
				<div class="container">
					<?php if (isset($this->breadcrumbs)): ?>
					<?php $this->widget('zii.widgets.CBreadcrumbs', array(
						'links'=>$this->breadcrumbs,
					)); ?><!-- breadcrumbs -->
					<?php endif ?>
				</div>
			</div>
		<!-- CONTENT START -->
		<div class="section">
			<div class="container">
				<?php echo $content; ?>
			</div>	
		</div>	
		<!-- CONTENT END -->
		<!-- FOOTER START -->
		<div class="warp l">
			<div class="container">
				<div class="footer">
					<ul>
						<li><a href="#" title="Movie Bay Plus">Movie Bay Plus</a></li>                         
						<li><a href="#" title="Blog">Blog</a></li>
						<li><a href="#" title="Advertising">Advertising</a></li>
						<li><a href="#" title="Jobs">Jobs</a></li>
						<li><a href="#" title="Help">Help</a></li>
						<li><a href="#" title="About Us">About Us</a></li>
					</ul>
					<ul class="term">
						<li>Privacy Policy &copy; 2013 Movie Bay</li> 
						<li><a href="#" title="term of Use">Terms of Use</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- FOOTER END -->
    </body>
</html>