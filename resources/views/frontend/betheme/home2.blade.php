<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{asset('frontend_assets/dist/css/navbar.css')}}">

    <title>Hello</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;900&display=swap');

        .container {
            max-width: 1110px;
        }

        body {
            font-family: 'Work Sans', sans-serif;
            background:url({{asset('uploads/img/mainbg2.jpg')}});
            background-repeat: no-repeat;
        }

        header {
            padding-top: 145px;
            background:url({{asset('uploads/img/vector/bg04.png')}});
            /* background-position:top right; */
            /* background-repeat: no-repeat; */
            background:cover;
        }

        h1 {
            font-family: 'Playfair Display', serif;
        }

        .bg_coffe {
            background-color: #F3EFEB;
            transition: .5s ease;
        }

        .nav-link {
            color: #000;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
            font-size: 14px;
        }

        .hero_left {
            z-index: 10 !important;
        }

        .hero_left h1 {
            font-size: 60px;
            font-weight: 900;
        }

        .hero_right {
            position: absolute;
            width: 661px;
            background: #F0DBC8;
            right: 14px;
            top: -1px;
            height: 100%;
            display: flex;
            justify-content: end;
            align-items: end;
        }

        .hero_area {
            min-height: 75.85vh;
            margin-top: -2rem;
            margin-right: -2rem;
        }

        #country_Name50 {
            background: #c3b092;
            color: #000;
            border: 0px !important;
            /* border-bottom: 1px solid #898989 !important; */
            border-radius: 0;
            font-size: 20px;
        }

        #country_Name50 .text {
            color: #000;
        }

        .select_box {
            margin-right: -45px;
            border: 3px solid #c3b092;
        }

        .select_box h3 {
            font-family: 'Work Sans', sans-serif;
            /* font-family: 'Playfair Display', serif; */
            font-size: 19px;
            font-weight: 400;
            letter-spacing: 1px;
        }

        .ui.popup {
            /* color: #fff; */
            /* background-color: #5928e5 !important; */
            width: 100%;
            color: #000;
            background-color: #fdef25 !important;
        }

        .ui.popup::before {
            background-color: #5928e5 !important;
        }

    </style>

</head>

