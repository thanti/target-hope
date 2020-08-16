jQuery(document).ready(function() {
        $( ".select" ).click(
      function() {
        $( ".select" ).toggle( "active" );
      }

    jQuery(".donate").click(function() {
        jQuery(".donate-form__content").toggleClass("show");
        jQuery(this).toggleClass("donate__content--active");
    });

    jQuery(".join").click(function() {
        jQuery(".donate-text__content").toggleClass("show");
        jQuery(this).toggleClass("donate__content--active");
    });

    jQuery(".join").click(function() {
        jQuery(".donate-text__content").addClass("hide");
        jQuery(".donate-text__content").removeClass("show");
        jQuery(".donate").removeClass("hide");
    });

    jQuery(".donate").click(function() {
        jQuery(".donate-form__content").addClass("hide");
        jQuery(".donate-form__content").removeClass("show");
        jQuery(".join").removeClass("hide");
    });

    jQuery("slider__item").click(function() {
        jQuery(".container--project").addClass("show");
    });
});

