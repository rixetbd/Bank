@extends('frontend.final.master')


@section('custom_css')
<style>
.spinx-connect {
    color: #000;
    display: block;
    float: right;
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    line-height: 26px;
    margin: 80px 0 0;
    /* max-width: 471px; */
    position: relative;
    width: 100%
}

.spinx-connect:before {
    background: #76ca89;
    content: "";
    position: absolute;
    top: 32px;
    bottom: -8px;
    left: 34px;
    width: 1px;
    z-index: 0
}

.spinx-connect:after {
    background: url('./final_front_assets/connect-arrow.png') no-repeat 0 0;
    content: "";
    position: absolute;
    bottom: -48px;
    left: 15px;
    height: 27px;
    width: 40px;
    z-index: 0
}

.spinx-connect .spinx-acco-content {
    display: none;
    overflow: hidden;
    padding: 15px 0 10px 100px;
    width: 100%
}

.spinx-connect h3.spinx-acco-title {
    cursor: pointer;
    color: #9d9d9d;
    font-family: 'Poppins', sans-serif;
    font-size: 24px;
    line-height: 55px;
    text-transform: uppercase;
    margin: 0;
    overflow: hidden;
    padding: 0;
    position: relative;
    -webkit-transition: all .5s ease-in-out;
    -moz-transition: all .5s ease-in-out;
    -o-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out
}

.spinx-connect h3.spinx-acco-title.current {
    font-size: 50px;
    line-height: 69px;
    color: #76ca89
}

.spinx-connect h3.spinx-acco-title i {
    border-radius: 100%;
    display: block;
    float: left;
    margin-right: 30px;
    position: relative;
    -webkit-transition: all .5s ease-in-out;
    -moz-transition: all .5s ease-in-out;
    -o-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;
    height: 55px;
    width: 69px;
    z-index: 99
}

.spinx-connect h3.spinx-acco-title i:after,
.spinx-connect h3.spinx-acco-title i:before {
    content: "";
    display: block;
    margin: auto;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0
}

.spinx-connect h3.spinx-acco-title i:after {
    background: #9d9d9d;
    border-radius: 100%;
    height: 11px;
    width: 11px
}

.spinx-connect h3.spinx-acco-title.current i {
    background: #a2f0b3;
    height: 69px
}

.spinx-connect h3.spinx-acco-title.current i:before {
    background: url('./final_front_assets/connect-arrow.png') no-repeat;
    z-index: 9
}

.spinx-connect h3.spinx-acco-title.current i:before {
    background-position: 0 0;
    height: 27px;
    width: 27px
}

.spinx-connect h3.spinx-acco-title.current i:before {
    background-position: -29px 0;
    height: 29px;
    width: 31px
}

.spinx-connect h3.spinx-acco-title.current i:before {
    background-position: -62px 0;
    height: 28px;
    width: 32px
}

.spinx-connect h4 {
    color: #000;
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    line-height: normal;
    text-transform: uppercase;
    margin: 0 0 15px
}

.spinx-connect p {
    margin-bottom: 20px
}

.spinx-connect {
    margin: 40px 0 0
}

.spinx-connect h3.spinx-acco-title.current {
    font-size: 36px
}

</style>
@endsection

@section('content')
<section style="padding-top:10vh">
    <div class="container">
        <div class="row align-items-center" style="min-height: 80vh;">
            <div class="col-sm-12 col-md-7">
                <img src="{{asset('final_front_assets/work-process.png')}}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-12 col-md-5 my-3">
                <div class="spinx-connect">
                    <h3 data-index="0" class="spinx-acco-title current"><i class='bx bx-user'></i>Connect</h3>
                    <div class="spinx-acco-content" style="display: block;">
                        <h4>YOU &amp; SPINX &amp; THE AUDIENCE</h4>
                        <p>We believe the most effective connections are emotional. People know it when they feel it.
                        </p>

                    </div>
                    <h3 data-index="1" class="spinx-acco-title"><i class='bx bx-user'></i>Discussion</h3>
                    <div class="spinx-acco-content" style="display: none;">
                        <h4>INTELLIGENCE &amp; EXPERIENCE</h4>
                        <p>Our professional Los Angeles web design team collaborates to develop the best strategies and
                            inspired
                            solutions for your brand.</p>

                    </div>
                    <h3 data-index="2" class="spinx-acco-title"><i class='bx bx-user'></i>Research</h3>
                    <div class="spinx-acco-content" style="display: none;">
                        <h4>THE PAST &amp; THE FUTURE</h4>
                        <p>What matters to us is not just what we’ve done in the past, but what we’ll be doing next. We
                            believe
                            in looking towards the future with our clients.</p>

                    </div>
                    <h3 data-index="3" class="spinx-acco-title"><i class='bx bx-user'></i>Working</h3>
                    <div class="spinx-acco-content" style="display: none;">
                        <h4>THE PAST &amp; THE FUTURE</h4>
                        <p>What matters to us is not just what we’ve done in the past, but what we’ll be doing next. We
                            believe
                            in looking towards the future with our clients.</p>
                    </div>
                    <h3 data-index="4" class="spinx-acco-title"><i class='bx bx-user'></i>Delivery</h3>
                    <div class="spinx-acco-content" style="display: none;">
                        <h4>THE PAST &amp; THE FUTURE</h4>
                        <p>What matters to us is not just what we’ve done in the past, but what we’ll be doing next. We
                            believe
                            in looking towards the future with our clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection









@section('custom_js')
<script>
    $(document).ready(function () {
    /*** Home: SPINX Connect accordion ***/
    var headerHeight = $("header").outerHeight();
    $(".spinx-acco-content").hide();
    $(".spinx-acco-content:first").show();
    $("h3.spinx-acco-title").click(function () {
        accoTitle = $(this).outerHeight();
        if ($(this).is(".current")) {
            /* $(this).removeClass("current");
            $(this).next(".spinx-acco-content").slideUp(400);*/
        } else {
            $(".spinx-acco-content").slideUp(500);
            $("h3.spinx-acco-title").removeClass("current");
            $(this).addClass("current");
            $(this).next(".spinx-acco-content").slideDown(500);
            /* $(this).next(".spinx-acco-content").slideDown(function () { $('html, body').animate({ scrollTop: $(this).offset().top - headerHeight - accoTitle }, '500'); });*/
        }
    });
});
</script>
@endsection
