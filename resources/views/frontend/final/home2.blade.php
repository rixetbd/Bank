@extends('frontend.betheme.master')

@section('meta_tag')
    @include('meta::manager',[
        'title' => 'Lead Generation',
        'author' => 'Bangladesh Outsourcing Company',
        'description' => 'Lead generation is the process of producing new sales leads through developing interest in a service or product.',
        'keywords' => 'Lead generation, service',
        'image' => asset('uploads/banners/lead_generation.png'),
        ])
@endsection

@section('content')



{{--

<body>

    <nav>
        <div class="container">
            <div class="logo">
                <a href="{{route('frontend.home')}}"><img src="{{asset('uploads/img/logo3.png')}}"
                        alt="Bangladesh Outsourcing Company" /></a>
            </div>
            <input type="radio" name="slider" id="menu-btn" />
            <input type="radio" name="slider" id="close-btn" />
            <ul class="nav-links" style="margin-bottom: 0">
                <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
                <li class="nav_item"><a href="{{route('frontend.home')}}">Home</a></li>

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
                <li class="nav_item"><a href="#">Blog</a></li>
                <li class="nav_item"><a href="#">About</a></li>
                <li class="nav_item"><a href="{{route('frontend.contact.index')}}">Contact</a></li>
            </ul>
            <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
        </div>
    </nav> --}}

    <header>
        <section class="container">

            <div class="row align-items-center position-relative hero_area">
                <div class="col-sm-12 col-md-7 hero_left">
                    {{-- <h4>Welcome</h4> --}}
                    <h1 style="padding-top: 110px;">We Provide Effective <br><strong>LEAD GENERATION</strong><br>
                        Services</h1>
                    <p class="description">Lead generation is the process of
                        producing new sales leads through developing interest in a service
                        or product. Lead Generation services are a fundamental part of growing your business’s revenue.
                    </p>
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
                            {{-- <h6>Full Stack Developer </h6>
                        <h5 class="m-0">Muhammad Rabiul</h5> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 select_box">
                <div class="col-sm-12 col-md-4 d-flex align-items-center"
                    style="background: #f0dbc8;margin-right: -12px;">
                    <h3 class="input_h3">Choose your country to find Leads <i class='bx bx-caret-right'></i></h3>
                </div>

                <div class="col-sm-12 col-md-5 input_field">
                    <div class="ui fluid search selection dropdown" id="country_Name50">
                        <input type="hidden" name="country" id="country_Name_Input50">
                        <i class="dropdown icon"></i>
                        <div class="default text">SEARCH COUNTRY</div>
                        <div class="menu">
                            @foreach ($all_countries as $country)
                            <div class="item" data-value="{{$country->id}}"><i
                                    class="{{Str::lower($country->iso2)}} flag"></i>{{$country->name}}</div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 pt-5">
                    <p>For more than four years, our firm has provided high-quality data entry and other non-voice
                        services to
                        many sectors, with several successful projects. Our team's knowledge and skills may be put to
                        good use
                        in your organization. Take advantage of the following benefits provided by our skilled staff.
                    </p>
                </div>
            </div>

        </section>
    </header>

    {{-- Table Area || Start --}}

    <section class="container d-none" id="table_Area" style="padding-top: 100px;">
        <div class="pb-3">
            <div class="row justify-content-between align-items-end pt-4" style="padding-bottom:15px;">
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <h4 style="font-size:25px;text-transform:uppercase;">Search Specific Leads</h4>
                    <div class="col-12 search_div" id="country_Name_Box">
                        <input type="hidden" id="country_Name_catch">
                        {{-- <label for="" class="w-100" style="text-transform:uppercase;">Country Name </label> --}}
                        <div class="ui fluid search selection dropdown" id="country_Name">
                            <input type="hidden" name="country" id="country_Name_Input">
                            <i class="dropdown icon"></i>
                            <div class="default text">SEARCH COUNTRY</div>
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

            <div class="col-12 row" style="padding-bottom:15px;">
                <div class="col-xs-12 col-sm-12 col-md-3" id="NullData">
                    <div class="col-12 search_div" id="">
                        {{-- <label for="" class="w-100" style="text-transform:uppercase;">City Name</label> --}}
                        <div class="ui toltip" data-content="You can choose multiple cities as per your needs"
                            data-position="left center">
                            <select name="states" class="ui fluid search dropdown city_Name text_black" id="city_Name">
                                <option value="">ALL CITIES</option>
                                @foreach ($all_city as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9 mt-325" id="city_name_display">
                    {{-- <label for="" class="w-100" style="min-height: 24px;">&nbsp;</label> --}}
                </div>
            </div>

            <div class="col-12 row" style="padding-bottom: 15px;border-bottom:1px solid #fff">
                <div class="col-xs-12 col-sm-12 col-md-3" id="NullData">
                    <div class="col-12 search_div" id="">
                        {{-- <label for="" class="w-100" style="text-transform:uppercase;">Industry Name</label> --}}
                        <div class="ui toltip" data-content="You can choose multiple industry"
                            data-position="left center">
                            <select name="states" class="ui fluid search dropdown city_Name text_black"
                                id="industry_Name">
                                <option value="">ALL INDUSTRY</option>
                                @foreach ($all_industry as $industry)
                                <option value="{{$industry->id}}">{{$industry->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9 mt-325" id="industry_Name_display">
                    {{-- <label for="" class="w-100" style="min-height: 24px;">&nbsp;</label> --}}
                </div>
            </div>

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

        </div>
        <div class="col-lg-12 col-md-12 col-sm-12" style="overflow-x:auto;">
            <table class="table table-responsive cell-border TableIDADD" id="myTableSimple">
                <thead>
                    <th style="min-width: 150px;">Person Name</th>
                    <th style="width: 59.7344px;">Job Title</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th style="min-width: 150px;">Company Name</th>
                    <th style="width: 105px;min-width: 105px;">Company Size</th>
                    <th>Revenue</th>
                    <th style="min-width: 140px">City</th>
                    <th style="min-width: 72px;">Zip Code</th>
                    <th>Website</th>
                </thead>
                <tbody id="lead_data">
                    @forelse ($lead_data as $key=> $lead)
                    <tr>
                        {{-- <td>{{$lead->industry}}</td> --}}
                        <td>{{$lead->person_name}}</td>
                        <td>{{($lead->title = "Managing Partner"?"Partner": Str::substr($lead->title, 0, 15)."...")}}
                        </td>
                        <td>{{Str::substr($lead->email, 0, 3)."****@*****".Str::substr($lead->email, -5)}}</td>
                        <td>{{Str::substr($lead->phone, -4)."****"}}</td>
                        <td>{{Str::substr($lead->company_name, 0, 15)."..."}}</td>
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

        <div class="col-md-12 search_div mt-4" style="display: flex;align-items: center;justify-content:center;"
            id="contact_box">
            <a style="background:transparent;border:none;color:#000;">Contact Us</a>
        </div>

        <div class="my-5 animate__animated " id="contact_main">
            <div class="row w-100 justify-content-center">
                <div class="col-sm-12 col-md-8" style="border-radius:5px;margin-bottom:50px;">

                    {{-- <div class="col-12 mb-3">
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
                    </div> --}}


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
    </section>

    {{-- Table Area || End --}}

    <section class="pb-5">
        <div class="container">

            <div class="row row-cols-1 row-cols-md-4 g-4 service_card mt-5">
                <div class="col ui special cards my-3" id="card_01">
                    <div class="card w-100 m-0">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Read More</div>
                                    </div>
                                </div>
                            </div>
                            <img src="{{asset('uploads/img/Make-a-customer-not-a-sale1.gif')}}">
                        </div>
                        <div class="content content_color">
                            <a class="header" style="color: #fff;" title="Business to Business">B2B lead generation</a>
                            <div class="meta">
                                <span class="date" style="color: #fff;">
                                    {{Str::limit('In Business, B2B lead generation is the act of identifying and initiating an interest of prospective customers. Identifying prospective customers means finding businesses or clients who may have an interest in your offering business product or services (Shortly your target audience).Initiating interest is about capturing information from these potential customers and feeding them into your sales funnel. Capturing information of potential Consumers Is called lead and these leads can be converted into your Main customer.', 110)}}
                                    <a href="#" style="color: #fff;text-decoration: underline;">Read more</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center w-100 d-none arrow_down animate__animated animate__fadeInDown"><i
                            class="fas fa-caret-down" style="font-size: 50px;margin: -20px;color: #008000;"></i></div>
                </div>
                <div class="col ui special cards my-3" id="card_02">
                    <div class="card w-100 m-0">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Read More</div>
                                    </div>
                                </div>
                            </div>
                            <img src="{{asset('uploads/img/Make-a-customer-not-a-sale2.gif')}}">
                        </div>
                        <div class="content content_color">
                            <a class="header" style="color: #fff;" title="Small Business Leads">Small Business Leads</a>
                            <div class="meta">
                                <span class="date"
                                    style="color: #fff;">{{Str::limit("Lead generation is the process of producing new sales leads through developing interest in a service or product. Generating leads is essential for  any type of business’s sales process, but it can be especially challenging for smaller companies .Suppose you don't have enough money or manpower to do traditional lead generation strategies like Branding and SEO (search engine optimization) for small businesses. In that case, there are so many ways to generate leads for your small business.", 110)}}<a
                                        href="#" style="color: #fff;text-decoration: underline;">Read
                                        more</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center w-100 d-none arrow_down animate__animated animate__fadeInDown"><i
                            class="fas fa-caret-down" style="font-size: 50px;margin: -20px;color: #008000;"></i></div>
                </div>
                <div class="col ui special cards my-3" id="card_03">
                    <div class="card w-100 m-0">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Read More</div>
                                    </div>
                                </div>
                            </div>
                            <img src="{{asset('uploads/img/Make-a-customer-not-a-sale3.gif')}}">
                        </div>
                        <div class="content content_color">
                            <a class="header" style="color: #fff;" title="B2C Lead Generation">B2C Lead Generation</a>
                            <div class="meta">
                                <span class="date"
                                    style="color: #fff;">{{Str::limit("B2C stands for business-to-consumer, It's also known as Direct selling relationship between Business and an individual. B2C lead generation is the process of turning Consumers into  effective leads. The best B2c lead generation strategy builds up enough trust, and connection that the person feels comfortable enough to buy the product or service you are offering. Essentially, if you have a Company and you are selling products or services, you need to be strategic and on top of your business to consumer marketing.", 110)}}<a
                                        href="#" style="color: #fff;text-decoration: underline;">Read
                                        more</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center w-100 d-none arrow_down animate__animated animate__fadeInDown"><i
                            class="fas fa-caret-down" style="font-size: 50px;margin: -20px;color: #008000;"></i></div>
                </div>
                <div class="col ui special cards my-3" id="card_04">
                    <div class="card w-100 m-0">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Read More</div>
                                    </div>
                                </div>
                            </div>
                            <img src="{{asset('uploads/img/services/3.gif')}}">
                        </div>
                        <div class="content content_color">
                            <a class="header" style="color: #fff;" title="Social Media Leads">Social Media Leads</a>
                            <div class="meta">
                                <span class="date"
                                    style="color: #fff;">{{Str::limit("Social media lead generation utilizes the benefits of Online platforms to bring in new expectations for your business. The power of social media can influence and change many areas of your marketing efforts, including lead generation.", 110)}}<a
                                        href="#" style="color: #fff;text-decoration: underline;">Read
                                        more</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center w-100 d-none arrow_down animate__animated animate__fadeInDown"><i
                            class="fas fa-caret-down" style="font-size: 50px;margin: -20px;color: #008000;"></i></div>
                </div>
            </div>

            <div class="service_preview d-none">
                <div class="float-end">
                    <button style="border: 1px solid #919191;border-radius: 10%;width: 35px;height: 35px;"
                        id="service_preview_close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="my-4" id="card_01_view">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="animate__animated animate__fadeInUp mb-5">
                                <h3>What is B2B lead generation ?</h3>
                                <p>In Business, <abbr title="Business to Business">B2B</abbr> lead generation is the act
                                    of identifying and initiating an interest of
                                    prospective customers. Identifying prospective customers means finding businesses or
                                    clients who may have an interest in your offering business product or services
                                    (Shortly your target audience).Initiating interest is about capturing information
                                    from these potential customers and feeding them into your sales funnel. Capturing
                                    information of potential Consumers Is called lead and these leads can be converted
                                    into your Main customer.
                                </p>
                            </div>

                            <div class="animate__animated animate__fadeInUp mt-5">
                                <h3>How does B2B lead generation work?</h3>
                                <p>
                                    Generating leads can be difficult and time-consuming but the idea itself is pretty
                                    simple. The first step of <abbr title="Business to Business">B2B</abbr> lead
                                    generation is finding the potential leads (contact information). This information is
                                    either sourced in house or by a third party lead generation company. Lead generation
                                    companies collect potential buyers' or consumers' Leads & their information.
                                </p>

                                <p>
                                    Now you have a database of potential high quality leads to contact with them. This
                                    can either be an email or a social media post. The main point here is to put your
                                    business or product in front of the eyes of the people who will be more likely to
                                    enjoy your product or service
                                </p>
                                <p>
                                    “Searching and Qualifying Leads” This stage is about research,is your customer aware
                                    about your brand? Do they trust your brand and strategy? Are they already
                                    considering making a purchase? These are the main factors many <abbr
                                        title="Business to Business">B2B</abbr> customers will be asking themselves
                                    before they make a purchase. "Close The Lead" is the last part of your lead
                                    generation successful journey. After closing the leads you should nurture your leads
                                </p>
                            </div>

                            <div class="animate__animated animate__fadeInUp mt-5">
                                <h3>Why Is B2B Lead Generation Important To My Business?</h3>
                                <p>
                                    Implementing a <abbr title="Business to Business">B2B</abbr> lead generation
                                    strategy is Important today because many prospects want to control their buying
                                    journey. Ads and traditional marketing Will not work anymore. Today’s Customers are
                                    conducting their own research to find solutions to their problems. Lead generation
                                    strategy will help you to find this target Consumers.
                                    Here’s a look at some of the benefits of <abbr
                                        title="Business to Business">B2B</abbr> lead generation.
                                </p>
                                <ul>
                                    <li>Build Awareness for Your Brand</li>
                                    <li>Increase Your Sales Opportunities</li>
                                    <li>Provides Benefits to the Buyer and Seller</li>
                                    <li>Drive More High-Quality Leads</li>
                                    <li>Costs Less than Other Forms of Advertising</li>
                                    <li>Appeal to Your Target Audience</li>
                                    <li>Grow Your Revenue</li>
                                </ul>
                            </div>
                            <div class="animate__animated animate__fadeInUp mt-5">
                                <h3>Types of leads</h3>
                                <p>There are three types of <abbr title="Business to Business">B2B</abbr> leads. Every
                                    type of lead is important for converting a potential new paying customer.</p>
                            </div>
                            <div class="animate__animated animate__fadeInUp mt-5">
                                <h3>Cold Leads</h3>
                                <p>Cold lead is essentially for a company that has been deemed like a good fit for your
                                    brand.Generally speaking these have a lower conversion rate than the other methods
                                    of <abbr title="Business to Business">B2B</abbr> leads because the prospective lead
                                    has no prior knowledge of the brand. The general aim with cold leads is to advertise
                                    your brand.</p>

                                <p>Every company will have its own answer to this one but the steps a lead needs to take
                                    on the way to making a sale are generally the same. Traditionally, the Consumer's
                                    journey was viewed only from a sales perspective but modern sales funnel management
                                    is changing and focus is now on the buyer’s perspective.This is the point at which
                                    they can understand that there is a problem or opportunity.</p>
                            </div>

                            <div class="animate__animated animate__fadeInUp mt-5">
                                <h3>Warm Leads</h3>
                                <p>Who have interacted with your brand before, by either filling in an email form,
                                    visiting a website multiple times or by watching or downloading some form of free
                                    content you have available online are the warm leads. They are also your target
                                    audience.You can Convert them into your Paying customers.</p>
                            </div>
                            <div class="animate__animated animate__fadeInUp mt-5">
                                <h3>Hot Leads</h3>
                                <p>Hot lead is a qualified lead For any type of business. Who have shown a strong
                                    interest in purchasing your product or service are the Hot leads shortly PPC
                                    leads.Lead generation agency can help you to collect hot leads by using different
                                    types strategy.</p>
                            </div>
                            <div class="animate__animated animate__fadeInUp mt-5">
                                <h3>Lead nurturing</h3>
                                <p>Every company will have its own answer to this one but the steps a lead needs to take
                                    on the way to making a sale are generally the same.</p>

                                <p>Traditionally, the Consumer's journey was viewed only from a sales perspective but
                                    modern sales funnel management is changing and focus is now on the buyer’s
                                    perspective.This is the point at which they can understand that there is a problem
                                    or opportunity.</p>

                                <p>At this stage they are likely to Check online for some top-level information, but
                                    they are making no conscious effort to research or purchase a solution. The next
                                    stage is consideration – the buyer is now starting to look for solutions.They will
                                    be spending much more time Checking different content and researching the best
                                    course of action, but still aren't ready to make a purchase.</p>

                                <p>Once the buyer has done their research and knows everything they need to know, the
                                    decision step will begin.If any company has stood out up to this point as being
                                    always helpful, giving them all the information and details they need exactly when
                                    they need it, then they’ll be in great position and at a huge advantage</p>

                                <p>In the post-purchase stage Just because the buyer has handed over their cash, doesn’t
                                    mean this should be the end of your involvement and B2B lead generation efforts. You
                                    should always be helpful to your regular customers because they are your advertising
                                    machine.</p>

                                <p>Each step of this journey will require a specific Strategy that is highly tailored
                                    and designed to lead them further down the path towards a sale.</p>

                            </div>
                            <div class="animate__animated animate__fadeInUp mt-5">
                                <h2>Lead gen tools:</h2>
                                <p><abbr title="Business to Business">B2B</abbr> lead generation is a complex,
                                    time-consuming activity. So, what can we do to save time and streamline the process?
                                    Fortunately, there are several tools on the market which can help you to generate
                                    different types of leads. Tools are like aladdin’s lamp in the lead generation
                                    sector because it helps to find customers' secret details.</p>
                            </div>

                            <div class="animate__animated animate__fadeInUp mt-5">
                                <h3>Are lead generation companies worth it?</h3>
                                <p>If you decide to go with a B2B lead generation agency or company, there are a lot of
                                    factors to take into your mind when choosing a provider. What are you expecting from
                                    them? What KPIs will they measure, and how do these fit with your own expectation?
                                    Do they have expertise within your business products & services? How responsive are
                                    they? What may it be like to work with them, are they going to be a good fit for
                                    your business?</p>
                            </div>

                            <div class="animate__animated animate__fadeInUp mt-5">
                                <h3>Planning & analyzing</h3>
                                <p>How much budget do I need for B2B lead generation?</p>
                                <p>Actually there is no easy answer – regardless of whether your budget is £1,00 or
                                    £1,000,000. Here are some issues to consider:</p>
                                <ol>
                                    <li>How quickly are you looking to reach your target audience ?</li>
                                    <li>What are you hoping to achieve from B2b Lead Generation ?</li>
                                </ol>
                                <p>Are you looking to generate <abbr title="Business to Business">B2B</abbr> leads, make
                                    sales or simply to push brand Advertising?</p>
                                <p>If you’re a new business, a majority of your money and effort will probably be
                                    focused on Advertising– getting your name in front of potential customers and
                                    building a presence, both online and offline. If you’re already a well established
                                    business, you’re likely to be spending less on branding and more on lead generation
                                    and sales.</p>
                                <p>With a <abbr title="Business to Business">B2B</abbr> Targeted audience One of the
                                    most cost-effective channels is content marketing. You can use effective content for
                                    marketing to your targeted audience. Effective content will improve your branding to
                                    the consumers.</p>
                            </div>

                            <div class="animate__animated animate__fadeInUp mt-5">
                                <h3></h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none my-4" id="card_02_view">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="animate__animated animate__fadeInUp mb-5">
                                <h3>Small Business Lead Generation</h3>
                                <p>With the rise of digital marketing, lead generation has become a crucial aspect of
                                    any business. Franchises & other major businesses have always been able to generate
                                    leads through their websites, but small businesses can’t afford to spend thousands
                                    on digital marketing campaigns. Lead generation helps them to gain access to new
                                    customers that they may not have otherwise reached</p>
                            </div>

                            <div class="animate__animated animate__fadeInUp my-5">
                                <h3>Small Business Lead Generation procedure</h3>
                                <p>Lead generation is the process of producing new sales leads through developing
                                    interest in a service or product. Generating leads is essential for any type of
                                    business’s sales process, but it can be especially challenging for smaller companies
                                    .Suppose you don't have enough money or manpower to do traditional lead generation
                                    strategies like Branding and SEO (search engine optimization) for small businesses.
                                    In that case, there are so many ways to generate leads for your small business.
                                </p>
                            </div>

                            <div class="animate__animated animate__fadeInUp my-5">
                                <h3>Build Your Community</h3>
                                <p>Social media groups, pages and communities are a great way to connect with your
                                    target audience. Most of the small businesses utilize social media in their
                                    marketing strategy. You can also use Facebook and Instagram search bars to find
                                    these groups and type in keywords that relate to your niche or join an online
                                    community like LinkedIn.
                                    Search online communities that are relevant to your business and join them to
                                    promote your business. You can do this through social media, groups & forums.</p>
                            </div>

                            <div class="animate__animated animate__fadeInUp my-5">
                                <h3>Engage with Your Customers</h3>
                                <p>Engaging in online communities is a great way to grow your customer base.
                                    Engage with the community by creating informative posts or answering questions where
                                    appropriate. If someone asks a question, try to answer it correctly, so they can
                                    feel their value on these platforms. You can also offer discounts or other
                                    incentives for your targeted audience who engage with you in the group. This will
                                    help you to attract more followers and put you at the front of their minds when
                                    they’re looking for service providers like yours.</p>
                            </div>

                            <div class="animate__animated animate__fadeInUp my-5">
                                <h3>Utilize email marketing for lead generation</h3>
                                <p>Email isn’t dead, and it’s still a perfect tool for lead generation. In fact, many
                                    lead generation pros note that email marketing is the best strategy for small
                                    businesses, especially for those that use B2B cold calling services or cold email
                                    services. It's a great place to reach the people who already know your brand &
                                    service.</p>

                                <p>There are so many tools out there that you can use to automate and keep track of the
                                    mail you send to the customers. Being able to track how people are interacting with
                                    your email information is the key to seeing where your marketing efforts are
                                    generating the most leads. There are some automation tools in the market that will
                                    show you how often a mail was opened, whether they clicked through the link, and
                                    more. For this, you can take help from any lead generation agency.
                                </p>
                            </div>
                            <div class="animate__animated animate__fadeInUp my-5">
                                <h3>Give Free Trials & offers</h3>
                                <p>Offering free trials is a great strategy to attract new customers and generate leads.
                                </p>

                                <p>You can offer your service or product for a limited time, with the option of
                                    purchasing it if the customer likes what they have experienced. Or you could also
                                    provide a limited-time service for free to generate organic leads. This step lets
                                    you get feedback from potential customers before making any commitments, giving you
                                    valuable insight into their needs and preferences.</p>
                            </div>

                            <div class="animate__animated animate__fadeInUp my-5">
                                <h3>Customer Reviews</h3>
                                <p>Offering free trials is a great strategy to attract new customers and generate leads.
                                </p>


                                <p>Reviews are one of the best ways to build trust with Consumers. They can help you to
                                    reach new prospects by boosting your search engine optimization.</p>

                                <p>Getting a review is not difficult but requires persistence and patience—it’s a
                                    numbers game!</p>

                                <p>Write emails asking people who purchased from you to review their experience on sites
                                    like Google, Yelp, and other social media sites.</p>

                                <p>You can also ask your following audience to rate you on these sites even if they
                                    haven’t purchased from you yet.</p>

                                <p><strong>Next:</strong> respond quickly to negative reviews.</p>

                                <p>It’s okay if someone gives your business a negative review; that sometimes happens
                                    even when everything goes perfectly!</p>

                                <p>Don't ignore it or try to hide it; respond perfectly in a professional manner and try
                                    to turn something negative into an opportunity for improvement.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none my-4" id="card_03_view">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="animate__animated animate__fadeInUp mb-5">
                                <h3>B2C Lead Generation</h3>
                                <p>B2C stands for business-to-consumer, It's also known as Direct selling relationship
                                    between Business and an individual. B2C lead generation is the process of turning
                                    Consumers into effective leads. The best B2c lead generation strategy builds up
                                    enough trust, and connection that the person feels comfortable enough to buy the
                                    product or service you are offering. Essentially, if you have a Company and you are
                                    selling products or services, you need to be strategic and on top of your business
                                    to consumer marketing.</p>
                            </div>
                            <div class="animate__animated animate__fadeInUp my-5">
                                <h3>B2B vs B2C marketing</h3>
                                <p>We have Known that B2C means direct selling between the business and an individual
                                    customer. On the other hand, B2B refers to sales business to business.</p>
                                <img src="{{asset('uploads/img/b2bvsb2c.png')}}" alt="b2b vs b2c" class="img-fluid">
                            </div>
                            <div class="animate__animated animate__fadeInUp my-5">
                                <h3>Business to Consumer Models</h3>
                                <h4>Share B2C content</h4>
                                <p>One of the most reliable ways to generate leads is to write useful and friendly
                                    content for your brand. When people find valuable, informative content on your
                                    website or social media sites, they’ll be more likely to become leads. You can write
                                    posts about your business and industry related , explain everything in detail about
                                    your offering tips & tricks. As users encounter your posts in search results,
                                    they’ll visit your site to read and find solutions.</p>
                            </div>
                            <div class="animate__animated animate__fadeInUp my-5">
                                <h3>Set up a Google Business Profile</h3>
                                <p>Create a google business profile with your location, phone number, website so that
                                    users can get everything related to your business when search your Company and
                                    industry related keywords in google. This profile will help you to increase your b2c
                                    leads . It will also increase your brand value and help you to build trust with
                                    customers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none my-4" id="card_04_view">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="animate__animated animate__fadeInUp my-5">
                                <h3>Social Media Lead Generation</h3>
                                <p>Lead generation is an important part of marketing that needs a strong strategy. Social media lead generation utilizes the benefits of Online platforms to bring in new expectations for your business.</p>

                                <p>The power of social media can influence and change many areas of your marketing efforts, including lead generation. Using social media to help you in your lead generation strategy is an excellent method to connect to those who are already looking for your brand product & service, follow similar keywords and hashtags, or are invested in important industry news.</p>
                            </div>
                            <div class="animate__animated animate__fadeInUp mb-5">
                                <div class="row">
                                    <div class="col-sm-12 col-md-3">
                                        <div class="child_box d-flex align-items-center">
                                            <i class="fab fa-linkedin fa-2x me-3"></i>
                                            <h4>Linkedin Lead Generation</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <div class="child_box d-flex align-items-center">
                                            <i class="fab fa-facebook fa-2x me-3"></i>
                                            <h4>Facebook Lead Generation</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <div class="child_box d-flex align-items-center">
                                            <i class="fab fa-twitter fa-2x me-3"></i>
                                            <h4>Twitter Lead Generation</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <div class="child_box d-flex align-items-center">
                                            <i class="fab fa-instagram fa-2x me-3"></i>
                                            <h4>Instagram Lead Generation</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="animate__animated animate__fadeInUp mb-5">
                                <div class="child_box_sub d-none animate__animated animate__fadeInUp">
                                    <h3>Linkedin Lead Generation</h3>
                                    <p>Linkedin is a popular & effective way for lead generation.LinkedIn lead generation can improve your business as it generates leads 220% more effectively than Facebook and Twitter.LinkedIn is a gold mine for marketers, and it is an avenue for decision-makers, top-level influencers, and industry thought leaders for networking, discussion, debate, and research. This platform gives you a direct opportunity to connect with your target audience. This platform gives you a direct opportunity to connect with your target audience. You can send direct connections and messages to those who have an interest in your offering product & services.</p>
                                    <h2>Most Effective Strategies</h2>
                                    <h3>1. Your Profile</h3>


                                    <p>Since LinkedIn is a professional platform, your profile needs to be professional for engagement. Your profile is the first thing people will see when you send them a message and connection request. Make sure to have a clear and perfect Picture along with an appropriate title that summarizes your company role and area of expertise. Also, include a high-resolution background image of your company.

                                    <p>Make sure that your 2000-word “About” summary highlights your expertise, skills, and accomplishments, and is keyword-rich so that your profile can be easily discovered by the right target audience
                                    Use LinkedIn’s “Featured” section to showcase major projects, publications, posts, etc., and reel new prospects in</p>

                                    <h4>Finally, demonstrate ‘social proof’ by asking, friends, colleagues, Family members, etc. to write authentic recommendations</h4>

                                    <h3>Increase The Visibility Of Your Profile</h3>
                                    <p>It's a critical matter to understand how the LinkedIn algorithm works if you want to ensure that your profile is as visible to many people as possible. The short version is that being an active person on Linkedin is the greatest method to ascend the algorithm. Regularly posting information, leaving comments, uploading photos, Videos, and responding to posts can increase your profile visibility.</p>

                                    <h3>2. Find The targeted person</h3>
                                    <p>While LinkedIn's search function might be a little tricky at times, finding the Targeted people and decision-makers contacts is very simple. By typing the name of a specific role in the search box or simply searching the terms independently for outreach candidates on the fly you can get their profile instantly.</p>

                                </div>
                                <div class="child_box_sub d-none animate__animated animate__fadeInUp">
                                    <h3>Facebook Lead Generation</h3>
                                    <p>Facebook is a gold mine for marketers, and it is an avenue for decision-makers, top-level influencers, and industry thought leaders for networking, discussion, debate, and research. This platform gives you a direct opportunity to connect with your target audience. This platform gives you a direct opportunity to connect with your target audience. You can send direct connections and messages to those who have an interest in your offering product & services.</p>
                                </div>
                                <div class="child_box_sub d-none animate__animated animate__fadeInUp">
                                    <h3>Twitter Lead Generation</h3>
                                    <p>A great place to find leads is Twitter. But if you want to use the power of this platform to expand your online business, you must be strategic about it.</p>
                                </div>
                                <div class="child_box_sub d-none animate__animated animate__fadeInUp">
                                    <h3>Instagram Lead generation</h3>
                                    <p>Instagram lead generation requires more than sporadic posting and a handful of hashtags. Instagram marketing requires planning, just like all other marketing-related activities. When incorporated into your overall marketing plan, generating leads through Instagram and other social media platforms runs much more smoothly. To get the most out of your Instagram marketing efforts, make sure to plan out your campaigns, content, stories, and even hashtags in advance. Let's now discuss the specific actions you can take to generate a ton of sales leads on Instagram.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <section class="row my-5">
                <h3>Why Choose Us For Lead Genaration?</h3>
                <p>Repeat and Regular paying customers are every business’s sweetest dream. You aren’t in business until
                    then
                    you find and retain paying customers. However, achieving this dream isn’t a piece of cake in the
                    park of
                    other million businesses. Thousands of businesses also compete for your target customers. So, how do
                    you
                    get
                    a competitive edge? Do you have any magic lamps to assist you in prospecting and turning prospects
                    into
                    paying customers?
                    Thankfully, Bangladesh Outsourcing Company is here to generate millions $ in revenue through our
                    magic
                    tools, personalized email generator and dedicated Lead Generate team. We create solid plans for you
                    to
                    keep
                    your leads organized, updated and informed about your products and services, while also working hard
                    on
                    capturing those who you see as potential new customers and clients.
                </p>
                <h4>Data Generating Tools</h4>
                <p>Tools we use are LinkedIn Sales Navigator, Zoominfo, RocketReach, FindThatLead, Snoov.io, Salesql,
                    Adapt,
                    ClearBit, Hunter, Contactout, MailTester, Boomerang, MailChimp, Hola, Google, Kendo etc.
                </p>
            </section>

            <section class="row my-5">
                <div class="col-sm-12 col-md-12 mb-4">
                    <h3>Lead Generation Specialty</h3>
                    <p>Our company offers several lead generation services all over the world at very low cost and on
                        time.
                        We
                        always manage the bulk and high-quality projects at a very low cost. We offer the services given
                        below:
                    </p>
                </div>
                <div class="col-sm-12 col-md-3 lead_box d-flex align-items-stretch">
                    <div>
                        {{-- <i class='bx bx-trip'></i> --}}
                        <h4>We Collect The Data</h4>
                        <p>If you like our sample work, we then collect the main project details with all specifications
                            and
                            requirements.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 lead_box d-flex align-items-stretch">
                    <div>
                        {{-- <i class='bx bx-street-view'></i> --}}
                        <h4>Analyze Your Data</h4>
                        <p>Before we start lead generation of your documents with high precision, our experts analyze
                            your
                            project to find the most appropriate method for the same.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 lead_box d-flex align-items-stretch">
                    <div>
                        {{-- <i class='bx bx-edit'></i> --}}
                        <h4>Our Editors service</h4>
                        <p>After collecting your lead our expert editors will revise all the files properly and if there
                            needs
                            any correction, the editor will make it unique.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 lead_box d-flex align-items-stretch">
                    <div>
                        {{-- <i class='bx bx-leaf'></i> --}}
                        <h4>We assure quality</h4>
                        <p>We try to maintain overall quality and try to submit an error-free lead and in this case, we
                            maintain
                            a strict quality check for lead generation services offered.</p>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- Service Box || End -->

@endsection

<!-- Custom Script -->
@section('custom_js')
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
@endsection
<!-- Custom Script -->
