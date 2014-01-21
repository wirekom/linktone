$(function(){

	/* Back to top scroll */
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) { $('.scrollup').slideDown(); } else { $('.scrollup').slideUp(); }
	}); 
	$('.scrollup').click(function(){
		$("html, body").stop().animate({ scrollTop: 0 }, 2000, 'easeInOutExpo');
		return false;
	});
	/* End Back to top scroll */
	
	// main menu -> submenus
	$('#menu .collapse').on('show', function()
	{
		$(this).parents('.hasSubmenu:first').addClass('active');
	})
	.on('hidden', function()
	{
		$(this).parents('.hasSubmenu:first').removeClass('active');
	});
	
	// main menu visibility toggle
	$('.navbar.main .btn-navbar').click(function()
	{
		$('.container-fluid:first').toggleClass('menu-hidden');
		$('#menu').toggleClass('hidden-phone');
		
		if (typeof masonryGallery != 'undefined') 
			masonryGallery();
	});
	
	/* Add class in child menu if hover */
	$('#menu ul.nav-menu li').hover(function() {
        $(this).children('a').toggleClass('active');
    });
	$('#menu ul.nav-menu li').has('ul').children('a').attr("data-toggle", "collapse");
	$('#menu ul.nav-menu li').has('ul li').addClass("hasSubmenu");
	$('#menu ul.nav-menu li').has('ul li').append('<span class="count"><b class="icons-chevron-right"></b></span>');
	
	
	$(window).resize(function()
	{
		if (!$('#menu').is(':visible') && !$('.container-fluid:first').is('.menu-hidden') && !$('.container-fluid:first').is('.documentation') && !$('.container-fluid:first').is('.login'))
			$('.container-fluid:first').addClass('menu-hidden');
	});
	
	$(window).resize();
	
	
	
	
	
});