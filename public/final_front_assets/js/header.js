$('#country_Name50').dropdown();
$('#myTableSimple').DataTable();
$('#country_Name').dropdown();
$('#city_Name').dropdown();
$('#industry_Name').dropdown();

// $('#country_Name50').change(function () {
//     $('#DataTableMain').removeClass('d-none');
//     $('#DataTableMain').addClass('animate__fadeInUp');
//     $('#contact_main').addClass('d-none');
// });


// Header Country Name Change Event || Start
$('#country_Name50').change(function () {
    window.location.href = "#table_Area";
    $('#table_Area').removeClass('d-none');
    $('#table_Area').addClass('animate__animated animate__fadeIn animate__slow');

    $country = $('#country_Name_Input50').val();
    // alert($country);
    // $('#country_Name').dropdown({'set selected': $country});

    // $('.custom_paginate').html(" ");
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // $country = $('#country_Name_Input').val();
    // console.log($country);
    $('#myTableSimple').DataTable().clear().draw();
    $.ajax({
        type: 'POST',
        url: '/getcities',
        data: {
            'country': $country
        },
        success: function (data) {
            $('#country_Name_Input').val($country);
            $('#country_Name .default.text').html(data.country_name);
            $('#country_Name .default.text').addClass('text-black');
            $('#city_Name').html(data.cities);
            $('#lead_data').html(data.lead_datasearch);
        }
    });
});
// Header Country Name Change Event || End


// Country Name Change Event || Start
$('#country_Name').change(function () {

    $('#city_Name').next($('.text').eq(2).html('SEARCH CITIES'));
    $('#industry_Name').next($('.text').eq(3).html('SEARCH INDUSTRY'));

    cities = [];
    industries = [];
    // $('#city_name_display').html('<label for="" class="w-100" style="min-height: 24px;">&nbsp;</label>');
    // $('#industry_Name_display').html('<label for="" class="w-100" style="min-height: 24px;">&nbsp;</label>');

    SearchSystem();

});

// Country Name Change Event || End

// City Name Change Event || Start
var cities = [];

$('#city_Name').change(function () {

    cities.push($('#city_Name option:selected').text());

    $('#city_name_display').append($('<button class="new_item">').html($('#city_Name option:selected')
        .text() + '<span class="new_item_close"><i class="fas fa-times"></i></span>'));

    $('#city_name_display .new_item').click(function () {
        // alert($(this).text());
        $(this).remove();
        let text = $(this).text();
        let citiesindex = cities.indexOf(text);
        if (citiesindex > -1) {
            cities.splice(citiesindex, 1); // 2nd parameter means remove one item only
        }

        SearchSystem();

        if (cities != "") {
            $('#city_Name').next($('.text').eq(2).html('SEARCH MORE CITIES'));
        }else{
            $('#city_Name').next($('.text').eq(2).html('SEARCH CITIES'));
        }

    });

    SearchSystem();

    $('#city_Name').next($('.text').eq(2).html('SEARCH MORE CITIES'));
});
// City Name Change Event || End


// Industry Name Change Event || Start

var industries = [];

$('#industry_Name').change(function () {

    industries.push($('#industry_Name option:selected').text());

    $('#industry_Name_display').append($('<button class="new_item">').html($(
            '#industry_Name option:selected')
        .text() + '<span class="new_item_close"><i class="fas fa-times"></i></span>'));

    $('#industry_Name_display .new_item').click(function () {
        // alert($(this).text());
        $(this).remove();
        let text = $(this).text();
        let citiesindex = industries.indexOf(text);
        if (citiesindex > -1) {
            industries.splice(citiesindex, 1); // 2nd parameter means remove one item only
        }

        SearchSystem();
    });

    $('#lead_data').html(" ");

    SearchSystem();
});

// Industry Name Change Event || End




























// Filter Reset Change Event || Start

$('#Filterreset').click(function () {
    $('#country_Name').next($('.text').eq(1).html('SELECT COUNTRY'));
    $('#city_Name').next($('.text').eq(2).html('SELECT City'));
    $('#industry_Name').next($('.text').eq(3).html('SELECT Industry'));

    $('#country_Name').val('');
    cities = [];
    industries = [];
    // $('#city_name_display').html('<label for="" class="w-100" style="min-height: 24px;">&nbsp;</label>');
    // $('#industry_Name_display').html('<label for="" class="w-100" style="min-height: 24px;">&nbsp;</label>');

    $.ajax({
        type: 'POST',
        url: '/getalldata',
        data: {
            country: 'all'
        },
        success: function (data) {
            $('#lead_data').html('');
            $('#lead_data').html(data.lead_datasearch);
        }
    });

});

// Filter Reset Change Event || End
