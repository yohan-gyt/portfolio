var $animate = $(".skill-bar");

$(window).scroll(function () {
	$animate.each(function () {
		animateMiddle = $(this).offset().top + 0.4 * $(this).height();
		windowBottom = $(window).scrollTop() + $(window).height();

		if (animateMiddle < windowBottom) {
			$(this).addClass("anim");
		}
	});
});

$(window).scroll();
