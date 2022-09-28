$(window).on("scroll", function () {
    if ($(window).scrollTop() > 50) {
        $("nav").addClass("bg_coffe");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
        $("nav").removeClass("bg_coffe");
    }
});

$(window).on("scroll", function () {
    if ($(window).scrollTop() > 1300) {
        // alert($(window).scrollTop());
        $('#service_col_one').addClass('service_one_fixed');
        $('#sct_heading').addClass('sct_heading_fixed');
        $('#service_col_two').addClass('service_two_fixed');
        $('#service_col_three').addClass('service_three_fixed');
    } else {
        //remove the background property so it comes transparent again (defined in your css)
        $('#service_col_one').removeClass('service_one_fixed');
        $('#sct_heading').removeClass('sct_heading_fixed');
        $('#service_col_two').removeClass('service_two_fixed');
        $('#service_col_three').removeClass('service_three_fixed');
    }
});
