$(document).ready(function() {
    $('#Character-list-item,#Novellas-list-item').slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        dots: true,
        arrows: false,
        responsive: [{
            breakpoint: 992,
            settings: {
                arrows: false,
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }, {
            breakpoint: 480,
            settings: {
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1,
				dots: false
            }
        }]
    });
    $('.navbar-nav li a').click(function(e) {
        e.preventDefault();
        part = $(this).attr('href');
        position = $(part).offset().top;
        $('html, body').animate({
            scrollTop: position
        }, 1400, 'easeInOutSine')
    });
    $('.scroll-to-info').click(function(e) {
        e.preventDefault();
        position = $("#info").offset().top;
        $('html, body').animate({
            scrollTop: position
        }, 1400, 'easeInOutSine')
    });
    $('#scroll-top').click(function(e) {
        e.preventDefault();
        position = $("#header").offset().top;
        $('html, body').animate({
            scrollTop: 0
        }, 1400, 'easeInOutSine')
    });
    $(window).on('scroll', function() {
        if ($(this).scrollTop() >= 100) {
            $('#header').css({
                "background": "#222",
                "height": "70px",
            });
            $('#logo').css({
                "line-height": "55px"
            });
            $('#navbarSupportedContent').css({
                "top": "15px"
            })
        } else {
            $('#header').css({
                "background": "transparent",
                "height": "120px",
            });
            $('#logo').css({
                "line-height": "120px"
            });
            $('#navbarSupportedContent').css({
                "top": "6px"
            })
        }
    });
    $(window).on('scroll', function() {
        if ($(this).scrollTop() >= 800) {
            $('#scroll-top').css({
                "opacity": "1"
            })
        } else {
            $('#scroll-top').css({
                "opacity": "0"
            })
        }
    });
    $('.Library-item').matchHeight();
	$('img#myImg').click(function(e) {
        e.preventDefault();
		var $this = $(this);
		var $img = $this.attr("src");
       $("#myModal").css({"display":"block"});
	   $("#img01").attr("src",$img);
	   $("#caption").html($this.attr("alt"));
    });
	$('span.close').click(function(e) {
        e.preventDefault();
		var $this = $(this);
       $("#myModal").css({"display":"none"});
    });
	$('.fancybox').fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});
});