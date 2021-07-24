$(document).ready(function(){	
	"use strict";

	/***** Sicky.js *****/
    $(".navbar").sticky({ topSpacing: 0});

	/***** Smooth Scroll *****/
	smoothScroll.init({
		speed: 600
	});

	/***** Scroll Spy *****/
	$('body').scrollspy({
        target: '.navbar-collapse',
        offset: 50
    });

	/***** Typed Js *****/
  	$("#typed").typed({
		stringsElement: $('#typed-strings'),
		typeSpeed: 50,
		backDelay: 1000,
		loop: true,
		contentType: 'html',
		loopCount: true
  	});

  	/***** WOW Js *****/
	new WOW().init();

	/***** Magnific-popup *****/
	$('.filtr-item').magnificPopup({
		delegate: '.fc-icon a',
		type: 'image',
		gallery: {
			// options for gallery
			enabled: true
		},
		removalDelay: 300,
		mainClass: 'mfp-fade'
	});

	/***** Counter Up *****/
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});

	/***** Owl Carousel *****/
	$(".testimonial-carousel").owlCarousel({
		autoplay:true,
    	autoplayTimeout:4000,
    	autoplayHoverPause:false,
    	smartSpeed:2000,
		loop: true,
		items : 1,
		nav : false,
		margin: 30,
		responsiveClass: true,
		dots: true,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 1
			},
			768: {
				items: 1
			},
			992: {
				items: 1
			}
		}
    });

    /***** Slider Home *****/
    $(".slider-wrapper").owlCarousel({
    	autoplay:true,
    	autoplayTimeout:4000,
    	autoplayHoverPause:false,
    	smartSpeed:2000,
		loop: true,
		items : 1,
		nav : true,
		navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		margin: 0,
		responsiveClass: true,
		dots: false,
		animateOut: 'fadeOut',
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 1
			},
			768: {
				items: 1
			},
			992: {
				items: 1
			}
		}
    });

    /***************** Back To Top ******************/
	$(window).scroll(function(){
	if($(this).scrollTop()>500){
	    $(".back-to-top").fadeIn();
	}else{
	    $(".back-to-top").hide();
	}
	});
	$(".back-to-top").on('click',function(){
	    $("html, body").animate({scrollTop:0}, 900);
	});

    /***** Contact Form *****/
	function checkmail(input){
      var pattern1=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if(pattern1.test(input)){ return true; }else{ return false; }}     
        function proceed(){
            var name = document.getElementById("name");
            var email = document.getElementById("email");
            var company = document.getElementById("company");
            var msg = document.getElementById("message");
            var errors = "";
            if(name.value == ""){ 
            name.className = 'error';
              return false;}    
              else if(email.value == ""){
              email.className = 'error';
              return false;}
                else if(checkmail(email.value)==false){
                    alert('Please provide a valid email address.');
                    return false;}
                else if(company.value == ""){
                    company.className = 'error';
                    return false;}
               else if(msg.value == ""){
                    msg.className = 'error';
                    return false;}
               else 
              {
        $.ajax({
            type: "POST",
            url: "submit.php",
            data: $("#contact_form").serialize(),
            success: function(msg){
            //alert(msg);
            if(msg){
                $('#contact_message').fadeIn(1000);
                    document.getElementById("contact_message");
                 return true;
            }}
        });
    }};

    /***** Pre-Loader *****/
	$(window).on('load', function() {
		$(".preloader").fadeOut("slow");
		/***** Filterizer *****/
		$('.filtr-container').filterizr({
			layout: 'sameWidth',
			easing: 'ease-out',
			filter: 'all',
			selector: '.filtr-container',
			setupControls: true
		});
	    //Filter controls
	    $('.portfolio-filter li').on('click', function (e) {
	         $('.portfolio-filter li').removeClass('active');
	         $(this).addClass('active');
	    });
	});

});