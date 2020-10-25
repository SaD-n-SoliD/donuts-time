$(document).ready(function() {
	$('.slider').slick({
		dots: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		initialSlide: -1,
		//centerMode: true,
		//centerPadding: 0,
		responsive:[
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 900,
				settings: {
					initialSlide: 0,
					slidesToShow: 1
				}
			}
		]
	});
});