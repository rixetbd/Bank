@extends('frontend.master')

@section('stylesheet')

<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="{{asset('frontend_assets')}}/dist/css/custom-scroll.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('frontend_assets')}}/dist/css/mainstyle.css">

<style>
    body{
        background: #96725859;
    }
    .row {
        width: 100%;
    }

    a {
        text-decoration: none;
    }

    #myTable tr td:nth-child(1),
    #myTable tr td:nth-child(3),
    #myTable tr td:nth-child(5) {
        min-width: 200px !important;
    }

    #myTable tr td:nth-child(2),
    #myTable tr td:nth-child(4),
    #myTable tr td:nth-child(6),
    #myTable tr td:nth-child(8),
    #myTable tr td:nth-child(9),
    #myTable tr td:nth-child(7) {
        min-width: 130px !important;
    }

    .box_shadow_table {
        padding: 15px;
        box-shadow: inset 3px 3px 13.5px 0 #eeeeee;
        border-radius: 5px;
    }

    .select2-container--default .select2-selection--single {
        border: 1px solid #aaa;
        border-radius: 25px;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        font-size: 14px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        right: 5px;
    }

    #myTable_filter,
    #myTable_length {
        display: none !important;
    }

    /* .dataTables_info,
        .dataTables_paginate {
            display: none;
        } */

    .city_Name a.visible {
        display: none !important;
    }

    @media only screen and (max-width: 600px) {

        #myTable_length,
        #myTable_filter {
            display: none !important;
        }
    }

    #industry_Name_display,
    #city_name_display {
        display: inline-block;
    }

    #industry_Name_display .new_item,
    #city_name_display .new_item {
        text-align: justify;
        /* background: rgb(191, 153, 114);
        background: linear-gradient(158deg, rgba(191, 153, 114, 1) 35%, rgba(111, 179, 138, 1) 100%); */
        color: #000;
        background-color: #fff !important;
        padding: 8px 10px 8px 10px;
        margin: 2px 10px 2px 0;
        width: 170px;
        border: none;
        border-radius: 3px;
        line-height: 20px;
        /* box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1); */
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.048);
        /* transition: 1s ease-in; */
    }

    #industry_Name_display .new_item {background-color: #fff !important;}
    /* #city_name_display .new_item{background-color: #efe6e0 !important;} */
    #city_name_display .new_item{background-color: #fff !important;}

    #city_name_display .new_item:hover,
    #industry_Name_display .new_item:hover {
        /* background: rgb(191,153,114);
        background: linear-gradient(254deg, rgba(191,153,114,1) 35%, rgba(111,179,138,1) 100%); */
        /* background: rgb(218, 172, 144); */
        background: #f7f0ebba !important;
        /* background: #85400fba !important; */
        /* background: radial-gradient(circle, rgba(218, 172, 144, 1) 0%, rgba(111, 179, 138, 1) 100%); */
    }

    #city_name_display .new_item_close,
    #industry_Name_display .new_item_close {
        color: black;
        float: right;
        /* padding-right: 10px; */
    }
    .ui.fluid.dropdown{
        /* background: #9672589e; */
        background: #fff;
        border: none;
    }
    .ui.fluid.dropdown .menu {
        /* background: #967258; */
        /* color: #fff; */
        color: #000;
    }
    /* .ui.fluid.dropdown .menu .item{color: #fff} */
    .ui.fluid.dropdown .default.text,
    .ui.fluid.dropdown .text{
        /* color: #fff; */
        color: #000;
    }
    #Filterreset{
        font-size: 18px;
        margin-right: 15px;
        width: 180px;
        background-color: #967258;
        color: #fff !important;
        border-radius: 12px !important;
    }

    #myTableSimple th{
        background-color: #dacdc4;
        border-right: 1px solid #7a5840;
    }
    #myTableSimple th:nth-last-child(){
        border: none;
    }

</style>
@endsection

