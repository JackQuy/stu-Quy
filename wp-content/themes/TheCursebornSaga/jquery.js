$(document).ready(function(){
	$('#character #characters, #the_novellas #content ul').slick({
		slidesToShow: 4,
		slidesToScroll: 2,
		dots: true,
		arrows: false,
		focusOnSelect: true,
		autoplaySpeed :3000, //tự động chạy
		Accessibility: true, //cho phép qua lại bằng bàn phím
		responsive: [
			{
				breakpoint: 641,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
					}
			},
			{
				breakpoint: 801,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
					}
			},
			{
				breakpoint: 1081,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
		} ]
	});
	
	$('#sb2-content2 #sb2-content2_1').click(function(){
	   $('#see_our_world #content3').css('display','block');
	   $('#see_our_world #content4').css('display','none');
	   $(this).css('font-family','OpenSans-SemiBold');
	   $('#sb2-content2 #sb2-content2_2').css('font-family','OpenSans');
	 });
	$('#sb2-content2 #sb2-content2_2').click(function(){
	   $('#see_our_world #content3').css('display','none');
	   $('#see_our_world #content4').css('display','block');
	   $(this).css('font-family','OpenSans-SemiBold');
	   $('#sb2-content2 #sb2-content2_1').css('font-family','OpenSans');
	 });
	$('#icon-menu i').click(function(){
		$('.respon-menu').slideToggle(500);
	});
	// var width_body = $('body').width();
	// if(width_body > 640) {
		// alert(width_body);
		// $(document).on("scroll", onScroll);
		$('.primary-menu li').hover(

			function() { 
				if(!$('.primary-menu li div').length){$(this).append('<div></div>');}
			}, 
			function() { 
				$('.primary-menu li div').remove();
			}
		);
	// }
	
	
	$(window).scroll(function(event) {
		var pos_body = $('html,body').scrollTop();
		
		// alert(width_body);
		if(pos_body > 100){
			$('.logo').css('background','#000');
			$('.logo').css('position','fixed');
			$('.logo').css('padding','0px');
		} else {
			$('.logo').css('background','transparent');
			$('.logo').css('padding','20px');
		}
		// if(width_body > 640) {
			if(pos_body < 700){
				if(!$('#menu-item-83 div').length) {
					$('#menu-item-83').append('<div></div>');
				}
			 	$('.primary-menu li div').not('#menu-item-83 div').remove();
			} else
			if(pos_body < 1400 ){
				if(!$('#menu-item-85 div').length) {
					$('#menu-item-85').append('<div></div>');
				}
			 	$('.primary-menu li div').not('#menu-item-85 div').remove();
			} else
			if(pos_body < 2800 && pos_body > 2000){
			 	if(!$('#menu-item-89 div').length) {
					$('#menu-item-89').append('<div></div>');
				}
			 	$('.primary-menu li div').not('#menu-item-89 div').remove();
			} else
			if(pos_body < 4700 && pos_body > 3400){
			 	if(!$('#menu-item-87 div').length) {
					$('#menu-item-87').append('<div></div>');
				}
			 	$('.primary-menu li div').not('#menu-item-87 div').remove();
			} else
			if(pos_body < 5300 && pos_body > 4700){
			 	if(!$('#menu-item-88 div').length) {
					$('#menu-item-88').append('<div></div>');
				}
			 	$('.primary-menu li div').not('#menu-item-88 div').remove();
			} else
			if(pos_body < 3400 && pos_body > 2800){
			 	if(!$('#menu-item-86 div').length) {
					$('#menu-item-86').append('<div></div>');
				}
			 	$('.primary-menu li div').not('#menu-item-86 div').remove();
			} else {
				$('.primary-menu li div').remove();
			}
		// }
		
		
	});
	$('.primary-menu li a').click(function(e) {
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
    $('.respon-menu li a').click(function(e) {
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

// function onScroll(event){
//     var scrollPos = $(document).scrollTop() + 100;
//     $('.primary-menu a').each(function () {
//         var currLink = $(this);
//         var refElement = $(currLink.attr("href"));
//         if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
//             $('.primary-menu ul li a div').remove();
//             currLink.append('<div></div>');
//         }
//         else{
//             // currLink.append('<div></div>');
//             // $('.primary-menu ul li a div').remove();
//         }
//     });
// }