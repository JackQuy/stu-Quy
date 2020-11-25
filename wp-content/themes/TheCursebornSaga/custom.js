jQuery(document).ready(function() {
	//hiệu ứng khi sổ ra và rê chuột đi chổ khác thì menu dừng ít giây rồi mất đi
	jQuery('nav.primary-menu ul.sf-menu').superfish();

	jQuery('.character ul').slick({
		slidesToShow: 4,
		slidesToScroll: 2,
		dots: true,
		arrows: false,
		focusOnSelect: true,
		responsive: [
			{
				breakpoint: 640,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
					}
			},
			{
				breakpoint: 769,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
					}
			},
			{
				breakpoint: 1025,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
		} ]
	});
});