$(window).on("scroll", function () {
    if ($(window).scrollTop() > 50) {
        $("nav").addClass("bg_coffe");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
        $("nav").removeClass("bg_coffe");
    }
});
