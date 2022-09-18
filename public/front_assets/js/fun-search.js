function SearchSystem(){

    $country = $('#country_Name_Input').val();

    if ($country != "" && cities != "" && industries != "") {
        SearchAll();
    }else if ($country != "" && cities == "" && industries == "") {
        SearchCountryOnly();
    }else if ($country == "" && cities != "" && industries == "") {
        SearchCityOnly();
    }else if ($country == "" && cities == "" && industries != "") {
        SearchIndustryOnly();
    }else if ($country != "" && cities != "" && industries == "") {
        SearchCountryAndCity();
    }else if ($country != "" && cities == "" && industries != "") {
        SearchCountryAndIndustry();
    }else if ($country == "" && cities != "" && industries != "") {
        SearchCityAndIndustry();
    }else{

    }
};

function SearchAll(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: '/searchall',
        data: {
            'country': $country,
            'city_Name': JSON.stringify(cities),
            'industry_Name': JSON.stringify(industries),
        },
        success: function (data) {
            $('#lead_data').html(data.lead_datasearch);
        }
    });
};

function SearchCountryOnly(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: '/searchcountryonly',
        data: {
            'country': $country,
        },
        success: function (data) {
            $('#city_Name').html(data.cities);
            $('#lead_data').html(data.lead_datasearch);
        }
    });
};

function SearchCityOnly(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: '/searchcityonly',
        data: {
            'city_Name': JSON.stringify(cities),
        },
        success: function (data) {
            $('#lead_data').html(data.lead_datasearch);

        }
    });
};

function SearchIndustryOnly(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: '/searchindustryonly',
        data: {
            'industry_Name': JSON.stringify(industries),
        },
        success: function (data) {
            $('#lead_data').html(data.lead_datasearch);
        }
    });
};

// Country & City
function SearchCountryAndCity(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: '/searchcountryandcity',
        data: {
            'country': $country,
            'city_Name': JSON.stringify(cities),
        },
        success: function (data) {
            $('#lead_data').html(data.lead_datasearch);
        }
    });
};

// Country & Industry
function SearchCountryAndIndustry(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: '/searchcountryandindustry',
        data: {
            'country': $country,
            'industry_Name': JSON.stringify(industries),
        },
        success: function (data) {
            $('#lead_data').html(data.lead_datasearch);
        }
    });
};

function SearchCityAndIndustry(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: '/searchcityandindustry',
        data: {
            'city_Name': JSON.stringify(cities),
            'industry_Name': JSON.stringify(industries),
        },
        success: function (data) {
            $('#lead_data').html(data.lead_datasearch);
        }
    });
};
