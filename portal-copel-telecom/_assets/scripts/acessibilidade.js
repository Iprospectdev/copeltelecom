jQuery(document).ready(function($) {
	// Acessibilidade
	$(".js-contraste").on("click",function(e) {
	    $("body").toggleClass('contrast');
	    return false;
	});

	$(".js-font-more").on("click", function(e) {
	    $("body").addClass('zoom-site');
	    return false;
	});

	$(".js-font-default").on("click", function(e) {
	    $("body").removeClass('zoom-site');
	    return false;
	});
});