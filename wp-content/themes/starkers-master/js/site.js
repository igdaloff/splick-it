jQuery(document).ready(function($) {

	/* HIGHLIGHT CURRENT PAGE IN NAV */
	$("nav a").each(function(){
		if ($(this).attr("href") === window.location.pathname){
			$(this).addClass("selected");
		}
	});

	/* MOBILE MENU REVEAL */
	var pushMenu = document.getElementById( 'mobile-nav-button' ),
			menu = document.getElementById( 'mobile-nav' )
      body = document.body;

	pushMenu.onclick = function() {
    classie.toggle( this, 'active' );
    classie.toggle( body, 'menu-push' );
    classie.toggle( menu, 'mobile-nav-active' );
	};

	/* SHOW SUB-NAV */
/*
	var timer;
  $('.first-desktop-nav-item').mouseenter(function() {
		$('.second-level-ul').addClass('second-level-ul-active');
		$(this).addClass('first-desktop-nav-item-active');
		$(this).find('a').addClass('selected');
  });

  $('.first-desktop-nav-item, .second-level-ul').mouseleave(function() {
      timer=setTimeout("$('.second-level-ul').removeClass('second-level-ul-active')",50);
			$('.first-desktop-nav-item').removeClass('first-desktop-nav-item-active');
			$('.first-desktop-nav-item a').removeClass('selected');
  });

  $(".first-desktop-nav-item, .second-level-ul").mouseenter(function() {
		$('.first-desktop-nav-item').addClass('first-desktop-nav-item-active');
		$('.first-desktop-nav-item a').addClass('selected');
    clearTimeout(timer);
  });
*/

	/* CLIENT MASONRY */
	$(window).load(function(){
		$('.grid-item-list').masonry({
			singleMode: true,
			itemSelector: '.grid-item',
			transitionDuration: 0
		});
	});

/*
    var MEASUREMENTS_ID = 'measurements'; // abstracted-out for convenience in renaming
    $("body").append('<div id="'+MEASUREMENTS_ID+'"></div>');
    $("#"+MEASUREMENTS_ID).css({
        'position': 'fixed',
        'bottom': '0',
        'right': '0',
        'background-color': 'black',
        'color': 'white',
        'padding': '5px',
        'font-size': '10px',
        'opacity': '0.4'
    });
    getDimensions = function(){
        return $(window).width() + ' (' + $(document).width() + ') x ' + $(window).height() + ' (' + $(document).height() + ')';
    }
    $("#"+MEASUREMENTS_ID).text(getDimensions());
    $(window).on("resize", function(){
        $("#"+MEASUREMENTS_ID).text(getDimensions());
    });
*/


});