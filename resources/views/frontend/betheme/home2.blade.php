@php

    $keyword = "Lead generation,B2b lead generation services,Free b2b lead generation app,How to generate leads in google local services ads,Lead generation meaning,Lead generation website,Real estate lead generator,B2b lead generation companies,Best lead generation for realtors,Generation lead,Lead generation service,Leads generation,B2b lead generation agency,Facebook lead generation,Lead generating companies,Lead generation ideas,Lead generation process,Real estate lead generation companies,B2b lead generation strategies,B2b lead generation tools,Demand generation vs lead generation,Generate real estate leads,Generating leads in real estate,Generating real estate leads,How to generate leads in real estate,How to generate real estate leads,Insurance lead generation,Lead generated,Lead generating service,Lead generation campaign,Lead generation specialist,Lead generation system,Mortgage lead generation,Outbound lead generation,Best lead generation companies,Best lead generation software,Best lead generation tools,Business lead generation";

@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="{{$keyword}}">
    <meta name="author" content="bdosc.com">
    <meta name="description" content="Lead generation is the process of producing new sales leads through developing interest in a service or product.">
    <title>Lead Generation</title>

    <!-- Style Links || Start -->

    {{-- CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    {{-- CDN --}}
    {{-- Custom --}}

    <link rel="stylesheet" href="{{asset('front_assets/css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/table.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/services.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/mainstyle.css')}}">

    {{-- Custom --}}

    <!-- Style Links || END -->

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
                        <div class="default text">Search Country</div>
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
                        <label for="" class="w-100" style="text-transform:uppercase;">Country Name </label>
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

            <div class="col-12 row" style="padding-bottom:15px;">
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
                        <td>{{($lead->title = "Managing Partner"?"Partner": Str::substr($lead->title, 0, 15)."...")}}</td>
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
        </div>
    </section>

    {{-- Table Area || End --}}

    <section class="pb-5">
        <div class="container">

            <div class="row row-cols-1 row-cols-md-3 g-4 service_card mt-5">
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
                            <a class="header" style="color: #fff;" title="Small Business Lead Generation">Small Business Lead Generation</a>
                            <div class="meta">
                                <span class="date" style="color: #fff;">{{Str::limit("Lead generation is the process of producing new sales leads through developing interest in a service or product. Generating leads is essential for  any type of business’s sales process, but it can be especially challenging for smaller companies .Suppose you don't have enough money or manpower to do traditional lead generation strategies like Branding and SEO (search engine optimization) for small businesses. In that case, there are so many ways to generate leads for your small business.", 110)}}<a href="#" style="color: #fff;text-decoration: underline;">Read
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
                                <span class="date" style="color: #fff;">{{Str::limit("Social media groups, pages and communities are a great way to connect with your target audience. Most of the small businesses utilize social media in their marketing strategy. You can also use Facebook and Instagram search bars to find these groups and type in keywords that relate to your niche or join an online community like LinkedIn. Search online communities that are relevant to your business and join them to promote your business. You can do this through social media, groups & forums.", 110)}}<a href="#" style="color: #fff;text-decoration: underline;">Read
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
                                <p>In Business, B2B lead generation is the act of identifying and initiating an interest of
                                    prospective customers. Identifying prospective customers means finding businesses or clients who may have an interest in your offering business product or services (Shortly your target audience).Initiating interest is about capturing information from these potential customers and feeding them into your sales funnel. Capturing information of potential Consumers Is called lead and these leads can be converted into your Main  customer.
                                </p>
                            </div>

                            <div class="animate__animated animate__fadeInUp mt-5">
                                <h3>How does B2B lead generation work?</h3>
                                <p>
                                    Generating leads can be difficult and time-consuming but the idea itself is pretty simple. The first step of B2B lead generation is finding the potential leads (contact information). This information is either sourced in house or by a third party lead generation company. Lead generation companies collect potential buyers' or consumers' Leads & their information.
                                </p>

                                <p>
                                    Now you have a database of potential high quality leads to contact with them. This can either be an email or a social media post. The main point here is to put your business or product in front of the eyes of the people who will be more likely to enjoy your product or service
                                </p>
                                <p>
                                    “Searching and Qualifying Leads” This stage is about research,is your customer aware about your brand? Do they trust your brand and strategy? Are they already considering making a purchase? These are the main factors many B2B customers will be asking themselves before they make a purchase. "Close The Lead" is the last part of your lead generation successful journey. After closing the leads you should nurture your leads
                                </p>
                            </div>

                            <div class="animate__animated animate__fadeInUp mt-5">
                                <h3>Why Is B2B Lead Generation Important To My Business?</h3>
                                <p>
                                    Implementing a B2B lead generation strategy is Important today because many prospects want to control their buying journey. Ads and traditional marketing Will not work anymore. Today’s Customers are conducting their own research to find solutions to their problems. Lead generation strategy will help you to find this target Consumers.
                                    Here’s a look at some of the benefits of B2B lead generation.
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
                                <p>There are three types of B2B leads. Every type of lead is important for converting a potential new paying customer.</p>
                            </div>
                            <div class="animate__animated animate__fadeInUp mt-5">
                                <h3>Cold Leads</h3>
                                <p>Cold lead is essentially for a company that has been deemed like a good fit for your brand.Generally speaking these have a lower conversion rate than the other methods of B2B leads because the prospective lead has no prior knowledge of the brand. The general aim with cold leads is to advertise your brand.</p>

                                <p>Every company will have its own answer to this one but the steps a lead needs to take on the way to making a sale are generally the same. Traditionally, the Consumer's journey was viewed only from a sales perspective but modern sales funnel management is changing and focus is now on the buyer’s perspective.This is the point at which they can understand that there is a problem or opportunity.</p>
                            </div>

                            <div class="animate__animated animate__fadeInUp mt-5">
                                <h3>Warm Leads</h3>
                                <p>Who have interacted with your brand before, by either filling in an email form, visiting a website multiple times or by watching or downloading some form of free content you have available online are the warm leads. They	are also your target audience.You can Convert them into your Paying customers.</p>
                            </div>
                            <div class="animate__animated animate__fadeInUp mt-5">
                                <h3>Hot Leads</h3>
                                <p>Hot lead is a qualified lead For any type of business. Who have shown a strong interest in purchasing your product or service are the Hot leads shortly PPC leads.Lead generation agency can help you to collect hot leads by using different types strategy.</p>
                            </div>
                            <div class="animate__animated animate__fadeInUp mt-5">
                                <h3>Lead nurturing</h3>
                                <p>Every company will have its own answer to this one but the steps a lead needs to take on the way to making a sale are generally the same.</p>

                                <p>Traditionally, the Consumer's journey was viewed only from a sales perspective but modern sales funnel management is changing and focus is now on the buyer’s perspective.This is the point at which they can understand that there is a problem or opportunity.</p>

                                <p>At this stage they are likely to Check online for some top-level information, but they are making no conscious effort to research or purchase a solution. The next stage is consideration – the buyer is now starting to look for solutions.They will be spending much more time Checking different content and researching the best course of action, but still aren't ready to make a purchase.</p>

                                <p>Once the buyer has done their research and knows everything they need to know, the decision step will begin.If any company has stood out up to this point as being always helpful, giving them all the information and details they need exactly when they need it, then they’ll be in great position and at a huge advantage</p>

                                <p>In the post-purchase stage Just because the buyer has handed over their cash, doesn’t mean this should be the end of your involvement and B2B lead generation efforts. You should always be helpful to your regular customers because they are your advertising machine.</p>

                                <p>Each step of this journey will require a specific Strategy that is highly tailored and designed to lead them further down the path towards a sale.</p>

                            </div>
                            <div class="animate__animated animate__fadeInUp mt-5">
                                <h2>Lead gen tools:</h2>
                                <p>B2B lead generation is a complex, time-consuming activity. So, what can we do to save time and streamline the process? Fortunately, there are several tools on the market which can help you to generate different types of leads. Tools are like aladdin’s lamp in the lead generation sector because it helps to find customers' secret details.</p>
                            </div>

                            <div class="animate__animated animate__fadeInUp mt-5">
                                <h3>Are lead generation companies worth it?</h3>
                                <p>If you decide to go with a B2B lead generation agency or company, there are a lot of factors to take into your mind when choosing a provider. What are you expecting from them? What KPIs will they measure, and how do these fit with your own expectation? Do they have expertise within your business products & services? How responsive are they? What may it be like to work with them, are they going to be a good fit for your business?</p>
                            </div>

                            <div class="animate__animated animate__fadeInUp mt-5">
                                <h3>Planning & analyzing</h3>
                                <p>How much budget do I need for B2B lead generation?</p>
                                <p>Actually there is no easy answer – regardless of whether your budget is £1,00 or £1,000,000. Here are some issues to consider:</p>
                                <ol>
                                    <li>How quickly are you looking to reach your target audience ?</li>
                                    <li>What are you hoping to achieve from B2b Lead Generation ?</li>
                                </ol>
                                <p>Are you looking to generate B2B leads, make sales or simply to push brand Advertising?</p>
                                <p>If you’re a new business, a majority of your money and effort will probably be focused on Advertising– getting your name in front of potential customers and building a presence, both online and offline. If you’re already a well established business, you’re likely to be spending less on branding and more on lead generation and sales.</p>
                                <p>With a B2B Targeted audience One of the most cost-effective channels is content marketing. You can use effective content for marketing to your targeted audience. Effective content will improve your branding to the consumers.</p>
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
                                <p>With the rise of digital marketing, lead generation has become a crucial aspect of any business.Franchises & other major businesses have always been able to generate leads through their websites, but small businesses can’t afford to spend thousands on digital marketing campaigns. Lead generation helps them to gain access to new customers that they may not have otherwise reached</p>
                            </div>

                            <div class="animate__animated animate__fadeInUp my-5">
                                <h3>Small Business Lead Generation procedure</h3>
                                <p>Lead generation is the process of producing new sales leads through developing interest in a service or product. Generating leads is essential for  any type of business’s sales process, but it can be especially challenging for smaller companies .Suppose you don't have enough money or manpower to do traditional lead generation strategies like Branding and SEO (search engine optimization) for small businesses. In that case, there are so many ways to generate leads for your small business.
                                </p>
                            </div>

                            <div class="animate__animated animate__fadeInUp my-5">
                                <h3>Build Your Community</h3>
                                <p>Social media groups, pages and communities are a great way to connect with your target audience. Most of the small businesses utilize social media in their marketing strategy. You can also use Facebook and Instagram search bars to find these groups and type in keywords that relate to your niche or join an online community like LinkedIn.
                                    Search online communities that are relevant to your business and join them to promote your business. You can do this through social media, groups & forums.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none my-4" id="card_03_view">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <h3>Build Your Community</h3>
                            <p>Social media groups, pages and communities are a great way to connect with your target audience. Most of the small businesses utilize social media in their marketing strategy. You can also use Facebook and Instagram search bars to find these groups and type in keywords that relate to your niche or join an online community like LinkedIn.
                                Search online communities that are relevant to your business and join them to promote your business. You can do this through social media, groups & forums.</p>
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








    <!-- Footer || Start -->

    <!-- Footer || End -->
    <footer id="footer">
        <div class="footer-newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Our Newsletter</h4>
                        <p>Join with us to get updates.</p>
                    </div>
                    <div class="col-lg-6">
                        <form action="" method="post"> <input type="email" name="email"><input type="submit"
                                value="Subscribe"> </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>About BDOSC</h3>
                        <p>Bangladesh Outsourcing Company is a global business process outsourcing company. All of our
                            services satisfy stringent international standards. We have projections all around the US
                            and Western Europe.</p>
                        <div class="social-links mt-3">
                            <a class="facebook" target="_blank" href="#"><i class="bx bxl-facebook"></i></a>
                            <a class="instagram" target="_blank" href="#"><i class="bx bxl-instagram"></i></a>
                            <a class="twitter" target="_blank" href="#"><i class="bx bxl-twitter"></i></a>
                            <a class="linkedin" target="_blank" href="https://www.linkedin.com/company/bdosc/"><i
                                    class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i><a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i><a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i><a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i><a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i><a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i><a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i><a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i><a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i><a href="#">Graphic Design</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p> Block-E, Zoo Road <br> Mirpur 01, Dhaka-1216<br> Bangladesh <br><br><strong>Phone:</strong>
                            +1 5589 55488 55<br> <strong>Email:</strong> <a href="mailto:contact@bdosc.com" class="text-dark">contact@bdosc.com</a><br> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">Copyright &copy; {{date('Y')}} • <strong><a href="{{url('/')}}"
                        style="color: #e96b56;">BDOSC</a></strong>. All Rights
                Reserved </div>
        </div>
    </footer>




    <!-- Script Links || Start -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>


    <!-- Custom Script -->
    <script src="{{asset('front_assets/js/nav.js')}}"></script>
    <script src="{{asset('front_assets/js/header.js')}}"></script>
    <script src="{{asset('front_assets/js/fun-search.js')}}"></script>
    <script src="{{asset('front_assets/js/table.js')}}"></script>
    <script src="{{asset('front_assets/js/service.js')}}"></script>
    <!-- Custom Script -->


    <!-- Script Links || END -->

</body>

</html>
