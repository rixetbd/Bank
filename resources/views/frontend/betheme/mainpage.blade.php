@extends('frontend.betheme.master')

@section('meta_tag')
@include('meta::manager',[
        'title'         =>  'Lead Generation',
        'author'        =>  'Bangladesh Outsourcing Company',
        'description'   =>  'Lead generation is the process of producing new sales leads through developing interest in a service or product.',
        'keywords'      =>  'Lead generation, service',
        'image'         =>  asset('uploads/banners/lead_generation.png'),
])
@endsection

@section('custom_css')
<link rel="stylesheet" href="{{asset('front_assets/libs/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/libs/aos/aos.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/libs/glightbox/css/glightbox.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/libs/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/libs/main.css')}}">

@endsection

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center"
    style="background: url({{asset('front_assets/img/hero-bg.jpg')}} top center;">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 mt-5">
                <h6 data-aos="fade-up">We are ready for</h6>
                <h2 data-aos="fade-up">Business Process Outsourcing Services.</h2>
                <blockquote data-aos="fade-up" data-aos-delay="100">
                    <p>Bangladesh Outsourcing Company is a global business process outsourcing company. All of our
                        services satisfy stringent international standards. We have projections all around the US and
                        Western Europe. </p>
                </blockquote>
                <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                    <a href="#about" class="btn-get-started">Get Started</a>
                    <a href="https://www.youtube.com/watch?v=YrrSV5eJW4c"
                        class="glightbox btn-watch-video d-flex align-items-center"><i
                            class="bi bi-play-circle"></i><span>Watch
                            Video</span></a>
                </div>

            </div>
        </div>
    </div>
</section><!-- End Hero Section -->

