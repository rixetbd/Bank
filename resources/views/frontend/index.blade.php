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

    </style>
</head>

<body>

    <section class="container">
        <div class="row my-3">
            <div class="col-md-3">
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
                                <div class="item" data-value="{{$country->name}}"><i class="{{Str::lower($country->iso2)}} flag"></i>{{$country->name}}</div>
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

            <div class="col-lg-5 col-md-5 col-sm-12">
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
            <div class="col-lg-3 col-md-3 col-sm-12">
                <h6>Selected Country</h6>
                <img src="https://i0.wp.com/css-tricks.com/wp-content/uploads/2017/08/facebook-skeleton.png" alt=""
                    class="img-fluid" id="showCountryFlag" width="250" style="border-radius: 5px;">
            </div>

            <div class="col-md-12 d-flex">
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

                <label class="btn btn_city" id="table_Email">Email <input type="checkbox" checked
                        id="table_Email_IN"></label>
                <label class="btn btn_city" id="table_Phone">Phone <input type="checkbox" checked
                        id="table_Phone_IN"></label>
                <label class="btn btn_city" id="table_Company_Size">Company Size <input type="checkbox" checked
                        id="table_Company_Size_IN"></label>
                <label class="btn btn_city" id="table_Revenue">Revenue <input type="checkbox" checked
                        id="table_Revenue_IN"></label>
                <label class="btn btn_city" id="table_Revenue">Zip Code <input type="checkbox" checked
                        id=""></label>
                <label class="btn btn_city" id="table_URL">Website <input type="checkbox" checked
                        id="table_URL_IN"></label>
                <label class="btn btn_city" id="table_refresh">Default <i class="fas fa-redo-alt"></i></label>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 mb-5 mt-4" style="overflow-x:auto;">
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
                        <tr>
                            <td>Mark Cardy</td>
                            <td>Owner</td>
                            <td>mark****@******.com</td>
                            <td>+16135******</td>
                            <td>Cardy Law Firm</td>
                            <td>11 to 15</td>
                            <td>$6.7 M</td>
                            <td>Kingston</td>
                            <td>BD 1245</td>
                            <td>https://inmydefence.com/</td>
                        </tr>
                        <tr>
                            <td>Luce Morrow</td>
                            <td>Director</td>
                            <td>l.morrow@*******.net</td>
                            <td>+14503******</td>
                            <td>Me Luce Morrow</td>
                            <td>2 to 10</td>
                            <td>$5.1 M</td>
                            <td>Quebec</td>
                            <td>BD 1245</td>
                            <td>https://lucemorrownotaire.com/</td>
                        </tr>
                        <tr>
                            <td>Margot Poepjes</td>
                            <td>Lawyer</td>
                            <td>mpoepaw@******.com</td>
                            <td>+1647******</td>
                            <td>Margot Poepjes Family</td>
                            <td>11 to 15</td>
                            <td>$5.2 M</td>
                            <td>Toronto</td>
                            <td>BD 1245</td>
                            <td>https://margotpoepjes.com/</td>
                        </tr>
                        <tr>
                            <td>Ryan McMackin</td>
                            <td>Lawyer</td>
                            <td>ryankin44@******.com</td>
                            <td>+16474******</td>
                            <td>McMackin Law</td>
                            <td>10 to 50</td>
                            <td>$5 M</td>
                            <td>Bowmanville</td>
                            <td>BD 1245</td>
                            <td>https://mcmackinlaw.ca/contact/</td>
                        </tr>
                        <tr>
                            <td>Edith Szilagyi</td>
                            <td>Founder</td>
                            <td>edith@*********.ca</td>
                            <td>+16048******</td>
                            <td>Nova Law Corporation</td>
                            <td>2 to 10</td>
                            <td>$5.1 M</td>
                            <td>Port Moody</td>
                            <td>BD 1245</td>
                            <td>https://novabc.ca/</td>
                        </tr>
                        <tr>
                            <td>Mark McMackin</td>
                            <td>Partner</td>
                            <td>mark@*********.ca</td>
                            <td>+14165******</td>
                            <td>McMackin Lawyers</td>
                            <td>10 to 15</td>
                            <td>$5 M</td>
                            <td>Toronto</td>
                            <td>BD 1245</td>
                            <td>https://mcmackinlawyers.ca/</td>
                        </tr>
                        <tr>
                            <td>Ken Strong</td>
                            <td>Partner</td>
                            <td>strong@*********.ca</td>
                            <td>+15196******</td>
                            <td>Strong Macdougal</td>
                            <td>2 to 10</td>
                            <td>$5 M</td>
                            <td>Toronto</td>
                            <td>BD 1245</td>
                            <td>https://municipallawyers.ca/</td>
                        </tr>
                        <tr>
                            <td>John Watson</td>
                            <td>Partner</td>
                            <td>jwatson@*********.com</td>
                            <td>+15196******</td>
                            <td>John Watson</td>
                            <td>11 to 15</td>
                            <td>$6 M</td>
                            <td>Toronto</td>
                            <td>BD 1245</td>
                            <td>https://nicholsonsmith.com/</td>
                        </tr>
                        <tr>
                            <td>Curtis Rutt</td>
                            <td>Director</td>
                            <td>curtis@*********.ca</td>
                            <td>+17058******</td>
                            <td>Bulwark Legal Services</td>
                            <td>11 to 50</td>
                            <td>$5 M</td>
                            <td>Orangeville</td>
                            <td>BD 1245</td>
                            <td>http://www.bulwarklegal.ca/</td>
                        </tr>
                        <tr>
                            <td>Paula Venegas</td>
                            <td>Lawyer</td>
                            <td>paula@*********.com</td>
                            <td>+16047******</td>
                            <td>Paula Venegas Law</td>
                            <td>11 to 50</td>
                            <td>$5.1 M</td>
                            <td>Abbotsford</td>
                            <td>BD 1245</td>
                            <td>https://paulavenegas.com/</td>
                        </tr>
                        <tr>
                            <td>Richard Campbell</td>
                            <td>Lawyer</td>
                            <td>richard@*********.com</td>
                            <td>+151988******</td>
                            <td>Campbell Litigation</td>
                            <td>11 to 50</td>
                            <td>$5 M</td>
                            <td>Waterloo</td>
                            <td>BD 1245</td>
                            <td>https://petkerlaw.com/</td>
                        </tr>
                        <tr>
                            <td>Carly Hills</td>
                            <td>Partner</td>
                            <td>carly@*********.ca</td>
                            <td>+1519******</td>
                            <td>PSH Lawyers</td>
                            <td>11 to 50</td>
                            <td>$5 M</td>
                            <td>Cambridge</td>
                            <td>BD 1245</td>
                            <td>https://pettittschwarz.com/</td>
                        </tr>
                        <tr>
                            <td>Nicole Druckman</td>
                            <td>Lawyer</td>
                            <td>druckman@*********.ca</td>
                            <td>+1506******</td>
                            <td>Delehanty Rinzler</td>
                            <td>11 to 50</td>
                            <td>$5.3 M</td>
                            <td>Moncton</td>
                            <td>BD 1245</td>
                            <td>https://www.drdlaw.ca/</td>
                        </tr>
                        <tr>
                            <td>Nicholas Robinson</td>
                            <td>Lawyer</td>
                            <td>nick@*********.com</td>
                            <td>+13065******</td>
                            <td>Robinson Barristers</td>
                            <td>11 to 50</td>
                            <td>$5 M</td>
                            <td>Toronto</td>
                            <td>BD 1245</td>
                            <td>https://nprobinson.com/</td>
                        </tr>
                    </tbody>
                </table>
            </div>

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

            $('#country_Name_ID22').click(function(){
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
