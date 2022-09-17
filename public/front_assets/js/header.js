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

    $('#city_Name').next($('.text').eq(2).html('Search Cities'));
    $('#industry_Name').next($('.text').eq(3).html('Search Industry'));

    cities = [];
    industries = [];
    $('#city_name_display').html('<label for="" class="w-100" style="min-height: 24px;">&nbsp;</label>');
    $('#industry_Name_display').html('<label for="" class="w-100" style="min-height: 24px;">&nbsp;</label>');


    $country = $('#country_Name_Input').val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'POST',
        url: '/getcities',
        data: {
            'country': $country
        },
        success: function (data) {
            $('#city_Name').html(data.cities);
            $('#lead_data').html(data.lead_datasearch);
        }
    });

});

// Country Name Change Event || End

// City Name Change Event || Start
var cities = [];

$('#city_Name').change(function () {

    cities.push($('#city_Name option:selected').text());
    console.log(cities);

    $country = $('#country_Name_Input').val();

    // localStorage.setItem("cities", cities);

    $('#city_name_display').append($('<button class="new_item">').html($('#city_Name option:selected')
        .text() + '<span class="new_item_close"><i class="fas fa-times"></i></span>'));

    setTimeout(
        function () {
            // $('#city_Name').next($('.menu .active').addClass('d-none'));
        }, 500);

    $('#city_name_display .new_item').click(function () {
        // alert($(this).text());
        $(this).remove();
        let text = $(this).text();
        let citiesindex = cities.indexOf(text);
        if (citiesindex > -1) {
            cities.splice(citiesindex, 1); // 2nd parameter means remove one item only
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: '/getcitiesdata',
            data: {
                'city_Name': JSON.stringify(cities),
                'country': $country
            },
            success: function (data) {
                $('#lead_data').html(data.lead_datasearch);
            },
            // error: function (data) {
            //     alert("fail");
            // }
        });

        $('#city_Name').next($('.text').eq(2).html('Search cities'));

    });


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'POST',
        url: '/getcitiesdata',
        data: {
            'city_Name': JSON.stringify(cities),
            'country': $country
        },
        success: function (data) {
            if(data.lead_datasearch != ""){
                $('#lead_data').html(data.lead_datasearch);
            }else{
                $('#lead_data').html('<tr><td colspan="10" style="text-align:center;line-height:100px;">No More Collected leads</td></tr>');
            }

            $('.TableIDADD').attr('id', 'myTableSimple');
            $('#myTableSimple').DataTable();
            console.log(data.lead_datasearch);
            // console.log(data.lead_datasearch);
        },
        // error: function (data) {
        //     alert("fail");
        // }
    });

    $('#city_Name').next($('.text').eq(2).html('Search cities'));
});

// $('body').click(function () {

//     $('#city_Name').next($('.text').eq(1).html('Search cities'));
//     $('#industry_Name').next($('.text').eq(2).html('Search industry'));

// });

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
    });

    setTimeout(
        function () {
            // $('#industry_Name').next($('.menu .active').addClass('d-none'));
        }, 500);


    $('#lead_data').html(" ");

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $country = $('#country_Name_Input').val();
    $.ajax({
        type: 'POST',
        url: '/getdataindustries',
        data: {
            'country': $country,
            'city_Name': JSON.stringify(cities),
            'industry_Name': JSON.stringify(industries),
        },
        success: function (data) {
            $('#lead_data').html(data.lead_datasearch);
            console.log(data.lead_datasearch);
        }
    });
});

// Industry Name Change Event || End



























// Filter Reset Change Event || Start

$('#Filterreset').click(function () {
    $('#country_Name').next($('.text').eq(1).html('Search Country'));
    $('#city_Name').next($('.text').eq(2).html('Search Cities'));
    $('#industry_Name').next($('.text').eq(3).html('Search Industry'));

    $('#country_Name').val('');
    cities = [];
    industries = [];
    $('#city_name_display').html('<label for="" class="w-100" style="min-height: 24px;">&nbsp;</label>');
    $('#industry_Name_display').html('<label for="" class="w-100" style="min-height: 24px;">&nbsp;</label>');

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
