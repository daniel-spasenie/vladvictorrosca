// $(window).on('beforeunload', function() {
// 	$(window).scrollTop(0);
// });
$(function () {
	$(document).scroll(function () {
		var $nav = $(".header");
		$nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
		if ($(document).scrollTop() === 0) {
			$('.logo-img').attr('src', '/assets/images/logo-b.png');
		} else {
			$('.logo-img').attr('src', '/assets/images/logo-w.png');
		}
	});
});

$(function () {
	var btn = $('#btt');

	$(window).scroll(function() {
		if ($(window).scrollTop() > 300) {
			btn.addClass('show');
		} else {
			btn.removeClass('show');
		}
	});

	btn.on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({scrollTop:0}, '300');
	});
});
