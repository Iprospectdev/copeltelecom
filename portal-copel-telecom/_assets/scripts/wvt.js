jQuery(document).ready(function($) {	
	$('.wvt-step--heading').on('click', function(event) {
		$('.wvt-step').removeClass('active');
		$(this).parent().addClass('active')
	});
	$('.wvt-btn').on('click', function(event) {
	    $(this).parents('.wvt-step').removeClass('active').next().addClass('active');
	    return false;
	});
	$('.wvt-form-control input, .wvt-form-control textarea').keyup(function(event) {
		var element = $(this);
		checkval(element);
	    return false;
	});
	$('.wvt-form-control select').on('change',function(event) {
		var element = $(this);
		checkval(element);
	    return false;
	});
	$('.wvt-form-control input, .wvt-form-control select, .wvt-form-control textarea').each(function(index, el) {
		var element = $(this);
	    checkval(element);
	});
});	

function checkval(element) {
    if(element.val()) {
    	element.parents('.wvt-form-control').addClass('active');
    } else {
		element.parents('.wvt-form-control').removeClass('active');
    }
}
