

<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <meta charset="UTF-8"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('meta_tag')

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
    @yield('custom_css')
    {{-- Custom --}}

    <!-- Style Links || END -->

</head>

<body>

    <nav>
        <div class="container">
            <div class="logo">
                <a href="{{route('frontend.home')}}"><img src="{{asset('uploads/img/logo3.png')}}" alt="Bangladesh Outsourcing Company" /></a>
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
                                <h4><a href="{{route('frontend.leadgeneration')}}">Lead Generation</a></h4>
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

    <!--
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

-->

    @yield('content')



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

    @yield('custom_js')
    <!-- Script Links || END -->

</body>

</html>
