jQuery(document).ready(function($) {

	/* HIGHLIGHT CURRENT PAGE IN NAV */
	$(".primary-nav-item a").each(function(){
		if ($(this).attr("href") == window.location.pathname){
			$(this).addClass("selected");
		}
	});

	/* MOBILE MENU REVEAL */
	$('.mobile-nav-icon').click( function(e){
		e.preventDefault();
		$('.mobile-nav').toggleClass('mobile-nav-active');
	});

	$('.mobile-nav a').click( function(e){
		e.stopPropagation();
	});

	/* CLIENT MASONRY */
	$(window).load(function(){
		$('.grid-item-list').masonry({
			singleMode: true,
			itemSelector: '.grid-item',
			transitionDuration: 0
	  });
	});
});