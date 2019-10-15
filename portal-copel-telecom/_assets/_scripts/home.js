jQuery(document).ready(function($) {
    
    const sizeToFixed = $('.header').height() + 70;
    $(window).on('scroll', function () {
        if( $(window).scrollTop() > sizeToFixed) {
          $('.header-nav.fixed').addClass('active');
        } else {
          $('.header-nav.fixed').removeClass('active');
        }
    });

    $('body').scrollspy({ target: '.js-scrollspy', offset: $('.header-nav.fixed').height() + 10 })

    $(window).on('scroll', function(event) {
        if(!$('.header-nav.fixed .active').length){
          $('.header-nav--loader').width($(window).scrollTop() / 3);
        }
    });

    $(window).on('activate.bs.scrollspy', function () {
        const middle = $('.header-nav.fixed .active').outerWidth()/2
        const position = $('.header-nav.fixed .active').position().left
        $('.header-nav--loader').width(position+middle);
        var active = $('.header-nav.fixed .active').attr('data-show');
        $('[data-show]').each(function(index, el) {
          $($(this).attr('data-show')).removeClass('active');
        });
        $(active).addClass('active');
    })
    if($(".home-carousel").length > 0) {

        var dot = '<svg width="32" height="32" class="svg-dot" data-percent="100"><circle class="svg-dot--circle" cx="16" cy="16" r="13"></circle><circle class="svg-dot--animation" cx="16" cy="16" r="13"></circle></svg>';

        $(".home-carousel--item").attr("data-dot", dot);

        $(".home-carousel").owlCarousel({
            items: 1,
            autoplay: true,
            dotsData: true,
            loop: true
        });
      
        dotsPosition();
        $(".home-carousel").on('changed.owl.carousel', function(event) {
            dotsPosition();
        })

        function dotsPosition(){
            let top;
            if($(window).width() <= 768){
              top = $('.home-carousel .active img.d-block').height() - 45;
              $('.home-carousel .owl-dots').css('top', top);
            }
        }
    }

    let x;
    $('.app-box--scroll').on('scroll', function () {
        x = 100 * $('.app-box--scroll').scrollTop() / ( $('.app-box--scroll').height() * $('.app-box--item').length ) + 25
        $('.app-box--scrollbar').height(x+'%');
        console.log($('.app-box--scroll').scrollTop() + '-' + x);
    });

    var owlcarousel = $(".home-usos-carousel");
    if(owlcarousel.length > 0) {
        owlcarousel.owlCarousel({
            autoplay: false,
            loop: false,
            dots: false,
            nav: true,
            items: 3,
        })
    }
});
