jQuery(document).ready(function($) {
     var dot = '<svg width="32" height="32" class="svg-dot" data-percent="100"><circle class="svg-dot--circle" cx="16" cy="16" r="13"></circle><circle class="svg-dot--animation" cx="16" cy="16" r="13"></circle></svg>';

    $(".slider-topo--slides .slide").attr("data-dot", dot);

   var owlcarousel = $(".slider-topo--slides");
    if(owlcarousel.length > 0) {
        owlcarousel.owlCarousel({
            autoplay: true,
            autoplayTimeout:10000,
            autoplayHoverPause:false,
            loop: true,
            dots: true,
            dotsData: true,
            nav: false,
            items: 1,
        })
    }

    $(".slider-infos-carousel--item").attr("data-dot", dot);

   var owlcarousel2 = $(".slider-infos-carousel");
    if(owlcarousel2.length > 0) {
        owlcarousel2.owlCarousel({
            autoplay: true,
            autoplayTimeout:10000,
            autoplayHoverPause:false,
            loop: true,
            dots: true,
            dotsData: true,
            nav: false,
            items: 1,
        })
    }

    $(".slider-infos-laranja-carousel--item").attr("data-dot", dot);

   var owlcarousel3 = $(".slider-infos-laranja-carousel");
    if(owlcarousel3.length > 0) {
        owlcarousel3.owlCarousel({
            autoplay: true,
            autoplayTimeout:10000,
            autoplayHoverPause:false,
            loop: true,
            dots: true,
            dotsData: true,
            nav: false,
            items: 1,
        })
    }
});
