jQuery(document).ready(function(e){e(".mobile-nav-icon").click(function(t){t.preventDefault();e(".mobile-nav").toggleClass("mobile-nav-active")});e(".mobile-nav a").click(function(e){e.stopPropagation()})});