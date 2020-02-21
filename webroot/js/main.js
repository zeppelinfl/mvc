$(document).ready(function(){
	$('.hover-border').mouseenter(function() {
		$(this).css("border-bottom" , "3px solid #fff");
	});
	$('.hover-border').mouseleave(function() {
		$(this).css("border-bottom" , "unset");
	});

	$('.categ-list').hover(function() {
		$(this).toggleClass('cat-selected');
	});
	$(function() {
	    setTimeout(function() {
	        $(".flash").hide('blind', {}, 500)
	    }, 5000);
	});

});
$(document).ready(function(){
  $('.slick-carrousel').slick({
  	  dots: true,
	  infinite: false,
	  speed: 300,
	  slidesToShow: 4,
	  slidesToScroll: 4,
	  responsive: [
	 	{
	      breakpoint: 1360,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
  });
  $('.slick-carrousel-exp').slick({
	  infinite: true,
	  slidesToShow: 4,
	  slidesToScroll: 4,
  });
});