jQuery(function($) {'use strict';
	var menubar = $('.header-top').children();

	var lastScrollTop = 0;
	var currentScrollTop = menubar.scrollTop();

	var prev = window.scrollY;
	window.addEventListener('scroll', function() {
		if(window.scrollY > prev) {
			menubar.css('visibility', 'hidden');
		}
		else {
			menubar.css('visibility', 'visible');
		}
		prev = window.scrollY;
	});
});
//# sourceMappingURL=all.js.map
