jQuery(document).ready(function($) {

	/* MOBILE MENU REVEAL */
	$('.mobile-nav-icon').click( function(e){
		e.preventDefault();
		$('.mobile-nav').toggleClass('mobile-nav-active');
	});

	$('.mobile-nav a').click( function(e){
		e.stopPropagation();
	});

	/* CLIENT MASONRY */
	$('#client-list').masonry({
		singleMode: true,
		itemSelector: '.single-client',
		transitionDuration: 0
  });
});