$(window).on("scroll", function () {
    if ($(window).scrollTop() > 50) {
        $("nav").addClass("bg_coffe");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
        $("nav").removeClass("bg_coffe");
    }
});

$(window).on("scroll", function () {
    if ($(window).scrollTop() > 2400) {
        // alert($(window).scrollTop());
        $('#service_col_full').addClass('service_col_full_fixed');
        $('#service_col_one').addClass('service_one_fixed');
        $('#sct_heading').addClass('sct_heading_fixed');
        $('#service_col_two').addClass('service_two_fixed');
        $('#service_col_three').addClass('service_three_fixed');
    } else {
        //remove the background property so it comes transparent again (defined in your css)
        $('#service_col_full').removeClass('service_col_full_fixed');
        $('#service_col_one').removeClass('service_one_fixed');
        $('#sct_heading').removeClass('sct_heading_fixed');
        $('#service_col_two').removeClass('service_two_fixed');
        $('#service_col_three').removeClass('service_three_fixed');
    }
});


// $(window).on("scroll", function () {
//     if ($(window).scrollTop() > 2500) {
//         // alert($(window).scrollTop());
//         $('#service_col_full').addClass('service_col_full_fixed');
//         $('#service_col_one').addClass('service_one_fixed');
//         $('#sct_heading').addClass('sct_heading_fixed');
//         $('#service_col_two').addClass('service_two_fixed');
//         $('#service_col_three').addClass('service_three_fixed');
//     } else {
//         //remove the background property so it comes transparent again (defined in your css)
//         $('#service_col_full').removeClass('service_col_full_fixed');
//         $('#service_col_one').removeClass('service_one_fixed');
//         $('#sct_heading').removeClass('sct_heading_fixed');
//         $('#service_col_two').removeClass('service_two_fixed');
//         $('#service_col_three').removeClass('service_three_fixed');
//     }
// });

// $('.link_scroll').click(()=>{

//     var href = $(this).attr( 'href' );
//     $( 'html, body' ).animate({
// 		scrollTop: $( href ).offset().top
//     }, '1000' );
//     e.preventDefault();

// });