<body>

    <nav>
        <div class="container">
            <div class="logo">
                <a href="#"><img src="{{asset('uploads/img/logo3.png')}}" alt="" /></a>
            </div>
            <input type="radio" name="slider" id="menu-btn" />
            <input type="radio" name="slider" id="close-btn" />
            <ul class="nav-links" style="margin-bottom: 0">
                <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
                <li class="nav_item"><a href="#">Home</a></li>

                <li class="nav_item">
                    <a href="#" class="desktop-item">Services</a>
                    <input type="checkbox" id="showMega" />
                    <label for="showMega" class="mobile-item">Services</label>
                    <div class="mega-box">
                        <div class="content">
                            <!-- <div class="row">
                        <img
                          src="https://us.123rf.com/450wm/leowolfert/leowolfert1606/leowolfert160600007/60004020-engineer-is-pressing-it-services-on-an-interactive-touch-screen-business-metaphor-and-information-te.jpg?ver=6"
                          alt=""
                        />
                      </div> -->
                            <div class="row">
                                <h4>Lead Generation</h4>
                                <ul class="mega-links">
                                    <li><a href="#">B2B lead Generation</a></li>
                                    <li><a href="#">PPC Lead Generation</a></li>
                                    <li><a href="#">B2B lead Generation</a></li>
                                    <li><a href="#">PPC Lead Generation</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <h4>Web Development</h4>
                                <ul class="mega-links">
                                    <li><a href="#">WordPress Development</a></li>
                                    <li><a href="#">MERN Development</a></li>
                                    <li><a href="#">Web Application</a></li>
                                    <li><a href="#">Custom Website</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <h4>Email Services</h4>
                                <ul class="mega-links">
                                    <li><a href="#">Email Template</a></li>
                                    <li><a href="#">Email Marketing</a></li>
                                    <li><a href="#">Mailchimp</a></li>
                                    <li><a href="#">Campain</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <h4>Graphics Services</h4>
                                <ul class="mega-links">
                                    <li><a href="#">Photo Retoucing</a></li>
                                    <li><a href="#">Background Removal</a></li>
                                    <li><a href="#">Photo Manipulation</a></li>
                                    <li><a href="#">Banner Design</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                {{-- <li></li> --}}
                <li class="nav_item"><a href="#">Blog</a></li>
                <li class="nav_item"><a href="#">About</a></li>
                <li class="nav_item"><a href="{{route('frontend.contact.index')}}">Contact</a></li>
            </ul>
            <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
        </div>
    </nav>

    <header>
        <section  class="container">


        {{-- <nav class="navbar navbar-expand-lg" style="min-height:15.5vh;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="{{asset('uploads/img/logo3.png')}}" alt="" width="60" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link aactive" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="#">Services</a>
                <a class="nav-link" href="#">About us</a>
                <a class="nav-link" href="#">Blog</a>
                <a class="nav-link" href="#"><strong>Hire us</strong></a>
            </div>
        </div>
        </div>
        </nav> --}}

        <div class="row align-items-center position-relative hero_area">
            <div class="col-sm-12 col-md-7 hero_left">
                {{-- <h4>Welcome</h4> --}}
                <h1 style="padding-top: 110px;font-size:40px;">We Provide Effective <br><strong style="font-size: 110px;line-height: 90px;">LEAD GENERATION</strong><br> Services</h1>
                <p style="width: 115%;font-size: 16px;text-align: justify;">Lead generation is the process of producing new sales leads through developing interest in a service
                    or product. Lead Generation services are a fundamental part of growing your business’s revenue.</p>


                <div class="row justify-content-between mt-5 select_box" style="width:120%;background:#f3d0b0;">

                    <div class="col-6 d-flex align-items-center" style="background: #f0dbc8;width:450px">
                        <h3>Choose your country for find Leads <i class="fas fa-caret-right" style="font-size: 30px;"></i></h3>
                    </div>

                    <div class="col-6" style="background:#c3b092;width: 308px;">
                        <div class="ui fluid search selection dropdown" id="country_Name50">
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

            </div>
            <div class="col-sm-12 col-md-5 hero_right">
                {{-- <img src="{{asset('uploads/img/avater.png')}}" alt="" style="float:
                right;height:250px;margin-right: 0px;"> --}}
                <div class="row align-items-center" style="width: 490px;">
                    <div class="col-4">
                        {{-- <img src="{{asset('uploads/img/vector/demo001.png')}}" alt=""
                            style="width:480px;height:auto;"> --}}
                        {{-- <img src="{{asset('uploads/img/vector/avater.png')}}" alt=""
                            style="width:120px;height:auto;"> --}}
                    </div>
                    <div class="col-8">
                        {{-- <h6>Full Stack Developer</h6>
                        <h5 class="m-0">Muhammad Rabiul</h5> --}}
                    </div>
                </div>
            </div>
        </div>

    </section>
    </header>


    <section class="container-fluid d-none animate__animated" id="DataTableMain" style="background: #F3EFEC;">
        <div class="container">
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
                    <div class="col-2"> <label class="btn btn_city w-100" id="table_Name">Person Name <input
                                type="checkbox" disabled checked id="table_Name_IN"></label></div>
                    <div class="col-2"><label class="btn btn_city w-100" id="table_Title">Job Title <input
                                type="checkbox" disabled checked id="table_Title_IN"></label></div>
                    <div class="col-2"><label class="btn btn_city w-100" id="table_Company">Company Name <input
                                type="checkbox" disabled checked id="table_Company_IN"></label></div>
                    <div class="col-2"><label class="btn btn_city w-100" id="table_City">City <input type="checkbox"
                                disabled checked id="table_City_IN"></label></div>
                    <div class="col-2"><label class="btn btn_city w-100" id="">Industry <input type="checkbox" disabled
                                checked id="table_City_IN"></label></div>
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
                        <label class="btn btn_city w-100" id="table_Company_Size">Company Size <input type="checkbox"
                                checked id="table_Company_Size_IN"></label>
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
                {{-- <div class="col-sm-12 col-md-6">{{ $lead_data->links() }}</div> --}}
        </div>
        </div>
        </div>

        <div class="col-md-12 search_div" style="display: flex;align-items: center;justify-content:center;"
            id="contact_box">
            <a style="background:transparent;border:none;color:#000;">Contact Us</a>
        </div>

        <section class="container my-5 d-none animate__animated " id="contact_main">
            <div class="row w-100 justify-content-center">
                <div class="col-sm-12 col-md-8" style="border-radius:5px;margin-bottom:50px;">
                    <h4>Contact Us Today</h4>

                    <div class="col-12 mb-3">
                        <div class="ui steps w-100">
                            <a class="active step">
                                <div class="content">
                                    <div class="title">Step 01</div>
                                    <div class="description">Your Info</div>
                                </div>
                            </a> <a class="step">
                                <div class="content">
                                    <div class="title">Step 02</div>
                                    <div class="description">Requirments</div>
                                </div>
                            </a> <a class="step">
                                <div class="content">
                                    <div class="title">Step 03</div>
                                    <div class="description">Quantity</div>
                                </div>
                            </a> <a class="step">
                                <div class="content">
                                    <div class="title">Step 04</div>
                                    <div class="description">Duration</div>
                                </div>
                            </a> <a class="step">
                                <div class="content">
                                    <div class="title">Step 05</div>
                                    <div class="description">Your Plan</div>
                                </div>
                            </a> <a class="step">
                                <div class="content">
                                    <div class="title">Step 06</div>
                                    <div class="description">Invoice</div>
                                </div>
                            </a>
                        </div>
                    </div>


                    <h3>Your Information</h3>
                    <form action="{{route('frontend.contact.post')}}" method="post" class="ui form">
                        @csrf

                        <div class="row my-3">
                            <div class="col-sm-12 col-md-6">
                                <div class="ui small left icon input w-100">
                                    <input type="text" name="name" id="name" placeholder="Your Name" required>
                                    <i class="fas fa-user icon"></i>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="ui small left icon input w-100">
                                    <input type="email" name="email" id="email" placeholder="Email Address" required>
                                    <i class="fas fa-envelope icon"></i>
                                </div>
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-sm-12 col-md-6">
                                {{-- <label for="name">Country</label> --}}
                                <div class="ui small fluid search selection dropdown" id="country_Name">
                                    <input type="hidden" name="user_country" id="country_Name_Input">
                                    <i class="dropdown icon"></i>
                                    <div class="default text"><i class="fas fa-flag icon"></i> Your Country</div>
                                    <div class="menu">
                                        @foreach ($all_countries as $country)
                                        <div class="item" data-value="{{$country->id}}"><i
                                                class="{{Str::lower($country->iso2)}} flag"></i>{{$country->name}}</div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="ui small left icon input w-100">
                                    <input type="number" placeholder="Phone">
                                    <i class="fas fa-phone icon"></i>
                                </div>
                            </div>
                        </div>

                        @if (empty(Auth::id()))

                        <div class="row my-3">
                            <h6 class="text-center">You can apply for Free Membership ( Leave blank if not interested )
                            </h6>
                            <div class="col-sm-12 col-md-6">
                                <div class="ui small left icon input w-100">
                                    <input type="password" name="password" id="password" placeholder="Your password">
                                    <i class="fas fa-key icon"></i>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="ui small left icon input w-100">
                                    <input type="password" name="con_password" id="con_password"
                                        placeholder="Confirm Password">
                                    <i class="fas fa-key icon"></i>
                                </div>
                            </div>
                        </div>

                        @endif

                        <h3>Lead Requirements</h3>


                        <div class="row">
                            <div class="col-6 mt-2">
                                <label for="">Country Name</label>
                                <div class="ui small fluid search selection dropdown" id="country_Name2">
                                    <input type="hidden" name="country" id="country_Name_Input2">
                                    <i class="dropdown icon"></i>
                                    <div class="default text"><i class="fas fa-flag icon"></i> Lead Country</div>
                                    <div class="menu">
                                        @foreach ($all_countries as $country)
                                        <div class="item" data-value="{{$country->id}}"><i
                                                class="{{Str::lower($country->iso2)}} flag"></i>{{$country->name}}</div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mt-2">
                                <label for="">City Name</label>
                                <select name="cities" class="ui small fluid search dropdown city_Name" id="city_Name">
                                    <option value="">All Cities</option>
                                    @foreach ($all_city as $city)
                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6 mt-2">
                                <label for="">Industry Name</label>
                                <select name="industry" class="ui small fluid search dropdown city_Name"
                                    id="industry_Name">
                                    <option value="">All Industry</option>
                                    @foreach ($all_industry as $industry)
                                    <option value="{{$industry->id}}">{{$industry->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6 mt-2">
                                <label for="" class="">Total Leads</label>
                                <div class="col-sm-12 col-md-12">
                                    <div class="ui small left icon input w-100">
                                        <input type="text" name="total_leads" placeholder="Total Leads">
                                        <i class="fas fa-dollar-sign icon"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mt-2">
                                <div class="row">
                                    <label for="" class="my-1">Revenue</label>
                                    <div class="col-sm-4 col-md-6">
                                        <div class="ui left icon input w-100">
                                            <input type="text" name="revenue_minimum" placeholder="Minimum">
                                            <i class="fas fa-dollar-sign icon"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-6">
                                        <div class="ui left icon input w-100">
                                            <input type="text" name="revenue_maximum" placeholder="Maximum">
                                            <i class="fas fa-dollar-sign icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mt-2">
                                <label for="" class="my-1">Project Duration</label>
                                <div class="col-sm-12 col-md-12">
                                    <div class="ui left icon input w-100">
                                        <input type="date" name="duration" placeholder="Duration">
                                        <i class="fas fa-calendar-alt icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-12">
                                <label for="" class="my-1">Message</label>
                                <textarea name="message" id="message" placeholder="Type Your Message..."
                                    required></textarea>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-6" id="country_box_grp">
                                <label for="" class="my-1">Selected Country</label>
                                <input type="text" name="country_box" value="" id="country_box"
                                    style="background-color: transparent;" placeholder="Selected Country">
                            </div>
                            <div class="col-6" id="city_box_grp">
                                <label for="" class="my-1">Selected Cities</label>
                                <input type="text" value="" name="city_box" id="city_box"
                                    style="background-color: transparent;" placeholder="Selected Cities">
                            </div>
                        </div>
                        <button type="submit" class="ui basic button">
                            <i class="fas fa-paper-plane icon"></i>
                            Submit
                        </button>
                        {{-- <span class="mx-1">OR</span> --}}
                        <button type="reset" class="ui basic button">
                            <i class="fas fa-sign-in icon"></i>
                            Reset
                        </button>
                    </form>
                </div>
            </div>
        </section>


        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>

    <script>
        $('#country_Name50').dropdown();
        $('#country_Name').dropdown();
        $('#city_Name').dropdown();
        $('#industry_Name').dropdown();

        $('#country_Name50').change(function () {
            $('#DataTableMain').removeClass('d-none');
            $('#DataTableMain').addClass('animate__fadeInUp');
            $('#contact_main').addClass('d-none');
        });

    </script>

    <script>
        $(window).on("scroll", function () {
            if ($(window).scrollTop() > 50) {
                $("nav").addClass("bg_coffe");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
                $("nav").removeClass("bg_coffe");
            }
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

</body>

</html>
