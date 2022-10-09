@extends('frontend.final.master2')

@section('custom_css')
<link href="http://fonts.cdnfonts.com/css/neue-haas-grotesk-display-pro" rel="stylesheet">
<style>
    mark{
        background-color: #adff2f;
    }
    section.hero_area {
        font-family: 'Neue Haas Grotesk Display Pro', sans-serif !important;
        background: #fff;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #000;
    }

    section.hero_area h1,
    section.hero_area h3,
    section.hero_area h4,
    section.hero_area h5 {
        letter-spacing: 0;
        font-weight: 800;
        font-family: 'Neue Haas Grotesk Display Pro', sans-serif !important;
    }

    section.hero_area h1 {
        font-size: 15rem;
        line-height: 30px;
        margin-left: 150px;
        padding-top: 220px !important;
    }
    section.hero_area h1.c_name span.small{
        font-size: 25px;
    }

    section.hero_area h3 {
        font-size: 75px;
        line-height: 90px;
    }

    section.hero_area h4 {
        font-size: 15rem;
        line-height: 160px;
    }

    section.hero_area h5.first {
        font-size: 25px;
        line-height: 50px;
    }

    section.hero_area h5.last {
        font-size: 45px;
        line-height: 50px;
    }

    .animate_right_a {
        padding-left: 15%;
        transition: 1s ease;
    }

    .animate_right_a_none {
        padding-left: 0;
        transition: 1s ease;
    }

    .animate_left_a {
        padding-right: 15%;
        transition: 1s ease;
    }

    .animate_left_a_none {
        padding-right: 0;
        transition: 1s ease;
    }

    /* Scroll Mouse Icon || Start */
    .mouse {
        float: right;
        background: #4e5559 linear-gradient(transparent 0%, transparent 50%, #fff 50%, #fff 100%);
        position: relative;
        width: 52px;
        height: 88px;
        border-radius: 100px;
        background-size: 100% 200%;
        animation: colorSlide 5s linear infinite, nudgeMouse 5s ease-out infinite;
    }

    .mouse:before,
    .mouse:after {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
    }

    .mouse:before {
        width: 46px;
        height: 82px;
        background-color: #fff;
        border-radius: 100px;
    }

    .mouse:after {
        background-color: #000;
        width: 10px;
        height: 10px;
        border-radius: 100%;
        animation: trackBallSlide 5s linear infinite;
    }

    @keyframes colorSlide {
        0% {
            background-position: 0% 100%;
        }

        20% {
            background-position: 0% 0%;
        }

        21% {
            background-color: #4e5559;
        }

        29.99% {
            background-color: #adff2f;
            background-position: 0% 0%;
        }

        30% {
            background-color: #4e5559;
            background-position: 0% 100%;
        }

        50% {
            background-position: 0% 0%;
        }

        51% {
            background-color: #4e5559;
        }

        59% {
            background-color: #adff2f;
            background-position: 0% 0%;
        }

        60% {
            background-color: #4e5559;
            background-position: 0% 100%;
        }

        80% {
            background-position: 0% 0%;
        }

        81% {
            background-color: #4e5559;
        }

        90%,
        100% {
            background-color: #adff2f;
        }
    }

    @keyframes trackBallSlide {
        0% {
            opacity: 1;
            transform: scale(1) translateY(-20px);
        }

        6% {
            opacity: 1;
            transform: scale(0.9) translateY(5px);
        }

        14% {
            opacity: 0;
            transform: scale(0.4) translateY(40px);
        }

        15%,
        19% {
            opacity: 0;
            transform: scale(0.4) translateY(-20px);
        }

        28%,
        29.99% {
            opacity: 1;
            transform: scale(1) translateY(-20px);
        }

        30% {
            opacity: 1;
            transform: scale(1) translateY(-20px);
        }

        36% {
            opacity: 1;
            transform: scale(0.9) translateY(5px);
        }

        44% {
            opacity: 0;
            transform: scale(0.4) translateY(40px);
        }

        45%,
        49% {
            opacity: 0;
            transform: scale(0.4) translateY(-20px);
        }

        58%,
        59.99% {
            opacity: 1;
            transform: scale(1) translateY(-20px);
        }

        60% {
            opacity: 1;
            transform: scale(1) translateY(-20px);
        }

        66% {
            opacity: 1;
            transform: scale(0.9) translateY(5px);
        }

        74% {
            opacity: 0;
            transform: scale(0.4) translateY(40px);
        }

        75%,
        79% {
            opacity: 0;
            transform: scale(0.4) translateY(-20px);
        }

        88%,
        100% {
            opacity: 1;
            transform: scale(1) translateY(-20px);
        }
    }

    @keyframes nudgeMouse {
        0% {
            transform: translateY(0);
        }

        20% {
            transform: translateY(8px);
        }

        30% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(8px);
        }

        60% {
            transform: translateY(0);
        }

        80% {
            transform: translateY(8px);
        }

        90% {
            transform: translateY(0);
        }
    }

    @keyframes nudgeText {
        0% {
            transform: translateY(0);
        }

        20% {
            transform: translateY(2px);
        }

        30% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(2px);
        }

        60% {
            transform: translateY(0);
        }

        80% {
            transform: translateY(2px);
        }

        90% {
            transform: translateY(0);
        }
    }

    @keyframes colorText {
        21% {
            color: #4e5559;
        }

        30% {
            color: #fff;
        }

        51% {
            color: #4e5559;
        }

        60% {
            color: #fff;
        }

        81% {
            color: #4e5559;
        }

        90% {
            color: #fff;
        }
    }



    /* Scroll Mouse Icon || END */

</style>
@endsection

@section('content')

<section class="hero_area">
    <div class="container">
        <h1 class="c_name text-center animate_right pt-5">D<span style="color: greenyellow;">i</span>Marz <span class="small">PROVIDES</span></h1>
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-12">
                {{-- <h5 class="text-center first">PROVIDES BEST</h5> --}}
                {{-- <h3 class="text-center">BUSINESS PROCESS</h3> --}}
            </div>
            {{-- <div class="col-sm-12 col-md-4">
            <p>We build engaging user experience for early-stage startups by connecting the dots between users’ needs and the client’s business model.</p>
        </div> --}}
            <div class="col-sm-12 col-md-12">
                <h4 class="text-left animate_right">BUSINESS</h4>
                <h4 class="text-end animate_left">PROCESS</h4>
                <h5 class="text-center last animate_right"><mark>OUTSOURCING</mark> SERVICES</h5>
            </div>
        </div>

        <div class="col-12 text-center pt-5">
            {{-- <div class="scroll-downs">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
            </div> --}}

            <div class="mouse"></div>
        </div>
    </div>
</section>

@endsection








@section('custom_js')
<script>
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 5) {
            $('.animate_right').removeClass('animate_right_a_none');
            $('.animate_right').addClass('animate_right_a');
            $('.animate_left').removeClass('animate_left_a_none');
            $('.animate_left').addClass('animate_left_a');
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $('.animate_right').removeClass('animate_right_a');
            $('.animate_right').addClass('animate_right_a_none');
            $('.animate_left').removeClass('animate_left_a');
            $('.animate_left').addClass('animate_left_a_none');
        }
    });

</script>
@endsection
