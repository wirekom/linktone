<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<link type="image/x-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/icon.ico" rel="icon">
	<link type="image/x-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/icon.ico" rel="shortcut icon">
	<meta content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
	<meta content="Your description" name="description">
	<meta content="esia, myesia" name="keywords">
	<meta content="Syukri" name="M.Syukri Khafidh">

	<!-- Le styles -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/jasny-bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/layout2.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/glyphicons.css" rel="stylesheet">
	

	<?php Yii::app()->bootstrap->register(); ?>
	<!-- Le Javascript -->
	<script type="javascript">
	
	</script>
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class="container-fluid">
	<div class="navbar main">
		<a class="appbrand" href="<?php echo Yii::app()->request->baseUrl; ?>"><span>BOSS - Linktone</span></a>
		<button class="btn btn-navbar" type="button">
			<span class="icon-bar"></span> 
			<span class="icon-bar"></span> 
			<span class="icon-bar"></span>
		</button>
		<ul class="topnav pull-right oout">
			<li><a href="<?php echo Yii::app()->request->baseUrl."/index.php/site/logout"; ?>" style="padding: 2px 10px;" class="btn btn-default btn-small pull-right">Sign Out</a></li>
		</ul>
		<ul class="topnav pull-right">
			<!--<li class="dropdown">
				<a class="glyphicons circle_exclamation_mark" data-toggle="dropdown" href=""><i></i>Notifikasi <span class="caret"></span></a>
				<ul class="dropdown-menu pull-right">
					<li><a href=""><i class="icon-envelope"></i>&nbsp;Message</a></li>
					<li><a href=""><i class="icon-envelope"></i>&nbsp;Posting Message</a></li>
				</ul>
			</li>
			-->
			
			<li class="account">
				<a class="glyphicons logout lock" href="" data-toggle="dropdown">
				<span class="hidden-phone text"><?php echo Yii::app()->user->name;?></span><i></i>
				</a>
				<ul class="dropdown-menu pull-right">
					<li class="highlight profile">
						<span>
							<span class="heading"><a class="pull-right" href="">edit</a></span>
							<span class="img"><img alt="Mr. Awesome" src="<?php echo Yii::app()->request->baseUrl; ?>/images/user.jpg"/></span>
							<span class="details">
								blackjack@yahoo.com
							</span>
							<span class="clearfix"></span>
						</span>
					</li>
					<li>
						<span>
							<a href="<?php echo Yii::app()->request->baseUrl."/index.php/site/logout"; ?>" class="btn btn-default btn-small pull-right">Sign Out</a>
						</span>
					</li>
				</ul>
			</li>
		</ul>
	</div>
	<div id="wrapper">
		<div class="hidden-phone" id="menu">
			<a href="" class="brand"><img class="wirekom" src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo-wirekom.png" alt="Wirekom" /></a>
			<!--<div id="search">
				<input type="text" placeholder="Quick search ...">
				<button class="glyphicons search"><i></i></button>
			</div>-->
			<ul class="nav-menu">
				<li class="glyphicons home"><a href="<?php echo Yii::app()->request->baseUrl.'/index.php/site/index'?>"><i></i><span>Home</span></a></li>
				
				<li class="glyphicons group">
					<a href="#menu_gruops"><i></i><span>User Management</span></a>
					<ul id="menu_gruops" class="collapse">
					<li class=""><a href="<?php echo Yii::app()->createUrl('/backend')?>"><span>Manage User</span></a></li>
					<li class=""><a href="<?php echo Yii::app()->createUrl('/backend')?>"><span>Subscriber</span></a></li>
					<li class=""><a href="<?php echo Yii::app()->createUrl('/backend')?>"><span>Role Configuration</span></a></li>
					</ul>
				</li>	
				
				<li class="glyphicons film">
					<a href="#menu_products"><i></i><span>Products Management</span></a>
					<ul id="menu_products" class="collapse">
					<li class=""><a href="<?php echo Yii::app()->createUrl('/backend')?>"><span>Manage Package</span></a></li>
					<li class=""><a href="<?php echo Yii::app()->createUrl('/backend')?>"><span>Manage Genre</span></a></li>
					<li class=""><a href="<?php echo Yii::app()->createUrl('/backend')?>"><span>Manage Movies</span></a></li>
					<li class=""><a href="<?php echo Yii::app()->createUrl('/backend')?>"><span>Manage Channel</span></a></li>
					</ul>
				</li>	
				
				<li class="glyphicons usd">
					<a href="#menu_bills"><i></i><span>Bills</span></a>
					<ul id="menu_bills" class="collapse">
					<li class=""><a href="<?php echo Yii::app()->createUrl('/backend')?>"><span>User Payment</span></a></li>
					<li class=""><a href="<?php echo Yii::app()->createUrl('/backend')?>"><span>Log Payment</span></a></li>
					<li class=""><a href="<?php echo Yii::app()->createUrl('/backend')?>"><span>Payment Methode Configuration</span></a></li>
					</ul>
				</li>	
				
				<li class="glyphicons conversation">
					<a href="#menu_ticketing"><i></i><span>Ticketing</span></a>
					<ul id="menu_ticketing" class="collapse">
					<li class=""><a href="<?php echo Yii::app()->createUrl('/backend')?>"><span>User Ticketing</span></a></li>
					</ul>
				</li>	
				
				<li class="glyphicons settings">
					<a href="#menu_components"><i></i><span>Data Master</span></a>
					<ul id="menu_components" class="collapse">
					<li class=""><a href="<?php echo Yii::app()->createUrl('/backend/paymentMethods')?>"><span>Payment Methods</span></a></li>
					<li class=""><a href="<?php echo Yii::app()->createUrl('/backend/bills')?>"><span>Bills</span></a></li>
					<li class=""><a href="<?php echo Yii::app()->createUrl('/backend/products')?>"><span>Products</span></a></li>
					<li class=""><a href="<?php echo Yii::app()->createUrl('/backend/user')?>"><span>User</span></a></li>
					<li class=""><a href="<?php echo Yii::app()->createUrl('/backend/role')?>"><span>Role</span></a></li>
					<li class=""><a href="<?php echo Yii::app()->createUrl('/backend/operation')?>"><span>Operation</span></a></li>
					<li class=""><a href="<?php echo Yii::app()->createUrl('#')?>"><span>Log</span></a></li>
					<li class=""><a href="<?php echo Yii::app()->createUrl('/backend/accessLog')?>"><span>Access Log</span></a></li>
					<li class=""><a href="<?php echo Yii::app()->createUrl('/backend/paymentLog')?>"><span>Payment Log</span></a></li>
					
					</ul>
				</li>
			</ul>
			
			<div style="clear: both" class="clearfix"></div>
			<div class="separator uniformjs"></div>
		</div>
		<div id="content">
			<!--breadcrumb-->
			<?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
				)); ?><!-- breadcrumbs -->
			<div class="separator bottom"></div>
			<?php endif?>
			
			<?php echo $content; ?>
						
			<!-- End Content -->
		</div>
	</div>
</div><!-- /container -->
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
<div class="clear"></div>

<!-- footer -->
<div class="footer">
	  <div class="container">
		<p>Template Admin Keren</p>
		<p>Cpyright &copy; <?php echo date('Y'); ?>, All right served</p>
		
		<p class="fg-color-white">Best view on the latest browsers:</p>
		<div class="browsers-icons clearfix">
			<span class="place-left" title="Internet Explorer 9+"><i class="icons-IE"></i> </span>
			<span class="place-left" title="Chrome"><i class="icons-chrome"></i> </span>
			<span class="place-left" title="Firefox"><i class="icons-firefox"></i> </span>
			<span class="place-left" title="Opera"><i class="icons-opera"></i> </span>
			<span class="place-left" title="Safari"><i class="icons-safari"></i> </span>
		</div>
		<p class="tertiary-info-secondary-text">All modern browsers. Internet Explorer supported on 9+</p>
	  </div>
</div>
<a href="#" class="scrollup" title="Back to Top!">Scroll</a>
</body>
</html>
