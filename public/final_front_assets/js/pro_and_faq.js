$(document).ready(function () {
    /*** Home: SPINX Connect accordion ***/
    var headerHeight = $("header").outerHeight();
    $(".spinx-acco-content").hide();
    $(".spinx-acco-content:first").show();
    $("h3.spinx-acco-title").click(function () {
        accoTitle = $(this).outerHeight();
        if ($(this).is(".current")) {
            /* $(this).removeClass("current");
            $(this).next(".spinx-acco-content").slideUp(400);*/
        } else {
            $(".spinx-acco-content").slideUp(500);
            $("h3.spinx-acco-title").removeClass("current");
            $(this).addClass("current");
            $(this).next(".spinx-acco-content").slideDown(500);
            /* $(this).next(".spinx-acco-content").slideDown(function () { $('html, body').animate({ scrollTop: $(this).offset().top - headerHeight - accoTitle }, '500'); });*/
        }
    });
});