@section('container')
<section class="container" style="background-color: #f7f0ebba;padding-bottom:50px;">
    <div class="col-12 row justify-content-between align-items-end">
        <div class="col-xs-12 col-sm-12 col-md-3 mt-3">
            <h4>Search Specific Leads</h4>
            <div class="col-12 search_div" id="country_Name_Box">
                <label for="" class="w-100">Country Name </label>
                {{-- <i class="fa-solid fa-angle-down CONCON1"></i> --}}
                <div class="ui fluid search selection dropdown" id="country_Name">
                    <input type="hidden" name="country" id="country_Name_Input">
                    <i class="dropdown icon"></i>
                    <div class="default text">Select Country</div>
                    <div class="menu">
                        @foreach ($all_countries as $country)
                        <div class="item" data-value="{{$country->id}}"><i
                                class="{{Str::lower($country->iso2)}} flag"></i>{{$country->name}}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-9">
            <button class="btn btn_city text-white float-end" id="Filterreset">RESET ALL</button>
        </div>
    </div>

    <div class="col-12 row" style="padding-bottom:15px;border-bottom:1px solid #fff">
        <div class="col-xs-12 col-sm-12 col-md-3" id="NullData">
            <div class="col-12 search_div" id="">
                <label for="" class="w-100">City Name</label>{{-- <i class="fa-solid fa-angle-down CONCON1"></i> --}}
                <select name="states" class="ui fluid search dropdown city_Name" id="city_Name2">
                    <option value="">All Cities</option>
                    @foreach ($all_city as $city)
                    <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-9 mt-3" id="city_name_display">
            <label for="" class="w-100" style="min-height: 24px;">&nbsp;</label>
        </div>
    </div>

    <div class="col-12 row" style="padding-bottom: 15px;border-bottom:1px solid #fff">
        <div class="col-xs-12 col-sm-12 col-md-3" id="NullData">
            <div class="col-12 search_div" id="">
                <label for="" class="w-100">Industry Name</label>
                <select name="states" class="ui fluid search dropdown city_Name" id="industry_Name">
                    <option value="">All Industry</option>
                    @foreach ($all_industry as $industry)
                        <option value="{{$industry->id}}">{{$industry->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-9 mt-3" id="industry_Name_display">
            <label for="" class="w-100" style="min-height: 24px;">&nbsp;</label>
        </div>
    </div>



    <div class="row my-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <label class="btn btn_city" id="table_Name">Person Name <input type="checkbox" disabled checked
                    id="table_Name_IN"></label>
            <label class="btn btn_city" id="table_Title">Job Title <input type="checkbox" disabled checked
                    id="table_Title_IN"></label>
            <label class="btn btn_city" id="table_Company">Company Name <input type="checkbox" disabled checked
                    id="table_Company_IN"></label>
            <label class="btn btn_city" id="table_City">City <input type="checkbox" disabled checked
                    id="table_City_IN"></label>
        </div>
        <div class="col-md-12">
            <label class="btn btn_city" id="table_Email">Email <input type="checkbox" checked
                    id="table_Email_IN"></label>
            <label class="btn btn_city" id="table_Phone">Phone <input type="checkbox" checked
                    id="table_Phone_IN"></label>
            <label class="btn btn_city" id="table_Company_Size">Company Size <input type="checkbox" checked
                    id="table_Company_Size_IN"></label>
            <label class="btn btn_city" id="table_Revenue">Revenue <input type="checkbox" checked
                    id="table_Revenue_IN"></label>
            <label class="btn btn_city" id="table_Zip_code">Zip Code <input type="checkbox" checked
                    id="table_Zip_code_IN"></label>
            <label class="btn btn_city" id="table_URL">Website <input type="checkbox" checked id="table_URL_IN"></label>
            <label class="btn btn_city" id="table_refresh">Default <i class="fas fa-redo-alt"></i></label>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 mt-4" style="overflow-x:auto;">
            <table class="table table-responsive" id="myTableSimple">
                <thead>
                    <th>Person Name</th>
                    <th>Job Title</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Company Name</th>
                    <th>Company Size</th>
                    <th>Revenue</th>
                    <th>City</th>
                    <th>Zip Code</th>
                    <th>Website</th>
                </thead>
                <tbody id="lead_data">
                    @forelse ($lead_data as $key=> $lead)
                    <tr>
                        <td>{{$lead->person_name}}</td>
                        <td>{{$lead->title}}</td>
                        <td>{{Str::substr($lead->email, 0, 3)."****@*****".Str::substr($lead->email, -5)}}</td>
                        <td>{{Str::substr($lead->phone, -4)."****"}}</td>
                        <td>{{ Str::limit($lead->company_name, 20)}}</td>
                        <td>{{$lead->company_size}}</td>
                        <td>{{$lead->revenue}}</td>
                        <td>{{$lead->city}}</td>
                        <td>{{$lead->zip_code}}</td>
                        <td>{{Str::substr($lead->website, 0, 10)."***.".Str::substr($lead->website, -3) }}</td>
                        @empty
                    <tr>
                        <td colspan="12" class="text-center">Not Found Any Data.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="custom_paginate">
        <div class="row">
            <div class="col-sm-12 col-md-6">{{ $lead_data->links() }}</div>
        </div>
    </div>
    </div>
</section>


@endsection

@section('footer_script')

<script src="{{asset('frontend_assets')}}/dist/js/table-filter.js"></script>
<script>
    $('#country_Name').dropdown();
    $('#city_Name').dropdown();
    $('#city_Name2').dropdown();
    $('#industry_Name').dropdown();

    // $(document).ready(function () {
    //     $('#myTable').DataTable();
    // });

</script>


<script>
    $('#country_Name').change(function () {
        $('.custom_paginate').html(" ");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $country = $('#country_Name_Input').val();
        // console.log($country);
        $.ajax({
            type: 'POST',
            url: '/getcities',
            data: {
                'country': $country
            },
            success: function (data) {
                // console.log(data.cities);
                $('#city_Name').html(data.cities);
                $('#lead_data').html(data.lead_datasearch);
            }
        });
    })

</script>

<script>
    // localStorage.clear();

    const cities = [];

    $('#city_Name2').change(function () {

        cities.push($('#city_Name2 option:selected').text());
        // localStorage.setItem("cities", cities);

        $('#city_name_display').append($('<button class="new_item">').html($('#city_Name2 option:selected')
            .text() + '<span class="new_item_close"><i class="fas fa-times"></i></span>'));

        setTimeout(
            function () {
                $('#city_Name2').next($('.menu .active').addClass('d-none'));
        }, 500);

        $('#city_name_display .new_item').click(function () {
            // alert($(this).text());
            $(this).remove();
            let text = $(this).text();
            let citiesindex = cities.indexOf(text);
            if (citiesindex > -1) {
                cities.splice(citiesindex, 1); // 2nd parameter means remove one item only
            }
        });

        $('#lead_data').html(" ");

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $city_Name = cities;
        $country = $('#country_Name_Input').val();
        $.ajax({
            type: 'POST',
            url: '/getcitiesdata',
            data: {
                'city_Name': $city_Name,
                'country': $country,
            },
            success: function (data) {
                $('#lead_data').html(data.lead_datasearch);
            }
        });
    });

    // $('#city_Name').change(function () {
    //     $('#lead_data').html(" ");
    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });
    //     $city_Name = $('#city_Name').val();
    //     $country = $('#country_Name_Input').val();
    //     $.ajax({
    //         type: 'POST',
    //         url: '/getcitiesdata',
    //         data: {
    //             'city_Name': $city_Name,
    //             'country': $country,
    //         },
    //         success: function (data) {
    //             $('#lead_data').html(data.lead_datasearch);
    //         }
    //     });
    // })

