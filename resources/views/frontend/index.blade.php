@extends('frontend.master')

@section('stylesheet')

<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="{{asset('frontend_assets')}}/dist/css/custom-scroll.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('frontend_assets')}}/dist/css/mainstyle.css">

<style>
    body {
        /* background: #96725859; */
        background: #cbdaec;
    }


    a {
        text-decoration: none;
    }

    tbody,
    td,
    tfoot,
    th,
    thead,
    tr {
        border-color: inherit;
        border-style: solid;
        border-width: 0;
        font-size: 14;
    }

    .box_shadow_table {
        padding: 15px;
        box-shadow: inset 3px 3px 13.5px 0 #eeeeee;
        border-radius: 5px;
    }

    #myTable_filter,
    #myTable_length {
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
        color: #000;
        background-color: #fff !important;
        padding: 8px 0 0px 10px;
        margin: 2px 10px 2px 0;
        width: 170px;
        border: none;
        border-radius: 3px;
        line-height: 20px;
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.048);
    }


    #city_name_display .new_item:hover,
    #industry_Name_display .new_item:hover {
        background: #ff634783 !important;
    }

    #city_name_display .new_item_close,
    #industry_Name_display .new_item_close {
        color: #000;
        float: right;
        /* padding-right: 10px; */
        background: #ffffff;
        border-left: 1px solid #ababab61 !important;
        margin-top: -8px;
        width: 36px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 0 3px 3px 0;
        /* border-left: 1px solid #a1a1a1; */
    }

    ,

    #city_name_display .new_item_close:hover,
    #industry_Name_display .new_item_close:hover {
        background-color: tomato;
        color: #fff
    }


    .ui.fluid.dropdown {
        /* background: #9672589e; */
        background: #fff;
        border: none;
    }

    .ui.fluid.dropdown .menu {
        color: #000;
    }

    /* .ui.fluid.dropdown .menu .item{color: #fff} */
    .ui.fluid.dropdown .default.text,
    .ui.fluid.dropdown .text {
        /* color: #fff; */
        color: #000;
    }

    #Filterreset {
        background: #5928e5;
        -webkit-box-shadow: inset 3px 3px 23.5px -17px #000000;
        -moz-box-shadow: inset 3px 3px 23.5px -17px #000000;
        box-shadow: inset 3px 3px 23.5px -17px #000000;
        border: 5px solid #511fd8;
        font-weight: 600 !important;
        /* border-radius: 10% !important; */
    }
    #Filterreset {
        font-size: 16px;
        margin-right: 15px;
        width: 180px;
        /* background-color: #6eb406; */
        color: #fff !important;
        /* border-radius: 5px !important; */
        line-height: 25px;
        text-align: center;
    }

    #myTableSimple th:last-child() {
        border-right: none
    }

    #myTableSimple th {
        background-color: #af3dc74f !important;
        /* background-color: #dacdc4; */
        /* color: #5928e5; */
        color: #000;
        border-right: 2px solid #cbdaec;
        font-size: 14px;
        font-weight: 400;
    }

    #myTableSimple thead {
        border-bottom: #fff
    }

    #myTableSimple th:nth-last-child() {
        border: none;
    }

    .custom_paginate .pagination {
        overflow: hidden;
    }

    .pagination .page-item.active .page-link {
        background-color: #5928e5 !important;
        border: none
    }

</style>
@endsection

@extends('frontend.header')

{{--

Pre Color - #f7f0ebba
New Color - #ffd9d9

background-color: #ffd9d9

--}}
@section('container')

<div class="w-100 text-center" style="min-height: 400px;background: #5928e5;">
    <h1 style="text-transform:uppercase;font-size:200px;color:#fff;line-height: 110px;padding-top: 100px;">
        Lead<br><span style="font-size:70px;">Generation</span></h1>

        <div class="row float-end">
            <div class="" style="height:25px;width:25px;background:#bbe4e5;"></div>
            <div class="" style="height:25px;width:25px;background:#aed8c7;"></div>
            <div class="" style="height:25px;width:25px;background:#7acba5;"></div>
            <div class="" style="height:25px;width:25px;background:#cbdaec;"></div>
            <div class="" style="height:25px;width:25px;background:#66d2d5;"></div>
            <div class="" style="height:25px;width:25px;background:#d6d0f0;"></div>
            <div class="" style="height:25px;width:25px;background:#cecece;"></div>
            <div class="" style="height:25px;width:25px;background:#e6e1b1;"></div>
            <div class="" style="height:25px;width:25px;background:#feefa9;"></div>
            <div class="" style="height:25px;width:25px;background:#fed297;"></div>
            <div class="" style="height:25px;width:25px;background:#fd9a9b;"></div>
            <div class="" style="height:25px;width:25px;background:#fd6769;"></div>
            <div class="" style="height:25px;width:25px;background:#fffea2;"></div>
            <div class="" style="height:25px;width:25px;background:#e7e8d2;"></div>
        </div>
