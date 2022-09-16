$('.special.cards .image').dimmer({
    on: 'hover'
});

$('#card_01').click(function(){
    regular_service_effect('#card_01');

    $('#card_02_view').addClass('d-none');
    $('#card_03_view').addClass('d-none');
    $('#card_01_view').removeClass('d-none');
    $('#card_01_view').addClass('animate__animated animate__fadeIn');
});

$('#card_02').click(function(){
    regular_service_effect('#card_02');

    $('#card_01_view').addClass('d-none');
    $('#card_03_view').addClass('d-none');
    $('#card_02_view').removeClass('d-none');
    $('#card_02_view').addClass('animate__animated animate__fadeIn');


});

$('#card_03').click(function(){
    regular_service_effect('#card_03');

    $('#card_01_view').addClass('d-none');
    $('#card_02_view').addClass('d-none');
    $('#card_03_view').removeClass('d-none');
    $('#card_03_view').addClass('animate__animated animate__fadeIn');

});

function regular_service_effect(id){
    $('.service_preview').removeClass('d-none');
    $('.arrow_down').addClass('d-none');
    $('.content_color').removeClass('card_bg');
    $(id).find('.content_color').addClass('card_bg');
    $(id).find('.arrow_down').removeClass('d-none');
}

$('#service_preview_close').click(function(){
    $('.service_preview').addClass('d-none');
    $('.arrow_down').addClass('d-none');
    $('.content_color').removeClass('card_bg');
    // alert('hi');
})
