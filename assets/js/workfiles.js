jQuery(document).ready(
    function() {
        $( ".select" ).click(function() {
            $( ".select" ).toggle( "active" );
        });
/*
    jQuery(".donate").click(function() {
        jQuery(".donate-form__content").toggleClass("show");
        jQuery(this).toggleClass("donate__content--active");
    });

    jQuery(".join").click(function() {
        jQuery(".donate-text__content").addClass("show");
        jQuery(this).toggleClass("donate__content--active");
    });
*/
    jQuery(".join").click(function() {
        jQuery(".donate-text__content").addClass("hide");
        jQuery(".donate-text__content").removeClass("show");
        jQuery(".donate-form__content").addClass("show");
        jQuery(".donate-form__content").removeClass("hide");
        jQuery(".donate").removeClass("donate__content--active");
        jQuery(".join").addClass("donate__content--active");
    });

    jQuery(".donate").click(function() {
        jQuery(".donate-text__content").addClass("show");
        jQuery(".donate-text__content").removeClass("hide");
        jQuery(".donate-form__content").addClass("hide");
        jQuery(".donate-form__content").removeClass("show");
        jQuery(".join").removeClass("donate__content--active");
        jQuery(".donate").addClass("donate__content--active");
    });

    /*jQuery("slider__item").click(function() {
        jQuery(".container--project").addClass("show");
    }); 

    var transx = 0;
    var transxMax = $(".slider-container").width() - $(".flex-inline-container").width();
    jQuery(".button--next").click(function() {
        if ((transx - 277) > -transxMax) {
            transx -= 277;
        } else {
            transx = -transxMax;
        }
        jQuery(".slider-container").css('transform', 'translateX(' + transx + 'px)');
    });

    jQuery(".button--prev").click(function() {
        if ((transx + 277) < 0) {
            transx += 277;
        } else {
            transx = 0;
        }
        jQuery(".slider-container").css('transform', 'translateX(' + transx + 'px)');
    });
    */
    
    $('.slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        prevArrow: '<button class="button button-slider button--prev"><i class="icon"><svg role="img"><use xlink:href="../img/all.svg#icon-arrow"></use></svg></i></button>',
        nextArrow: '<button class="button button-slider button--next"><i class="icon"><svg role="img"><use xlink:href="../img/all.svg#icon-arrow"></use></svg></i></button>'
    });

    $('.hero-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 4000,
        dots: true,
        prevArrow: '<button class="button button-slider button--prev"><i class="icon"><svg role="img"><use xlink:href="../img/all.svg#icon-arrow"></use></svg></i></button>',
        nextArrow: '<button class="button button-slider button--next"><i class="icon"><svg role="img"><use xlink:href="../img/all.svg#icon-arrow"></use></svg></i></button>'
    });
});

