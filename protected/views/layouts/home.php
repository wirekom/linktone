<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Login Form</title>
		<meta name="description" content="Movie Bay: Subscribe" />
		<meta name="keywords" content="okezone, subscribe, OTT, Movie Bay, Movie, video, MNC" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/default.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/base.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/component.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/moviebay.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/login.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/cssBootstrap/bootstrap.css" />
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.custom.js"></script>
	</head>
	<body>
		<header class="clearfix">
			<div class="top">
				&nbsp;
			</div>
		</header>	
		<div class="container">
			<?php echo $content; ?>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<!-- imagesLoaded jQuery plugin by @desandro : https://github.com/desandro/imagesloaded -->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.imagesloaded.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/cbpBGSlideshow.min.js"></script>
		<script>
			$(function() {
				cbpBGSlideshow.init();
			});
		</script>
	</body>
</html>