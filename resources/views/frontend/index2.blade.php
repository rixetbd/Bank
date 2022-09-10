@extends('frontend.master')

@section('stylesheet')

<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="{{asset('frontend_assets')}}/dist/css/custom-scroll.css">
<link rel="stylesheet" href="{{asset('frontend_assets')}}/dist/css/mainstyle.css">

<style>
    body {
        /* background: #96725859; */
        /* background: #cbdaec; */
        background: #bbcce1fa;
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

    #myTableSimple_filter,
    #myTableSimple_length {
        display: none !important;
    }

    @media only screen and (max-width: 600px) {

        #myTableSimple_length,
        #myTableSimple_filter {
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

    /* #Filterreset {
        background: #5928e5;
        -webkit-box-shadow: inset 3px 3px 23.5px -17px #000000;
        -moz-box-shadow: inset 3px 3px 23.5px -17px #000000;
        box-shadow: inset 3px 3px 23.5px -17px #000000;
        border: 5px solid #511fd8;
        font-weight: 600 !important;
        font-size: 16px;
        margin-right: 15px;
        width: 180px;
        color: #fff !important;
        line-height: 25px;
        text-align: center;
    } */

    #myTableSimple th:last-child() {
        border-right: none
    }

    #myTableSimple th {
        background-color: #5928e5 !important;
        /* background-color: #dacdc4; */
        /* color: #5928e5; */
        color: #fff;
        border-right: 2px solid #cbdaec;
        font-size: 14px;
        font-weight: 400;
    }

    #myTableSimple thead {
        border-bottom: #fff
    }

    /* #table_refresh{
        background-color: #5928e5 !important;
        color: #fff;
    } */

    .bg_theme {
        background-color: #5928e5 !important;
    }

    .bg_theme_tomato {
        background-color: #fd6769 !important;
    }


    #Filterreset,
    #table_refresh {
        color: #fff;
        /* border: 1px solid #ffffff; */
        border-radius: 5px !important;
        box-shadow: 0 3px 10px -1px #0000006b;
        text-align: center;
        letter-spacing: .8px;
        text-transform: uppercase;
    }

    /* #Filterreset{font-weight: 600 !important;font-size: 16px;line-height: 30px;} */
    #Filterreset {
        width: 200px;
        height: 35px;
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

    table.dataTable thead th,
    table.dataTable thead td {
        padding: 8px !important;
    }

    table.dataTable thead>tr>th.sorting:before,
    table.dataTable thead>tr>th.sorting_asc:before,
    table.dataTable thead>tr>th.sorting_desc:before,
    table.dataTable thead>tr>th.sorting_asc_disabled:before,
    table.dataTable thead>tr>th.sorting_desc_disabled:before,
    table.dataTable thead>tr>td.sorting:before,
    table.dataTable thead>tr>td.sorting_asc:before,
    table.dataTable thead>tr>td.sorting_desc:before,
    table.dataTable thead>tr>td.sorting_asc_disabled:before,
    table.dataTable thead>tr>td.sorting_desc_disabled:before {
        bottom: 50%;
        content: "" !important;
    }

    table.dataTable thead>tr>th.sorting:after,
    table.dataTable thead>tr>th.sorting_asc:after,
    table.dataTable thead>tr>th.sorting_desc:after,
    table.dataTable thead>tr>th.sorting_asc_disabled:after,
    table.dataTable thead>tr>th.sorting_desc_disabled:after,
    table.dataTable thead>tr>td.sorting:after,
    table.dataTable thead>tr>td.sorting_asc:after,
    table.dataTable thead>tr>td.sorting_desc:after,
    table.dataTable thead>tr>td.sorting_asc_disabled:after,
    table.dataTable thead>tr>td.sorting_desc_disabled:after {
        top: 50%;
        content: "" !important;
    }

    input[type="checkbox"]:disabled {
        background: #ff2a2a !important;
    }

    .ui.popup {
        /* color: #fff; */
        /* background-color: #5928e5 !important; */
        color: #000;
        background-color: #fdef25 !important;
    }

    .ui.popup::before {
        background-color: #5928e5 !important;
    }

    .Sub_box_One {
        height: 200px;
        transform: skewX(340deg);
        cursor: pointer;
        background-size: cover;
        background-image: url({{asset('frontend_assets/images/businessman-hand-holding-creative-light-bulb.jpg')}});
    }

    .Sub_box_two {
        height: 200px;
        transform: skewX(340deg);
        cursor: pointer;
        background-size: cover;
        background-image: url({{asset('frontend_assets/images/contact_us.jpg')}});
    }

    .Sub_box_One h4,
    .Sub_box_two h4 {
        font-size: 50px;
        color: #fff;
    }

    .Sub_box_One:hover h4,
    .Sub_box_two:hover h4 {
        font-size: 53px;
        transition: .05s ease;
    }

    @media (max-width:400px) {

        .Sub_box_One,
        .Sub_box_two {
            transform: none;
        }
    }

    p {
        font-size: 15px;
        letter-spacing: .5px;
        line-height: 25px;
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

<div class="w-100 d-flex align-items-center" style="min-height: 60vh;background: #5928e5;">
    <div class="col-12 text-center">
        <h1
            style="text-transform:uppercase;font-size:200px;color:#fff;line-height: 65px;padding-top: 100px;filter: drop-shadow(8px 8px 4px #00000046);">
            Lead<br><span style="font-size:70px;">Generation</span></h1>
    </div>
</div>

<div class="w-100" style="background: #ffede3;">
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

    <div class="container my-5">

        <div class="row">
        <div class="col-sm-12 col-md-6 d-flex justify-content-center align-items-center bg-danger Sub_box_One"
            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <h4>Click Here</h4>
        </div>
        <a class="col-sm-12 col-md-6 d-flex justify-content-center align-items-center bg-success Sub_box_two"
            href="{{route('frontend.contact.index')}}">
            <h4>Contact Us</h4>
        </a>
    </div>

</div>
</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background-color: #bbcce1fa;">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">SEARCH SPECIFIC LEADS</h5>
                <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="background-color: #bbcce1fa;">
                <div class="container">
                    <div class="row justify-content-between align-items-end pt-4">
                        <div class="col-xs-12 col-sm-12 col-md-3">
                            <h4 style="font-size:25px;text-transform:uppercase;">Search Specific Leads</h4>
                            <div class="col-12 search_div" id="country_Name_Box">
                                <input type="hidden" id="country_Name_catch">
                                <label for="" class="w-100" style="text-transform:uppercase;">Country Name </label>
                                {{-- <i class="fa-solid fa-angle-down CONCON1"></i> --}}
                                <div class="ui fluid search selection dropdown" id="country_Name">
                                    <input type="hidden" name="country" id="country_Name_Input">
                                    <i class="dropdown icon"></i>
                                    <div class="default text">Search Country</div>
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
                            <button class="btn btn_city text-white float-end bg_theme_tomato" id="Filterreset">
                                <div class="ui toltip" data-content="You can reset filter" data-position="top center">
                                    RESET ALL
                                </div>
                            </button>
                        </div>
                    </div>

                    <div class="col-12 row" style="padding-bottom:15px;border-bottom:1px solid #fff">
                        <div class="col-xs-12 col-sm-12 col-md-3" id="NullData">
                            <div class="col-12 search_div" id="">
                                <label for="" class="w-100" style="text-transform:uppercase;">City Name</label>
                                <div class="ui toltip" data-content="You can choose multiple cities as per your needs"
                                    data-position="left center">
                                    <select name="states" class="ui fluid search dropdown city_Name" id="city_Name">
                                        <option value="">All Cities</option>
                                        @foreach ($all_city as $city)
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
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
                                <div class="ui toltip" data-content="You can choose multiple industry"
                                    data-position="left center">
                                    <select name="states" class="ui fluid search dropdown city_Name" id="industry_Name">
                                        <option value="">All Industry</option>
                                        @foreach ($all_industry as $industry)
                                        <option value="{{$industry->id}}">{{$industry->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 mt-3" id="industry_Name_display">
                            <label for="" class="w-100" style="min-height: 24px;">&nbsp;</label>
                        </div>
                    </div>

                    <div class="row my-3 filter_btn">
                        {{-- <div class="col-4"><label class="btn btn_city w-100" id="table_refresh">All Tabs Selected <i
                            class="fas fa-redo-alt ms-3"></i></label></div> --}}
                        <div class="col-2"> <label class="btn btn_city w-100" id="table_Name">Person Name <input
                                    type="checkbox" disabled checked id="table_Name_IN"></label></div>
                        <div class="col-2"><label class="btn btn_city w-100" id="table_Title">Job Title <input
                                    type="checkbox" disabled checked id="table_Title_IN"></label></div>
                        <div class="col-2"><label class="btn btn_city w-100" id="table_Company">Company Name <input
                                    type="checkbox" disabled checked id="table_Company_IN"></label></div>
                        <div class="col-2"><label class="btn btn_city w-100" id="table_City">City <input type="checkbox"
                                    disabled checked id="table_City_IN"></label></div>
                        <div class="col-2"><label class="btn btn_city w-100" id="">Industry <input type="checkbox"
                                    disabled checked id="table_City_IN"></label></div>
                        <div class="col-2">
                            <div class="ui toltip" data-content="Selected Tabs Action" data-position="top center">
                                <label class="btn btn_city w-100 bg_theme" id="table_refresh">All Tabs Selected</label>
                            </div>
                        </div>

                        {{-- <div class="col-2"><label class="btn btn_city w-100" id="">Text <i
                                    class="fas fa-redo-alt"></i></label></div> --}}
                        {{-- <div class="col-xs-12 col-sm-12 col-md-12 filter_btn"> --}}
                    </div>

                    <div class="row filter_btn">
                        <div class="col-2">
                            <label class="btn btn_city w-100" id="table_Email">Email <input type="checkbox" checked
                                    id="table_Email_IN"></label>
                        </div>
                        <div class="col-2">
                            <label class="btn btn_city w-100" id="table_Phone">Phone <input type="checkbox" checked
                                    id="table_Phone_IN"></label>
                        </div>
                        <div class="col-2">
                            <label class="btn btn_city w-100" id="table_Company_Size">Company Size <input
                                    type="checkbox" checked id="table_Company_Size_IN"></label>
                        </div>
                        <div class="col-2">
                            <label class="btn btn_city w-100" id="table_Revenue">Revenue <input type="checkbox" checked
                                    id="table_Revenue_IN"></label>
                        </div>
                        <div class="col-2">
                            <label class="btn btn_city w-100" id="table_Zip_code">Zip Code <input type="checkbox"
                                    checked id="table_Zip_code_IN"></label>
                        </div>
                        <div class="col-2">
                            <label class="btn btn_city w-100" id="table_URL">Website <input type="checkbox" checked
                                    id="table_URL_IN"></label>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 mt-3" style="overflow-x:auto;">
                        <table class="table table-responsive cell-border TableIDADD" id="myTableSimple">
                            <thead>
                                {{-- <th>Industry</th> --}}
                                <th>Person Name</th>
                                <th style="">Job Title</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th style="min-width: 170px;">Company Name</th>
                                <th style="width: 105px;min-width: 105px;">Company Size</th>
                                <th>Revenue</th>
                                <th style="min-width: 100px;">City</th>
                                <th style="min-width: 72px;">Zip Code</th>
                                <th>Website</th>
                            </thead>
                            <tbody id="lead_data">
                                @forelse ($lead_data as $key=> $lead)
                                <tr>
                                    {{-- <td>{{$lead->industry}}</td> --}}
                                    <td>{{$lead->person_name}}</td>
                                    <td>{{($lead->title = "Managing Partner"?"Partner": $lead->title)}}</td>
                                    <td>{{Str::substr($lead->email, 0, 3)."****@*****".Str::substr($lead->email, -5)}}
                                    </td>
                                    <td>{{Str::substr($lead->phone, -4)."****"}}</td>
                                    <td>{{ Str::limit($lead->company_name, 15)}}</td>
                                    <td>{{$lead->company_size}}</td>
                                    <td>{{$lead->revenue}}</td>
                                    <td>{{$lead->city}}</td>
                                    <td>{{$lead->zip_code}}</td>
                                    <td>{{Str::substr($lead->website, 0, 10)."***.".Str::substr($lead->website, -3) }}
                                    </td>
                                    @empty
                                <tr>
                                    <td colspan="12" class="text-center">Not Found Any Data.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>




                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a type="button" class="btn btn-primary" href="{{route('frontend.contact.index')}}">Contact Us</a>
            </div>
        </div>
    </div>
</div>

<!--
<section class="container" style="padding:50px 0 50px 0;">
    <div class="pb-3">
        <div class="row justify-content-between align-items-end pt-4">
            <div class="col-xs-12 col-sm-12 col-md-3">
                <h4 style="font-size:25px;text-transform:uppercase;">Search Specific Leads</h4>
                <div class="col-12 search_div" id="country_Name_Box">
                    <input type="hidden" id="country_Name_catch">
                    <label for="" class="w-100" style="text-transform:uppercase;">Country Name </label>
                    {{-- <i class="fa-solid fa-angle-down CONCON1"></i> --}}
                    <div class="ui fluid search selection dropdown" id="country_Name">
                        <input type="hidden" name="country" id="country_Name_Input">
                        <i class="dropdown icon"></i>
                        <div class="default text">Search Country</div>
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
                <button class="btn btn_city text-white float-end bg_theme_tomato" id="Filterreset">
                    <div class="ui toltip" data-content="You can reset filter" data-position="top center">
                        RESET ALL
                    </div>
                </button>
            </div>
        </div>

        <div class="col-12 row" style="padding-bottom:15px;border-bottom:1px solid #fff">
            <div class="col-xs-12 col-sm-12 col-md-3" id="NullData">
                <div class="col-12 search_div" id="">
                    <label for="" class="w-100" style="text-transform:uppercase;">City Name</label>
                    <div class="ui toltip" data-content="You can choose multiple cities as per your needs"
                        data-position="left center">
                        <select name="states" class="ui fluid search dropdown city_Name" id="city_Name">
                            <option value="">All Cities</option>
                            @foreach ($all_city as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                        </select>
                    </div>
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
                    <div class="ui toltip" data-content="You can choose multiple industry" data-position="left center">
                        <select name="states" class="ui fluid search dropdown city_Name" id="industry_Name">
                            <option value="">All Industry</option>
                            @foreach ($all_industry as $industry)
                            <option value="{{$industry->id}}">{{$industry->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 mt-3" id="industry_Name_display">
                <label for="" class="w-100" style="min-height: 24px;">&nbsp;</label>
            </div>
        </div>
        {{--

        <div style="margin:25px 0;">
            <p style="line-height: 0.5715em;">* Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci,
                atque?</p>
            <p style="line-height: 0.5715em;">* Lorem ipsum dolor sit amet consectetur adipisicingi, atque?</p>
        </div> --}}


        {{-- Click Here to Select All (Default) --}}

        <div class="row my-3 filter_btn">
            {{-- <div class="col-2"><label class="btn btn_city w-100" id="table_refresh">All Tabs Selected <i
                class="fas fa-redo-alt ms-3"></i></label></div> --}}
        </div>
        <div class="row my-3 filter_btn">
            {{-- <div class="col-4"><label class="btn btn_city w-100" id="table_refresh">All Tabs Selected <i
                class="fas fa-redo-alt ms-3"></i></label></div> --}}
            <div class="col-2"> <label class="btn btn_city w-100" id="table_Name">Person Name <input type="checkbox"
                        disabled checked id="table_Name_IN"></label></div>
            <div class="col-2"><label class="btn btn_city w-100" id="table_Title">Job Title <input type="checkbox"
                        disabled checked id="table_Title_IN"></label></div>
            <div class="col-2"><label class="btn btn_city w-100" id="table_Company">Company Name <input type="checkbox"
                        disabled checked id="table_Company_IN"></label></div>
            <div class="col-2"><label class="btn btn_city w-100" id="table_City">City <input type="checkbox" disabled
                        checked id="table_City_IN"></label></div>
            <div class="col-2"><label class="btn btn_city w-100" id="">Industry <input type="checkbox" disabled checked
                        id="table_City_IN"></label></div>
            <div class="col-2">
                <div class="ui toltip" data-content="Selected Tabs Action" data-position="top center">
                    <label class="btn btn_city w-100 bg_theme" id="table_refresh">All Tabs Selected</label>
                </div>
            </div>

            {{-- <div class="col-2"><label class="btn btn_city w-100" id="">Text <i
                        class="fas fa-redo-alt"></i></label></div> --}}
            {{-- <div class="col-xs-12 col-sm-12 col-md-12 filter_btn"> --}}
        </div>

        <div class="row filter_btn">
            <div class="col-2">
                <label class="btn btn_city w-100" id="table_Email">Email <input type="checkbox" checked
                        id="table_Email_IN"></label>
            </div>
            <div class="col-2">
                <label class="btn btn_city w-100" id="table_Phone">Phone <input type="checkbox" checked
                        id="table_Phone_IN"></label>
            </div>
            <div class="col-2">
                <label class="btn btn_city w-100" id="table_Company_Size">Company Size <input type="checkbox" checked
                        id="table_Company_Size_IN"></label>
            </div>
            <div class="col-2">
                <label class="btn btn_city w-100" id="table_Revenue">Revenue <input type="checkbox" checked
                        id="table_Revenue_IN"></label>
            </div>
            <div class="col-2">
                <label class="btn btn_city w-100" id="table_Zip_code">Zip Code <input type="checkbox" checked
                        id="table_Zip_code_IN"></label>
            </div>
            <div class="col-2">
                <label class="btn btn_city w-100" id="table_URL">Website <input type="checkbox" checked
                        id="table_URL_IN"></label>
            </div>

        </div>
    </div>

    </div>
    <div class="col-lg-12 col-md-12 col-sm-12" style="overflow-x:auto;">
        <table class="table table-responsive cell-border TableIDADD" id="myTableSimple">
            <thead>
                {{-- <th>Industry</th> --}}
                <th>Person Name</th>
                <th style="">Job Title</th>
                <th>Email</th>
                <th>Phone</th>
                <th style="min-width: 170px;">Company Name</th>
                <th style="width: 105px;min-width: 105px;">Company Size</th>
                <th>Revenue</th>
                <th style="min-width: 100px;">City</th>
                <th style="min-width: 72px;">Zip Code</th>
                <th>Website</th>
            </thead>
            <tbody id="lead_data">
                @forelse ($lead_data as $key=> $lead)
                <tr>
                    {{-- <td>{{$lead->industry}}</td> --}}
                    <td>{{$lead->person_name}}</td>
                    <td>{{($lead->title = "Managing Partner"?"Partner": $lead->title)}}</td>
                    <td>{{Str::substr($lead->email, 0, 3)."****@*****".Str::substr($lead->email, -5)}}</td>
                    <td>{{Str::substr($lead->phone, -4)."****"}}</td>
                    <td>{{ Str::limit($lead->company_name, 15)}}</td>
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
        <div class="row d-none">
            <div class="col-sm-12 col-md-6">{{ $lead_data->links() }}</div>
        </div>
    </div>
    </div>
</section>


<section class="container" style="padding:0px 0 50px 0;">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="ui buttons">
                <a class="ui button teal" href="{{route('frontend.contact.index')}}">Contact For Order</a>
                <div class="or"></div>
                <a class="ui button positive" id="contact_By_filter">Contact Based Filter</a>
            </div>
        </div>
    </div>
</section>
-->


<div class="container my-5">
    <section class="row">
        <div class="col-sm-12 col-md-6">
            <h3>What Are Lead Generation Services?</h3>
            <p>Lead generation is the process of producing new sales leads through developing interest in a service or
                product. Lead Generation services are a fundamental part of growing your business’s revenue. B2B
                organizations frequently employ lead generation services to acquire and evaluate fresh leads in the
                hopes of converting them into new clients. These services might be offered by a single consultant or a
                large agency with numerous employees.
            </p>
        </div>

        <div class="col-sm-12 col-md-6">
        </div>
    </section>

    <section class="row my-5">
        <div class="col-sm-12 col-md-12">
            <h3>Lead Generation Services We Offer</h3>
            <p>Our company offers several lead generation services all over the world at very low cost and on time. We
                always manage the bulk and high-quality projects at a very low cost. We offer the services given below:
            </p>
        </div>
        <div class="col-sm-12 col-md-3 lead_box">
            <div>
                <i class='bx bx-buildings'></i>
                <h4>B2B Lead Generation</h4>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 lead_box">
            <div>
                <i class='bx bx-collapse'></i>
                <h4>PPC Lead Generation</h4>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 lead_box">
            <div>
                <i class='bx bx-command'></i>
                <h4>Product Base Lead</h4>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 lead_box">
            <div>
                <i class='bx bx-donate-heart'></i>
                <h4>Service Base Lead</h4>
            </div>
        </div>
    </section>

    <section class="row my-5">
        <h3>Why Choose Us For Lead Genaration?</h3>
        <p>Repeat and Regular paying customers are every business’s sweetest dream. You aren’t in business until then
            you find and retain paying customers. However, achieving this dream isn’t a piece of cake in the park of
            other million businesses. Thousands of businesses also compete for your target customers. So, how do you get
            a competitive edge? Do you have any magic lamps to assist you in prospecting and turning prospects into
            paying customers?
            Thankfully, Bangladesh Outsourcing Company is here to generate millions $ in revenue through our magic
            tools, personalized email generator and dedicated Lead Generate team. We create solid plans for you to keep
            your leads organized, updated and informed about your products and services, while also working hard on
            capturing those who you see as potential new customers and clients.
        </p>
        <h4>Data Generating Tools</h4>
        <p>Tools we use are LinkedIn Sales Navigator, Zoominfo, RocketReach, FindThatLead, Snoov.io, Salesql, Adapt,
            ClearBit, Hunter, Contactout, MailTester, Boomerang, MailChimp, Hola, Google, Kendo etc.
        </p>
    </section>

    <section class="row my-5">
        <div class="col-sm-12 col-md-12">
            <h3>Lead Generation Specialty</h3>
            <p>Our company offers several lead generation services all over the world at very low cost and on time. We
                always manage the bulk and high-quality projects at a very low cost. We offer the services given below:
            </p>
        </div>
        <div class="col-sm-12 col-md-3 lead_box d-flex align-items-stretch">
            <div>
                <i class='bx bx-trip'></i>
                <h4>We Collect The Data</h4>
                <p>If you like our sample work, we then collect the main project details with all specifications and
                    requirements.</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 lead_box d-flex align-items-stretch">
            <div>
                <i class='bx bx-street-view'></i>
                <h4>Analyze Your Data</h4>
                <p>Before we start lead generation of your documents with high precision, our experts analyze your
                    project to find the most appropriate method for the same.</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 lead_box d-flex align-items-stretch">
            <div>
                <i class='bx bx-edit'></i>
                <h4>Our Editors service</h4>
                <p>After collecting your lead our expert editors will revise all the files properly and if there needs
                    any correction, the editor will make it unique.</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 lead_box d-flex align-items-stretch">
            <div>
                <i class='bx bx-leaf'></i>
                <h4>We assure quality</h4>
                <p>We try to maintain overall quality and try to submit an error-free lead and in this case, we maintain
                    a strict quality check for lead generation services offered.</p>
            </div>
        </div>
    </section>
</div>



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
    $('#country_Name').change(function () {
        $('.custom_paginate').html(" ");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $country = $('#country_Name_Input').val();
        // console.log($country);
        $('#myTableSimple').DataTable().clear().draw();

        $.ajax({
            type: 'POST',
            url: '/getcities',
            data: {
                'country': $country
            },
            success: function (data) {
                $('#country_Name_catch').val(data.country_name);
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
                // error: function (data) {
                //     alert("fail");
                // }
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
            // error: function (data) {
            //     alert("fail");
            // }
        });

        $('#city_Name').next($('.text').eq(1).html('Search cities'));
    });

    $('body').click(function () {

        $('#city_Name').next($('.text').eq(1).html('Search cities'));
        $('#industry_Name').next($('.text').eq(2).html('Search industry'));

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

</script>

<script>
    $('#Filterreset').click(function () {
        $('#country_Name').next($('.text').eq(0).html('Search Country'));
        $('#country_Name').val('');
        cities = [];
        industries = [];
        $('#city_name_display').html('');
        $('#industry_Name_display').html('');

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

</script>



<script>
    $('#contact_By_filter').click(function () {

        var country_name = $('#country_Name_catch').val();
        localStorage.setItem("country_name", country_name);
        localStorage.setItem("cities_name", cities);
        // localStorage.getItem("country_name");
        location.href = "/contact";

    });

    $('#city_Name22').popup({
        inline: true
    });

    // $('.toltip').popup();
    $('.toltip').popup({
        inline: true
    });

</script>


@endsection
