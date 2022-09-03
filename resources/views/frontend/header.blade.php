<style>
    ::-moz-selection {color: red;background: #05be7a !important;}
    ::selection {color: red;background: #05be7a !important;}
    .header .first_row{border-bottom: 1px solid #cbcbcb42;padding: 15px 0 0 0}
    .header .second_row{border-bottom: 1px solid #cbcbcb42;padding-bottom: 10px;}
    .header .first_row .right_side{margin-bottom: -5px;}
    .header .right_side ul {padding-left: 1rem;}
    .header .right_side ul li{color: #fff;display: inline-block;list-style: none;padding-right:10px;border: none;border-right: 1px solid #54595F;}
    .header .right_side ul li a{color: #fff;}
    .header .right_side ul li:last-child{border: none;padding-left:5px;}
    .header .social_icons{float: right;}
    .header .social_icons a{padding: 0 10px;font-size: 16px;color:#fff;}
    @media (max-width:460px){.header .left_side{display: flex;justify-content: center;}}
    .header .second_row .logo{width: 60px;margin-left: 1rem;}
    .header .second_row {display: flex;align-items: center}
    .header .second_row .menu {display: flex;float: right;}
    .header .second_row .menu div{padding: 0 25px;}
    .header .second_row .menu .menu_item a{font-size: 14px;letter-spacing: 1px;font-family: 'Electrolize', sans-serif;font-weight: 600;color: #fff}
    /* .second_row .menu .menu_item a{font-size: 14px;letter-spacing: 1px;font-family: 'Montserrat', sans-serif;font-weight: 600;color: #000} */
    .header .second_row .menu .menu_item:last-child{padding-right: 0;}
    .header .service_item{text-align:center;border-right: 1px solid #cbcbcb}
    .header .service_item:last-child{border-right: none}
    .header .third_row{border-bottom: 1px solid #cbcbcb42;padding: 10px 0 15px 0;}
    .header .third_row .service_item a{font-size: 15px;color: #fff}
</style>


<div id="preloader">
    <div class="spinner">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>


<section class="header container-fluid" style="background-color: #5928e5;">
    <div class="container" style="padding-bottom:10px;">
        <div class="row first_row">
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
        </div>
        <div class="row second_row my-2">
            <div class="col-sm-3 col-md-2">
                <img src="{{asset('uploads/img/logo.png')}}" alt="Logo" class="img-fluid logo">
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


<style>
    #preloader{
        width: 100%;
        height: 100%;
        display: none;
        justify-content: center;
        align-items: center;
        position:sticky;
        background-color: #fff;
    }
  .spinner {
     width: 32px;
     height: 32px;
     animation: spinner-y0fdc1 1.6s infinite ease;
     transform-style: preserve-3d;
  }

  .spinner > div {
     background-color: rgba(150,114,88,0.2);
     height: 100%;
     position: absolute;
     width: 100%;
     border: 1.6px solid #967258;
  }

  .spinner div:nth-of-type(1) {
     transform: translateZ(-16px) rotateY(180deg);
  }

  .spinner div:nth-of-type(2) {
     transform: rotateY(-270deg) translateX(50%);
     transform-origin: top right;
  }

  .spinner div:nth-of-type(3) {
     transform: rotateY(270deg) translateX(-50%);
     transform-origin: center left;
  }

  .spinner div:nth-of-type(4) {
     transform: rotateX(90deg) translateY(-50%);
     transform-origin: top center;
  }

  .spinner div:nth-of-type(5) {
     transform: rotateX(-90deg) translateY(50%);
     transform-origin: bottom center;
  }

  .spinner div:nth-of-type(6) {
     transform: translateZ(16px);
  }

  @keyframes spinner-y0fdc1 {
     0% {
        transform: rotate(45deg) rotateX(-25deg) rotateY(25deg);
     }

     50% {
        transform: rotate(45deg) rotateX(-385deg) rotateY(25deg);
     }

     100% {
        transform: rotate(45deg) rotateX(-385deg) rotateY(385deg);
     }
  }
</style>
