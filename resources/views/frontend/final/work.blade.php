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

/* FAQ Section || Stat */
.accordion-button{color:#1b1b1b;background-color: transparent;font-family: 'Nunito', sans-serif;}
.accordion-item{border: none;border-top: 1px solid #919191 !important;border-radius: 0;background-color: transparent;}
.accordion-button:focus{color:#1b1b1b;box-shadow: none;}
.accordion-button:not(.collapsed){color: #34a589;background-color:transparent;box-shadow: none;}
.accordion-item:last-of-type, .accordion-item:last-of-type .accordion-collapse{border-radius: 0;}
.accordion-header button.accordion-button {font-size: 30px;padding: 25px 0;}
.accordion-header button.accordion-button span{width: 100px;font-size: 20px}
.accordion-body{font-size: 15px;letter-spacing: 1px;padding-left: 100px;padding-bottom: 40px;}
.accordion-item:first-of-type{border-radius: 0;}
.faq_section .faq_section_heading{font-size: 2.5rem;position: relative;}
.faq_section .faq_section_heading::after{content: '';
    width: 10%;
    height: 1px;
    background: #888888;
    bottom: -5px;
    position: absolute;
    left: 45%;
}

/* FAQ Section || End */

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
                        <h4>INCREASE THE AUDIENCE</h4>
                        <p>Looking to enhance your digital platform? Contact with us today for a first free consultation to determine the objectives of the transistion and decide the next steps of your digital journey.</p>

                    </div>
                    <h3 data-index="1" class="spinx-acco-title"><i class='bx bx-user'></i>Agreement</h3>
                    <div class="spinx-acco-content" style="display: none;">
                        {{-- <h4>INTELLIGENCE &amp; EXPERIENCE</h4> --}}
                        <p>We love to discuss about the project in details before making up an agreement. After a successful discussion we go for an agreement with you.</p>

                    </div>
                    <h3 data-index="2" class="spinx-acco-title"><i class='bx bx-user'></i>Final Strategy</h3>
                    <div class="spinx-acco-content" style="display: none;">
                        {{-- <h4>THE PAST &amp; THE FUTURE</h4> --}}
                        <p>The initial step after getting the project is research & planning to make a final strategy. Our experts analyze your project to find the most appropriate method for the project.</p>

                    </div>
                    <h3 data-index="3" class="spinx-acco-title"><i class='bx bx-user'></i>Implementation</h3>
                    <div class="spinx-acco-content" style="display: none;">
                        {{-- <h4>THE PAST &amp; THE FUTURE</h4> --}}
                        <p>An essential part of the Work process  is implementation. While technology is a main factor, we are also focusing on the people and your enterprise culture to make sure the project is successful.</p>
                    </div>
                    <h3 data-index="4" class="spinx-acco-title"><i class='bx bx-user'></i>Quality check</h3>
                    <div class="spinx-acco-content" style="display: none;">
                        {{-- <h4>THE PAST &amp; THE FUTURE</h4> --}}
                        <p>We always try to maintain the best quality for submitting error-free tasks. In this case, we maintain a strict quality check for your Desire services.</p>
                    </div>
                    <h3 data-index="5" class="spinx-acco-title"><i class='bx bx-user'></i>Delivery</h3>
                    <div class="spinx-acco-content" style="display: none;">
                        {{-- <h4>THE PAST &amp; THE FUTURE</h4> --}}
                        <p>The final step is here ; After final checking we deliver your project. We always assure the best quality service for you.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row faq_section">
            <div class="col-sm-12 col-md-12">
                <h3 class="text-center faq_section_heading">FAQ</h3>
            </div>
            <div class="col-sm-12 col-md-12 my-5">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span>FAQ</span> What do i need to provide you to get started?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                You need to provide us images in any common format (JPG, JPEG, PNG, RAW, TIF, PSD etc.).
                                If
                                you give us a good resolution image we will receive a great result. Provide us the
                                instructions for the image to edit so that we can provide you the expected result.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span>FAQ</span> Do you offer super fast delivery?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes, we have a team, if you need urgent our all members will work for you.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span>FAQ</span> I have complex images like jewelry, do you rate same
                                price?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                For complex image like jewelry, plants, needs lots of time. We charge a little bit more
                                for
                                this type of complex images. Please let us know before placing your order & give us
                                sample
                                so that we can give you a reasonable price.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                <span>FAQ</span> I have complex images like jewelry, do you rate same
                                price?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                For complex image like jewelry, plants, needs lots of time. We charge a little bit more
                                for
                                this type of complex images. Please let us know before placing your order & give us
                                sample
                                so that we can give you a reasonable price.
                            </div>
                        </div>
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