</script>

<script>
    $('#industry_Name').change(function () {

        $country = $('#country_Name_Input').val();
        $city_Name = $('#city_Name').val();
        $industry_Name = $('#industry_Name').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: '/getbyindustries',
            data: {
                'country': $country,
                'city_Name': $city_Name,
                'industry_Name': $industry_Name,
            },
            success: function (data) {
                // console.log(data.cities);
                // $('#city_Name').html(data.cities);
            }
        });
    })

</script>



<script>

const industries = [];

    $('#industry_Name').change(function () {

        industries.push($('#industry_Name option:selected').text());
    // localStorage.setItem("cities", cities);

    $('#industry_Name_display').append($('<button class="new_item">').html($('#industry_Name option:selected')
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
        $('#industry_Name').next($('.menu .active').addClass('d-none'));
    }, 500);


// $('#lead_data').html(" ");

// $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });

// $city_Name = cities;
// $country = $('#country_Name_Input').val();
// $.ajax({
//     type: 'POST',
//     url: '/getcitiesdata',
//     data: {
//         'city_Name': $city_Name,
//         'country': $country,
//     },
//     success: function (data) {
//         $('#lead_data').html(data.lead_datasearch);
//     }
// });
});
</script>

<script>
    $('#Filterreset').click(function(){

    $('#country_Name').dropdown();


    });
</script>


@endsection
