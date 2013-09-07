jQuery(document).ready(function($) {

	/* HIGHLIGHT CURRENT PAGE IN NAV */
	$("nav a").each(function(){
		if ($(this).attr("href") === window.location.pathname){
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

	/* ADD ID TO SECTIONS */

/*
	$('.merchant-solutions section h3').each( function(){

		var str = $(this).text();
		var sectionId = $(this).text(str.replace(/[\.,-\/#!$%\^&\*;:{}=\-_`~()]/g,''));
		var str = $(sectionId).text();
 		var sectionIdCorrected = $(sectionId).text(str.replace(/\s/g,'-')).html().toLowerCase();

		$(this).parent('section').attr('id',sectionIdCorrected);
		console.log($(sectionIdCorrected));
	});
*/

});