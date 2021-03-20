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

    jQuery("slider__item").click(function() {
        jQuery(".container--project").addClass("show");
    }); 
});

