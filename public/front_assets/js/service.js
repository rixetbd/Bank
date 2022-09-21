$('.special.cards .image').dimmer({
    on: 'hover'
});

$('#card_01').click(function(){
    regular_service_effect('#card_01');

    $('#card_02_view').addClass('d-none');
    $('#card_03_view').addClass('d-none');
    $('#card_04_view').addClass('d-none');
    $('#card_01_view').removeClass('d-none');
    $('#card_01_view').addClass('animate__animated animate__fadeIn');
});

$('#card_02').click(function(){
    regular_service_effect('#card_02');

    $('#card_01_view').addClass('d-none');
    $('#card_03_view').addClass('d-none');
    $('#card_04_view').addClass('d-none');
    $('#card_02_view').removeClass('d-none');
    $('#card_02_view').addClass('animate__animated animate__fadeIn');


});

$('#card_03').click(function(){
    regular_service_effect('#card_03');

    $('#card_01_view').addClass('d-none');
    $('#card_02_view').addClass('d-none');
    $('#card_04_view').addClass('d-none');
    $('#card_03_view').removeClass('d-none');
    $('#card_03_view').addClass('animate__animated animate__fadeIn');

});

$('#card_04').click(function(){
    regular_service_effect('#card_04');

    $('#card_01_view').addClass('d-none');
    $('#card_02_view').addClass('d-none');
    $('#card_03_view').addClass('d-none');
    $('#card_04_view').removeClass('d-none');
    $('#card_04_view').addClass('animate__animated animate__fadeIn');

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

let child_box = document.querySelectorAll('.child_box');
let child_box_sub = document.querySelectorAll('.child_box_sub');


// child_box_sub[1].classList.add("d-none");


for (let i = 0; i < child_box.length; i++) {
    child_box[i].addEventListener('click', function(){
        for (let n = 0; n < child_box_sub.length; n++) {
            child_box_sub[n].classList.add('d-none');
            child_box[n].classList.remove('bg-dark');
            child_box[n].classList.remove('text-light');
            // child_box[n].parentElement.classList.remove('d-none');
        }
        // this.parentElement.classList.add('d-none');
        child_box_sub[i].classList.remove('d-none');
        child_box[i].classList.add('bg-dark');
        child_box[i].classList.add('text-light');
    });
}
