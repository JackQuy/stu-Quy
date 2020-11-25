$(document).ready(function(){
	$('#wrapper3 #content ul').slick({
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
	$('#wrapper5 ul').slick({
		slidesToShow: 4,
		slidesToScroll: 4,
		dots: true,
		// dotsClass: 'slick-dots',
		arrows: false,
		// centerMode: true,
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
		}} ]
	});

	$('#sb2-content2 #sb2-content2_1').click(function(){
	   $('.sb-content3').css('display','block');
	   $('.sb2-content3').css('display','none');
	   $(this).css('font-family','OpenSans-SemiBold');
	   $('#sb2-content2 #sb2-content2_2').css('font-family','OpenSans');
	 });
	$('#sb2-content2 #sb2-content2_2').click(function(){
	   $('.sb-content3').css('display','none');
	   $('.sb2-content3').css('display','block');
	   $(this).css('font-family','OpenSans-SemiBold');
	   $('#sb2-content2 #sb2-content2_1').css('font-family','OpenSans');
	 });
	$('#icon-menu i').click(function(){
		$('#respon-menu').slideToggle(500);
		return false;
	});
	$(window).scroll(function(event) {
		var pos_body = $('html,body').scrollTop();
		if(pos_body > 100){
			
			$('#header').css('background','#000');
			$('.The-Curseborn-Saga').css('padding','40px 0px');
			$('#header #menu').css('padding-top','20px');
		} else {
			$('#header').css('background','transparent');
			$('.The-Curseborn-Saga').css('padding','54px 0px');
			$('#header #menu').css('padding-top','40px');
		}
		if(pos_body < 600){
		 $('#shape1').css('display','block');
		 $('#header #menu li .shape').not('#shape1').css('display','none');
		} else
		if(pos_body < 1200 && pos_body > 600){
		 $('#shape2').css('display','block');
		 $('#header #menu li .shape').not('#shape2').css('display','none');
		} else
		if(pos_body < 2700 && pos_body > 1800){
		 $('#shape6').css('display','block');
		 $('#header #menu li .shape').not('#shape6').css('display','none');
		} else
		if(pos_body < 4500 && pos_body > 3200){
		 $('#shape4').css('display','block');
		 $('#header #menu li .shape').not('#shape4').css('display','none');
		} else
		if(pos_body < 5100 && pos_body > 4500){
		 $('#shape5').css('display','block');
		 $('#header #menu li .shape').not('#shape5').css('display','none');
		} else
		if(pos_body < 3200 && pos_body > 2700){
		 $('#shape3').css('display','block');
		 $('#header #menu li .shape').not('#shape3').css('display','none');
		} else {
			$('#header #menu li .shape').css('display','none');
		}
		
	});
	$('#menu li a').click(function(e) {
		console.log("ok");
        e.preventDefault();
        // alert("ok");
        console.log("ok");
        var part = $(this).attr('href');
        var position = $(part).offset().top;
        $('html, body').animate({
            scrollTop: position
        }, 1400, 'easeInOutSine')
    });
    $('#respon-menu li a').click(function(e) {
        e.preventDefault();
        // alert("ok");
        var part = $(this).attr('href');
        var position = $(part).offset().top;
        $('html, body').animate({
            scrollTop: position
        }, 1400, 'easeInOutSine')
    });
    $('#icon a').click(function(e) {
        e.preventDefault();
        // alert("ok");
        var part = $(this).attr('href');
        var position = $(part).offset().top;
        $('html, body').animate({
            scrollTop: position
        }, 1400, 'easeInOutSine')
    });

});