<main id="main">


    <!-- ======= Our Services Section ======= -->

    <section class="pb-5">
        <div class="container">

            {{-- row-cols-1 row-cols-md-4 g-4 --}}
            <div class="row service_card mt-5">
                <div class="col-sm-12 col-md-3 ui special cards my-3" id="card_01">
                    <div class="card w-100 m-0">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Read More</div>
                                    </div>
                                </div>
                            </div>
                            {{-- <img src="{{asset('uploads/img/services/DIGITAL_MARKETING.gif')}}"> --}}
                            <img src="{{asset('uploads/img/services/WEB_DEVELOPMENT.gif')}}">

                        </div>
                        <div class="content content_color">
                            <a class="header px-0 py-1" style="color: #fff;" title="Digital Marketing">Digital Marketing</a>
                            <div class="meta">
                                <span class="date" style="color: #fff;">
                                    {{Str::limit("Strong web advertising systems are run by our Element Advanced experts and are tailored to your company's goals. We increase client engagement by using efficient strategies and centralized site advancement techniques.", 110)}}
                                    <a href="#" style="color: #fff;text-decoration: underline;">Read more</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center w-100 d-none arrow_down animate__animated animate__fadeInDown"><i
                            class="fas fa-caret-down" style="font-size: 50px;margin: -20px;color: #008000;"></i></div>
                </div>
                <div class="col-sm-12 col-md-3 ui special cards my-3" id="card_02">
                    <div class="card w-100 m-0">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Read More</div>
                                    </div>
                                </div>
                            </div>
                            {{-- <img src="{{asset('uploads/img/services/WEB_DEVELOPMENT.gif')}}"> --}}
                            <img src="{{asset('uploads/img/services/DIGITAL_MARKETING.gif')}}">

                        </div>
                        <div class="content content_color">
                            <a class="header px-0 py-1" style="color: #fff;" title="Web Development">Web Development</a>
                            <div class="meta">
                                <span class="date"
                                    style="color: #fff;">{{Str::limit("We build a beautiful consumer-oriented website that enhances business metrics for start-up companies. Custom web development, UX design and strategy services that transform your business. We are always ready to create any website as per your requirement.", 110)}}<a
                                        href="#" style="color: #fff;text-decoration: underline;">Read
                                        more</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center w-100 d-none arrow_down animate__animated animate__fadeInDown"><i
                            class="fas fa-caret-down" style="font-size: 50px;margin: -20px;color: #008000;"></i></div>
                </div>
                <div class="col-sm-12 col-md-3 ui special cards my-3" id="card_03">
                    <div class="card w-100 m-0">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Read More</div>
                                    </div>
                                </div>
                            </div>
                            <img src="{{asset('uploads/img/services/3.jpg')}}">
                        </div>
                        <div class="content content_color">
                            <a class="header px-0 py-1" style="color: #fff;" title="Graphics Design">Graphics Design</a>
                            <div class="meta">
                                <span class="date"
                                    style="color: #fff;">{{Str::limit("BDOSC is one of the leading Graphics Design company in Bangladesh. Our team of creative and attractive graphic designers works in partnership with you. As a result, to develop images and graphics that really impact your brand.", 110)}}<a
                                        href="#" style="color: #fff;text-decoration: underline;">Read
                                        more</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center w-100 d-none arrow_down animate__animated animate__fadeInDown"><i
                            class="fas fa-caret-down" style="font-size: 50px;margin: -20px;color: #008000;"></i></div>
                </div>
                <div class="col-sm-12 col-md-3 ui special cards my-3" id="card_04">
                    <div class="card w-100 m-0">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Read More</div>
                                    </div>
                                </div>
                            </div>
                            <img src="{{asset('uploads/img/services/4.jpg')}}">
                        </div>
                        <div class="content content_color">
                            <a class="header px-0 py-1" style="color: #fff;" title="B2C Lead Generation">Data Entry</a>
                            <div class="meta">
                                <span class="date"
                                    style="color: #fff;">{{Str::limit("Bangladesh Outsourcing Company offers fully managed & scalable data entry services (products listing,forms,invoices processing,Order processing,Civil records etc) with both dedicated team model or per project model.", 110)}}<a
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
                                <div class="row">
                                    <div class="col-sm-12 col-md-3">
                                        <div class="child_box">
                                            <h4>Social Media Marketing</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <div class="child_box">
                                            <h4>Email Marketing</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <div class="child_box">
                                            <h4>Search Engine Optimize</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <div class="child_box">
                                            <h4>Google Adwords</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                    ???Searching and Qualifying Leads??? This stage is about research,is your customer aware
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
                                    journey. Ads and traditional marketing Will not work anymore. Today???s Customers are
                                    conducting their own research to find solutions to their problems. Lead generation
                                    strategy will help you to find this target Consumers.
                                    Here???s a look at some of the benefits of <abbr
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
                                    is changing and focus is now on the buyer???s perspective.This is the point at which
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
                                    modern sales funnel management is changing and focus is now on the buyer???s
                                    perspective.This is the point at which they can understand that there is a problem
                                    or opportunity.</p>

                                <p>At this stage they are likely to Check online for some top-level information, but
                                    they are making no conscious effort to research or purchase a solution. The next
                                    stage is consideration ??? the buyer is now starting to look for solutions.They will
                                    be spending much more time Checking different content and researching the best
                                    course of action, but still aren't ready to make a purchase.</p>

                                <p>Once the buyer has done their research and knows everything they need to know, the
                                    decision step will begin.If any company has stood out up to this point as being
                                    always helpful, giving them all the information and details they need exactly when
                                    they need it, then they???ll be in great position and at a huge advantage</p>

                                <p>In the post-purchase stage Just because the buyer has handed over their cash, doesn???t
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
                                    different types of leads. Tools are like aladdin???s lamp in the lead generation
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
                                <p>Actually there is no easy answer ??? regardless of whether your budget is ??1,00 or
                                    ??1,000,000. Here are some issues to consider:</p>
                                <ol>
                                    <li>How quickly are you looking to reach your target audience ?</li>
                                    <li>What are you hoping to achieve from B2b Lead Generation ?</li>
                                </ol>
                                <p>Are you looking to generate <abbr title="Business to Business">B2B</abbr> leads, make
                                    sales or simply to push brand Advertising?</p>
                                <p>If you???re a new business, a majority of your money and effort will probably be
                                    focused on Advertising??? getting your name in front of potential customers and
                                    building a presence, both online and offline. If you???re already a well established
                                    business, you???re likely to be spending less on branding and more on lead generation
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
                                    leads through their websites, but small businesses can???t afford to spend thousands
                                    on digital marketing campaigns. Lead generation helps them to gain access to new
                                    customers that they may not have otherwise reached</p>
                            </div>

                            <div class="animate__animated animate__fadeInUp my-5">
                                <h3>Small Business Lead Generation procedure</h3>
                                <p>Lead generation is the process of producing new sales leads through developing
                                    interest in a service or product. Generating leads is essential for any type of
                                    business???s sales process, but it can be especially challenging for smaller companies
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
                                    they???re looking for service providers like yours.</p>
                            </div>

                            <div class="animate__animated animate__fadeInUp my-5">
                                <h3>Utilize email marketing for lead generation</h3>
                                <p>Email isn???t dead, and it???s still a perfect tool for lead generation. In fact, many
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

                                <p>Getting a review is not difficult but requires persistence and patience???it???s a
                                    numbers game!</p>

                                <p>Write emails asking people who purchased from you to review their experience on sites
                                    like Google, Yelp, and other social media sites.</p>

                                <p>You can also ask your following audience to rate you on these sites even if they
                                    haven???t purchased from you yet.</p>

                                <p><strong>Next:</strong> respond quickly to negative reviews.</p>

                                <p>It???s okay if someone gives your business a negative review; that sometimes happens
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
                                    website or social media sites, they???ll be more likely to become leads. You can write
                                    posts about your business and industry related , explain everything in detail about
                                    your offering tips & tricks. As users encounter your posts in search results,
                                    they???ll visit your site to read and find solutions.</p>
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
            </div>
        </div>
    </section>


    <section id="services-list" class="services-list">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Services</h2>

            </div>

            <div class="row gy-5">

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #f57813;"></i></div>
                    <div>
                        <h4 class="title"><a href="#" class="stretched-link">Data Entry</a></h4>
                        <p class="description">Get high-quality data entry services from experienced professionals at affordable pricing.</p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
                    <div>
                        <h4 class="title"><a href="#" class="stretched-link">Processing & Conversion</a></h4>
                        <p class="description">Outsource your data processing needs to a one-stop shop and save up time for your primary company.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
                    <div>
                        <h4 class="title"><a href="#" class="stretched-link">Lead Generation</a></h4>
                        <p class="description">Lead generation is the process of creating interest in a service or product with the goal of generating new sales leads.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon flex-shrink-0"><i class="bi bi-binoculars" style="color: #15bfbc;"></i></div>
                    <div>
                        <h4 class="title"><a href="#" class="stretched-link">Web Research</a></h4>
                        <p class="description">Why hire professionals in-house when you can outsource your online research services to us and receive better results at a reduced cost.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon flex-shrink-0"><i class="bi bi-brightness-high" style="color: #f5cf13;"></i></div>
                    <div>
                        <h4 class="title"><a href="#" class="stretched-link">Web Development</a></h4>
                        <p class="description">In order to provide our clients with only the best websites, we use the latest technology and advanced web technology.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
                    <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week" style="color: #1335f5;"></i></div>
                    <div>
                        <h4 class="title"><a href="#" class="stretched-link">Editing Photos</a></h4>
                        <p class="description">To provide our clients with only the best photographs, we employ cutting-edge technology and advanced photo enhancing technologies.</p>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>
    </section><!-- End Our Services Section -->


    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Why Choose Us</h2>

            </div>

            <div class="row g-0 align-items-center" data-aos="fade-up" data-aos-delay="200">

                <div class="col-xl-5 img-bg" style="background-image: url({{asset('front_assets/img/why-us-bg.jpg')}})">
                </div>
                <div class="col-xl-7 p-5">
                    <p>Bangladesh Outsourcing Company is a privately held data input outsourcing firm situated in Bangladesh. We have more than four years of data entry experience. Bangladesh Outsourcing Company is committed to providing our clients in the United States, United Kingdom, Canada, Australia, Brazil, Spain, France, Germany, Italy, Austria, New Zealand, United Arab Emirates, and other countries with cost-effective data entry and BPO services.</p>
                    <p>We have created and nurtured a highly competent, experienced, and devoted staff of data entry professionals throughout the course of our 4+ years in the data entry industry. We are a dependable and dedicated data entry company that offers our customers quick, simple, and economical data input services throughout the world.</p>
                    <ul>
                        <li>Data Entry</li>
                        <li>Processing & Conversion</li>
                        <li>Lead Generation</li>
                        <li>Web Research</li>
                        <li>Web Development</li>
                        <li>Editing Photos</li>
                    </ul>
                </div>

            </div>

        </div>
    </section><!-- End Why Choose Us Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h3>Ut fugiat aliquam aut non</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.
                        Excepteur sint occaecat cupidatat non proident.</p>
                    <a class="cta-btn" href="#">Call To Action</a>
                </div>
            </div>

        </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order">

                <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-product">Product</li>
                    <li data-filter=".filter-branding">Branding</li>
                    <li data-filter=".filter-books">Books</li>
                </ul><!-- End Portfolio Filters -->

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="300">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{asset('front_assets/img/portfolio/app-1.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{asset('front_assets/img/portfolio/app-1.jpg')}}" title="App 1"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-product">
                        <img src="{{asset('front_assets/img/portfolio/product-1.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 1</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{asset('front_assets/img/portfolio/product-1.jpg')}}" title="Product 1"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-branding">
                        <img src="{{asset('front_assets/img/portfolio/branding-1.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 1</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{asset('front_assets/img/portfolio/branding-1.jpg')}}" title="Branding 1"
                                data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-books">
                        <img src="{{asset('front_assets/img/portfolio/books-1.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Books 1</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{asset('front_assets/img/portfolio/books-1.jpg')}}" title="Branding 1"
                                data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{asset('front_assets/img/portfolio/app-2.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{asset('front_assets/img/portfolio/app-2.jpg')}}" title="App 2"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-product">
                        <img src="{{asset('front_assets/img/portfolio/product-2.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 2</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{asset('front_assets/img/portfolio/product-2.jpg')}}" title="Product 2"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-branding">
                        <img src="{{asset('front_assets/img/portfolio/branding-2.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 2</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{asset('front_assets/img/portfolio/branding-2.jpg')}}" title="Branding 2"
                                data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-books">
                        <img src="{{asset('front_assets/img/portfolio/books-2.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Books 2</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{asset('front_assets/img/portfolio/books-2.jpg')}}" title="Branding 2"
                                data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{asset('front_assets/img/portfolio/app-3.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{asset('front_assets/img/portfolio/app-3.jpg')}}" title="App 3"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-product">
                        <img src="{{asset('front_assets/img/portfolio/product-3.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{asset('front_assets/img/portfolio/product-3.jpg')}}" title="Product 3"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-branding">
                        <img src="{{asset('front_assets/img/portfolio/branding-3.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{asset('front_assets/img/portfolio/branding-3.jpg')}}" title="Branding 2"
                                data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-books">
                        <img src="{{asset('front_assets/img/portfolio/books-3.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Books 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{asset('front_assets/img/portfolio/books-3.jpg')}}" title="Branding 3"
                                data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->

            </div>

        </div>
    </section><!-- End Portfolio Section -->




    <!-- ======= Services Cards Section ======= -->
    <section id="services-cards" class="services-cards">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"
                                    style="background-image: url({{asset('front_assets/img/cards-1.jpg')}}"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Eligendi omnis sunt veritatis.</h4>
                                    <p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem
                                        placeat deleniti
                                        adipisci. Cum delectus doloribus non veritatis. Officia temporibus illo magnam.
                                        Dolor eos et.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"
                                    style="background-image: url({{asset('front_assets/img/cards-2.jpg')}}"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Possimus ut sed velit assumenda</h4>
                                    <p>Sunt deserunt maiores voluptatem autem est rerum perferendis rerum blanditiis.
                                        Est laboriosam qui
                                        iste numquam laboriosam voluptatem architecto. Est laudantium sunt at quas aut
                                        hic. Eum
                                        dignissimos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"
                                    style="background-image: url({{asset('front_assets/img/cards-3.jpg')}}"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Error beatae dolor inventore aut</h4>
                                    <p>Dicta porro nobis. Velit cum in. Nesciunt dignissimos enim molestiae facilis
                                        numquam quae quaerat
                                        ipsam omnis. Neque debitis ipsum at architecto officia laboriosam odit. Ut sunt
                                        temporibus nulla
                                        culpa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"
                                    style="background-image: url({{asset('front_assets/img/cards-4.jpg')}}"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Expedita voluptas ut ut nesciunt</h4>
                                    <p>Aut est quidem doloremque voluptatem magnam quis excepturi vero quia. Eum eos
                                        doloremque
                                        architecto illo at beatae dolore. Fugiat suscipit et sint ratione dolores. Aut
                                        aliquid ea dolores
                                        libero nobis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

            </div>

        </div>
    </section><!-- End Services Cards Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Team</h2>

            </div>

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('front_assets/img/team/team-1.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>

                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('front_assets/img/team/team-2.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>

                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('front_assets/img/team/team-3.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>

                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('front_assets/img/team/team-4.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>

                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>
    </section><!-- End Team Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Testimonials</h2>

            </div>

            <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                rhoncus. Accusantium
                                quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{asset('front_assets/img/testimonials/testimonials-1.jpg')}}"
                                    class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                cillum eram malis
                                quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{asset('front_assets/img/testimonials/testimonials-2.jpg')}}"
                                    class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                                duis minim
                                tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{asset('front_assets/img/testimonials/testimonials-3.jpg')}}"
                                    class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                                minim velit
                                minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
                                veniam.
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{asset('front_assets/img/testimonials/testimonials-4.jpg')}}"
                                    class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                veniam enim culpa
                                labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi
                                cillum quid.
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{asset('front_assets/img/testimonials/testimonials-5.jpg')}}"
                                    class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->
</main><!-- End #main -->

@endsection


@section('custom_js')
<script src="{{asset('front_assets/libs/aos/aos.js')}}"></script>
<script src="{{asset('front_assets/libs/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('front_assets/libs/swiper/swiper-bundle.min.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('front_assets/libs/main.js')}}"></script>
@endsection
