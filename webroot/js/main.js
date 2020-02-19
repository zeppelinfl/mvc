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

});