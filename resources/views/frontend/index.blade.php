<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('frontend_assets')}}/dist/semantic-ui-Icon/icon.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend_assets')}}/dist/semantic/semantic.min.css">
    <link rel="stylesheet" href="{{asset('frontend_assets/dist/flags/flag.css')}}">

    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('frontend_assets')}}/dist/css/custom-scroll.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('frontend_assets')}}/dist/css/mainstyle.css">

    <style>
        #myTable tr td:nth-child(1),
        #myTable tr td:nth-child(3),
        #myTable tr td:nth-child(5) {
            min-width: 200px !important;
        }

        #myTable tr td:nth-child(2),
        #myTable tr td:nth-child(4),
        #myTable tr td:nth-child(6),
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

        #myTable_length{
            display: none !important;
        }

        .dataTables_info,.dataTables_paginate{display: none;}

        @media only screen and (max-width: 600px) {
            #myTable_length,
            #myTable_filter{
                display: none !important;
            }
        }

    </style>
</head>

<body>

    <section class="container">
        <div class="row my-3">
            <div class="col-xs-12 col-sm-12 col-md-3 mt-3">
                <h4>Filters</h4>
                <div class="col-12 search_div" id="country_Name_Box">
                    <label for="" class="w-100">Country Name <i class="fa-solid fa-angle-down CONCON1"></i></label>
                    {{-- <select class="form-control" id="country_Name_ID"></select> --}}
                    <div class="ui fluid search selection dropdown" id="country_Name_ID22">
                        <input type="hidden" name="country" id="country_Name_ID2200">
                        <i class="dropdown icon"></i>
                        <div class="default text">Select Country</div>
                        <div class="menu">
                            @foreach ($all_countries as $country)
                            <div class="item" data-value="{{$country->name}}"><i
                                    class="{{Str::lower($country->iso2)}} flag"></i>{{$country->name}}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 search_div" id="">
                    <label for="" class="w-100">City Name <i class="fa-solid fa-angle-down CONCON2"></i></label>
                    {{-- <select class="form-control" id="state_Name_ID"></select> --}}


                    <select name="states" class="ui fluid search selection dropdown" multiple="" id="state_Name_ID22">
                        <option value="">All Cities</option>
                        {{-- @foreach ($all_cities as $city)
                            <option value="{{$city->name}}">{{$city->name}}</option>
                        @endforeach --}}
                    </select>


                </div>

                <div class="col-12 search_div" id="">
                    <label for="" class="w-100">Industry Name <i class="fa-solid fa-angle-down CONCON3"></i></label>
                    {{-- <select class="form-control" id="industry_Name_ID"></select> --}}

                    <div class="ui fluid search selection dropdown" id="industry_Name_ID22">
                        <input type="hidden" name="country">
                        <i class="dropdown icon"></i>
                        <div class="default text">Select Industry</div>
                        <div class="menu">
                            <div class="item" data-value="af"><i class="af flag"></i>Afghanistan</div>
                            <div class="item" data-value="ax"><i class="ax flag"></i>Aland Islands</div>
                            <div class="item" data-value="al"><i class="al flag"></i>Albania</div>
                            <div class="item" data-value="dz"><i class="dz flag"></i>Algeria</div>
                            <div class="item" data-value="as"><i class="as flag"></i>American Samoa</div>
                        </div>
                    </div>

                </div>
                <button class="btn btn_city" id="filter">Filter</button>
                <button class="btn btn_city" id="reset">Reset</button>
            </div>

            <div class="col-lg-1 col-md-1"></div>

            <div class="col-xs-12 col-sm-12 col-md-5 col-sm-12 mt-3">
                <h6>You Have Selected</h6>
                <div class="row">
                    <div class="col-6">Country</div>
                    <div class="col-6" id="showCountryName">N/A</div>
                    <div class="col-6">City</div>
                    <div class="col-6" id="showCityName">N/A</div>
                    <div class="col-6">Industry</div>
                    <div class="col-6" id="showIndustryName">N/A</div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-sm-12 mt-3">
                <h6>Selected Country</h6>
                <img src="https://i0.wp.com/css-tricks.com/wp-content/uploads/2017/08/facebook-skeleton.png" alt=""
                    class="img-fluid" id="showCountryFlag" width="280" style="border-radius: 5px;">
            </div>
        </div>

        <div class="row my-3">
            <div class="col-xs-12 col-sm-12 col-md-12 d-flex">
                <label class="btn btn_city" id="table_Name">Person Name <input type="checkbox" disabled checked
                        id="table_Name_IN"></label>
                <label class="btn btn_city" id="table_Title">Job Title <input type="checkbox" disabled checked
                        id="table_Title_IN"></label>
                <label class="btn btn_city" id="table_Company">Company Name <input type="checkbox" disabled checked
                        id="table_Company_IN"></label>
                <label class="btn btn_city" id="table_City">City <input type="checkbox" disabled checked
                        id="table_City_IN"></label>
            </div>
            <div class="col-md-12 d-flex">
                <label class="btn btn_city" id="table_Email">Email <input type="checkbox" checked id="table_Email_IN"></label>
                <label class="btn btn_city" id="table_Phone">Phone <input type="checkbox" checked id="table_Phone_IN"></label>
                <label class="btn btn_city" id="table_Company_Size">Company Size <input type="checkbox" checked id="table_Company_Size_IN"></label>
                <label class="btn btn_city" id="table_Revenue">Revenue <input type="checkbox" checked id="table_Revenue_IN"></label>
                <label class="btn btn_city" id="table_Zip_code">Zip Code <input type="checkbox" checked id="table_Zip_code_IN"></label>
                <label class="btn btn_city" id="table_URL">Website <input type="checkbox" checked id="table_URL_IN"></label>
                <label class="btn btn_city" id="table_refresh">Default <i class="fas fa-redo-alt"></i></label>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 mt-4" style="overflow-x:auto;">
                <table class="table table-responsive" id="myTable">
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
                    <tbody>
                        @forelse ($lead_data as $key=> $lead)


                        @php

                            $email = explode('@', $lead->email);

                            $email_str = substr($email[0], 0, 3);

                            $domain = explode('.' , $email[1]);
                            $website = explode('/' , $lead->website);

                        @endphp

                            <tr>
                                <td>{{$lead->person_name}}</td>
                                <td>{{$lead->title}}</td>
                                <td>{{$email_str."****@*****.".$domain[1]}}</td>
                                <td>{{$lead->phone}}</td>
                                <td>{{ Str::limit($lead->company_name, 20)}}</td>
                                <td>{{$lead->company_size}}</td>
                                <td>{{$lead->revenue}}</td>
                                <td>{{$lead->city}}</td>
                                <td>{{$lead->zip_code}}</td>
                                <td>{{ $website[0]."//"."***.".$domain[1] }}</td>
                            @empty
                            <tr>
                                <td colspan="12" class="text-center">Not Found Any Data.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row float-end custom_paginate">
            <div>{{ $lead_data->links() }}</div>
        </div>
        </div>





        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        {{-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> --}}
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script src="{{asset('frontend_assets')}}/dist/semantic/semantic.js"></script>

        <script src="{{asset('frontend_assets')}}/dist/js/variable.js"></script>
        <!-- <script src="js/all_city.js"></script> -->
        <!-- <script src="js/city_loop.js"></script> -->
        <script src="{{asset('frontend_assets')}}/dist/js/table-filter.js"></script>
        <!-- <script src="js/search.js"></script> -->

        <script>
            $('#country_Name_ID22').dropdown();
            $('#state_Name_ID22').dropdown();
            $('#industry_Name_ID22').dropdown();

            //  $('#country_Name_ID22').dropdown({
            //     fullTextSearch: true
            // });

            $(document).ready(function () {
                $('#myTable').DataTable();
            });
            $(document).ready(function () {
                $('#country_Name_ID').select2();
                $('#state_Name_ID').select2();
                $('#industry_Name_ID').select2();
            });

            $('#country_Name_ID22').click(function () {
                console.log($('#country_Name_ID2200').val());

                // $.ajax({
                //     type:'POST',
                //     url:'/getCityName',
                //     data:'name' = $('#country_Name_ID2200').val(),
                //     success:function(data) {
                //         // $("#msg").html(data.msg);
                //         console.log(data);
                //     }
                // });

            })

        </script>

</body>

</html>
