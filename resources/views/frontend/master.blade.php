<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('frontend_assets')}}/dist/semantic-ui-Icon/icon.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend_assets')}}/dist/semantic/semantic.min.css">
    <link rel="stylesheet" href="{{asset('frontend_assets/dist/flags/flag.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_assets/dist/css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_assets/dist/css/header.css')}}">

    @yield('stylesheet')

    <title>Document</title>

</head>
<body>

    <section class="header container-fluid" style="background-color: #5928e5;">
        <div class="container" style="padding-bottom:10px;">
            {{-- <div class="row first_row">
                <div class="col-xs-12 col-sm-12 col-md-6 right_side">
                    <ul>
                        <li><a href="#"><i class="fas fa-envelope"></i> info@bdosc.com</a></li>
                        <li><a href="#"><i class="fas fa-phone"></i> +88 01234567891</a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6 left_side">
                    <div class="social_icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div> --}}
            <div class="row second_row py-4">
                <div class="col-sm-3 col-md-2">
                    <img src="{{asset('uploads/img/logo3.png')}}" alt="Logo" class="img-fluid logo">
                </div>
                <div class="col-sm-9 col-md-10">
                    <div class="menu">
                        <div class="menu_item"><a href="{{ url('/') }}">HOME</a></div>
                        <div class="menu_item"><a href="#">SERVICES</a></div>
                        <div class="menu_item"><a href="#">PRICING</a></div>
                        <div class="menu_item"><a href="#">ABOUT US</a></div>
                        <div class="menu_item"><a href="#">BLOG</a></div>
                        <div class="menu_item"><a href="{{route('frontend.contact.index')}}">CONTACT</a></div>
                    </div>
                </div>

            </div>
            <div class="row third_row my-2">
                <div class="col service_item"><a href="#">Data Entry</a></div>
                <div class="col service_item"><a href="#">Lead Generation</a></div>
                <div class="col service_item"><a href="#">Conversion</a></div>
                <div class="col service_item"><a href="#">Web Research</a></div>
                <div class="col service_item"><a href="#">Typing Services</a></div>
                <div class="col service_item"><a href="#">Photo Editing</a></div>
                <div class="col service_item"><a href="#">Web Devlopment</a></div>
                <div class="col service_item"><a href="#">Digital Marketing</a></div>
            </div>
        </div>
    </section>



    @yield('container')








    <section id="footer" class="container-fluid">
        <div class="container">
            <div class="row py-4">
                <div class="col-sm-12 col-md-4 text-center px-4">
                    <img src="https://dev-rong.pantheonsite.io/wp-content/uploads/2022/05/logo-coffee-white.png" alt="" class="img-fluid" width="100">
                    <p>Bangladesh Outsourcing Company is a global business process outsourcing company. All of our services satisfy stringent international standards. We have projections all around the US and Western Europe. </p>
                </div>
                <div class="col-sm-12 col-md-2">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Data Conversion</a></li>
                        <li><a href="#">Data Entry</a></li>
                        <li><a href="#">Data Processing</a></li>
                        <li><a href="#">Photo Editing</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Web Research</a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-2">
                    <h4>About Us</h4>
                    <ul>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Price</a></li>
                        <li><a href="#">Client Testimonials</a></li>
                        <li><a href="#">Management Team</a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-4">
                    <h4>Contact Us</h4>
                    <ul>
                        <li><a href="#"><i class="far fa-envelope-open"></i> contact@bdosc.com</a></li>
                        <li><a href="#"><i class="fas fa-phone-alt"></i> +88 (017) 123 456 78</a></li>
                        <li><a href="#"><i class="fas fa-map-marker-alt"></i> Mirpur 01, Dhaka-1216, BD</a></li>
                    </ul>

                    <div class="social_icon">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="copyright_area">
        <p class="text-center">Copyright &copy; <script>let year = new Date();document.write(year.getFullYear())</script> • Bangladesh Outsourcing Company • Terms of Service • Privacy Policy</p>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="{{asset('frontend_assets')}}/dist/semantic/semantic.js"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    @yield('footer_script')

</body>
</html>