</div>



<section class="container" style="padding:100px 0 50px 0;">
    <div style="padding-left:15px;" class="pb-3">
        <div class="row justify-content-between align-items-end pt-4">
            <div class="col-xs-12 col-sm-12 col-md-3">
                <h4 style="font-size:25px;text-transform:uppercase;">Search Specific Leads</h4>
                <div class="col-12 search_div" id="country_Name_Box">
                    <label for="" class="w-100" style="text-transform:uppercase;">Country Name </label>
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
                    <label for="" class="w-100" style="text-transform:uppercase;">City Name</label>
                    <select name="states" class="ui fluid search dropdown city_Name" id="city_Name">
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
                    <label for="" class="w-100" style="text-transform:uppercase;">Industry Name</label>
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


        <div style="margin:25px 0;">
            <p style="line-height: 0.5715em;">* Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci,
                atque?</p>
            <p style="line-height: 0.5715em;">* Lorem ipsum dolor sit amet consectetur adipisicingi, atque?</p>
        </div>


        <div class="row my-3">
        <div class="col-xs-12 col-sm-12 col-md-12 filter_btn">
            <label class="btn btn_city" id="table_Name">Person Name <input type="checkbox" disabled checked
                    id="table_Name_IN"></label>
                    <label class="btn btn_city" id="table_Title">Job Title <input type="checkbox" disabled checked
                    id="table_Title_IN"></label>
                    <label class="btn btn_city" id="table_Company">Company Name <input type="checkbox" disabled checked
                        id="table_Company_IN"></label>
            <label class="btn btn_city" id="table_City">City <input type="checkbox" disabled checked
                    id="table_City_IN"></label>
                </div>
                <div class="col-md-12 filter_btn">
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
        </div>

    </div>
        <div class="col-lg-12 col-md-12 col-sm-12" style="overflow-x:auto;">
            <table class="table table-responsive TableIDADD" id="">
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
    $('#industry_Name').dropdown();

    $(document).ready(function () {
        $('#myTableSimple').DataTable();
    });

</script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#country_Name').change(function () {
        $('.custom_paginate').html(" ");
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });
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

    var cities = [];

    $('#city_Name').change(function () {

        cities.push($('#city_Name option:selected').text());
        console.log(cities);

        // localStorage.setItem("cities", cities);
        $('#city_name_display').append($('<button class="new_item">').html($('#city_Name option:selected')
            .text() + '<span class="new_item_close"><i class="fas fa-times"></i></span>'));

        setTimeout(
            function () {
                $('#city_Name').next($('.menu .active').addClass('d-none'));
            }, 500);

        $('#city_name_display .new_item').click(function () {
            // alert($(this).text());
            $(this).remove();
            let text = $(this).text();
            let citiesindex = cities.indexOf(text);
            if (citiesindex > -1) {
                cities.splice(citiesindex, 1); // 2nd parameter means remove one item only
            }

            $.ajax({
            type: 'POST',
            url: '/getcitiesdata',
            data: {
                'city_Name': JSON.stringify(cities),
                // 'country': $country
            },
            success: function (data) {
                $('#lead_data').html(data.lead_datasearch);
            },
            error: function (data) {
                alert("fail");
            }
        });

        });


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $country = $('#country_Name_Input').val();
        $.ajax({
            type: 'POST',
            url: '/getcitiesdata',
            data: {
                'city_Name': JSON.stringify(cities),
                'country': $country
            },
            success: function (data) {
                $('#lead_data').html(" ");
                $('#lead_data').html(data.lead_datasearch);
                $('.TableIDADD').attr('id', 'myTableSimple');
                $('#myTableSimple').DataTable();
                console.log(data.lead_datasearch);
                // console.log(data.lead_datasearch);
            },
            error: function (data) {
                alert("fail");
            }
        });
    });

</script>

{{-- <script>
    var industries = [];

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

</script> --}}



<script>
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
                $('#industry_Name').next($('.menu .active').addClass('d-none'));
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

</script>

<script>
    $('#Filterreset').click(function () {
        $('#country_Name').dropdown();
    });
</script>


@endsection
