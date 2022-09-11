<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BeTheme Page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('frontend_assets/dist/css/betheme.css')}}">

    <style>
        a{text-decoration: none;}
        .container{width: 1040px;}
        .button_flat{color: #000;background: #e9dccc;padding: 10px 20px;border-radius: 5px;}
        .card-body{background: #8a6d46;color: #fff;}
        .card-text{font-weight: 300;font-size: 15px;}
        .card-img-top{min-height: 180px;width: 100%;}
    </style>

</head>

<body>

    <section class="bgbg" style="background-image: url({{asset('frontend_assets/images/about-main-bg.jpg')}});">
        <nav>
            <div class="wrapper">
                <div class="logo">
                    <a href="#"><img src="{{asset('uploads/img/logo3.png')}}" alt="" /></a>
                </div>
                <input type="radio" name="slider" id="menu-btn" />
                <input type="radio" name="slider" id="close-btn" />
                <ul class="nav-links" style="margin-bottom: 0">
                    <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
                    <li class="nav_item"><a href="#">Home</a></li>
                    <li class="nav_item"><a href="#">Services</a></li>
                    <li class="nav_item"><a href="#">Blog</a></li>
                    <li class="nav_item"><a href="#">About</a></li>
                    <li class="nav_item"><a href="{{route('frontend.contact.index')}}">Contact</a></li>
                </ul>
                <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
            </div>
        </nav>

        <section class="container hero_area">
            <div class="row">
                <div class="col-sm-12 col-md-7 left_side position-relative">
                    <div>
                        <h6>WELCOME</h6>
                        <h1>We Provide Effective Lead Generation Services</h1>
                        <p class="py-3 pe-3">Lead generation is the process of producing new sales leads through developing interest in a service or product. Lead Generation services are a fundamental part of growing your business’s revenue.</p>

                        <a href="#" class="button_flat">Contact Us</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 right_side">
                    <div class="mid_div">
                        <img class="img-fluid" src="{{asset('uploads/img/random_box.png')}}" alt="">
                    </div>
                </div>
            </div>
        </section>
    </section>


    <section class="container">
            <div>
                <p>For more than four years, our firm has provided high-quality data entry and other non-voice services to many sectors, with several successful projects. Our team's knowledge and skills may be put to good use in your organization. Take advantage of the following benefits provided by our skilled staff.</p>
            </div>

            <div class="row text-center my-5">
                <div class="col-sm-12 col-md-4">
                    <img src="{{asset('uploads/img/people_connect.png')}}" alt="" class="img-fluid" width="100">
                    <h5>B2B Lead Generation</h5>
                    <p>B2B lead generation is the process of locating the perfect clients for your good or service and then luring them to make a purchase.</p>
                </div>
                <div class="col-sm-12 col-md-4">
                    <img src="{{asset('uploads/img/people_connect.png')}}" alt="" class="img-fluid" width="100">
                    <h5>PPC Lead Generation</h5>
                    <p>For each level of the funnel, manage the messaging. Look into what individuals are looking for and tailor your message to meet those demands.</p>
                </div>
                <div class="col-sm-12 col-md-4">
                    <img src="{{asset('uploads/img/people_connect.png')}}" alt="" class="img-fluid" width="100">
                    <h5>Product Base Lead</h5>
                    <p>One advantage of product-led growth is that when customers buy your product, they are already familiar with how it functions.</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12">

                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="card">
                        <img src="{{asset('uploads/img/post-01.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">B2B Lead Generation</h5>
                            <p class="card-text">B2B lead generation is the process of locating the perfect clients for your good or service and then luring them to make a purchase.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="card">
                        <img src="{{asset('uploads/img/post-02.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">PPC Lead Generation</h5>
                            <p class="card-text">For each level of the funnel, manage the messaging. Look into what individuals are looking for and tailor your message to meet those demands.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="card">
                    <img src="{{asset('uploads/img/post-03.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Product Base Lead</h5>
                        <p class="card-text">One advantage of product-led growth is that when customers buy your product, they are already familiar with how it functions.</p>
                    </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="fix_bg my-5" style="background-image: url({{asset('uploads/img/brian-patrick-tagalog.jpg')}})">
        <div class="container">
            <h2>Why Choose Us For Lead Genaration?</h2>
            <p>Repeat and Regular paying customers are every business’s sweetest dream. You aren’t in business until then you find and retain paying customers. However, achieving this dream isn’t a piece of cake in the park of other million businesses. Thousands of businesses also compete for your target customers. So, how do you get a competitive edge? Do you have any magic lamps to assist you in prospecting and turning prospects into paying customers?</p>
        </div>
    </section>




    <footer>
        <div class="container">
            <p>Copyright &copy; {{date('Y')}} Design by BDOSC | All Rights Reserved</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

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
</body>

</html>
