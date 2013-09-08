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

	pushMenu.onclick = function(e) {
		e.preventDefault();
    classie.toggle( this, 'active' );
    classie.toggle( body, 'menu-push' );
    classie.toggle( menu, 'mobile-nav-active' );
	};

/*
	$('.mobile-nav-icon').click( function(e){
		e.preventDefault();
		$('.mobile-nav').toggleClass('mobile-nav-active');
	});

	$('.mobile-nav a').click( function(e){
		e.stopPropagation();
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


});