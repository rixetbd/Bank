@extends('frontend.final.master')


@section('custom_css')
<style>
    .sec_color{
        color:#000;
    }
    .form_title{font-size: 35px;height: 50px;}
    form{
        box-shadow:  3px 3px 6px #a2a3ab, -3px -3px 6px #ffffff;
        padding: 20px;
    }
    form label{
        color: #000;
        font-weight: 300;
    }
    form input.form-control,
    form select.form-select,
    form textarea.form-control{
        background-color: #ffffff2e;
        border: none;
        border-radius: 0;
        letter-spacing: 1px;
        padding: 10px 15px;
        box-shadow: inset 3px 3px 6px #a2a3ab, inset -3px -3px 6px #ffffff;
    }

    form input:focus,
    form input.form-control:focus,
    form select.form-select:focus,
    form textarea.form-control:focus{
        background-color: #ffffff2e;
        border: none;
        border-radius: 0;
        outline: 0;
        box-shadow: none;
        box-shadow: inset 3px 3px 6px #a2a3ab, inset -3px -3px 6px #ffffff;
    }

    form select.form-select option{
        color: #000;
    }

    form button[type="submit"]{
        color: #000;
        cursor: pointer;
        padding: 5px 5px;
        width: 100%;
        background: #B6FAC5;
        border: 2px solid #fff;
    }
    form button[type="submit"]:hover{
        color: #000;
        background: none;
        border: 2px solid #fff;
    }

    .contact_right h3{
        padding-top: 40px;
        font-size: 70px;
        font-weight: 700;
        font-family: 'Roboto', serif;
    }
    .company_details .row{
        font-size: 16px;
        margin: 25px 0;
    }

    .company_details .row div{
        line-height: 30px;
    }
    .company_details .row .col-1{color: #5f5f5f !important;}
    .company_details a{color: #000}
    .social-links{
        display: flex;
        flex-wrap: wrap;
    }
    .social-links a{
        font-size: 14px;
        /* width: 19%; */
        margin-right: 5px;
        margin-bottom: 5px;
        padding: 5px 10px;
        /* background: #575757; */
        border:2px solid #fff;
        color: #000;
    }
    .social-links a:hover{
        background: #B6FAC5;
        border:2px solid #fff;
        color: #000;
    }
    .social-links a:hover i{
        border-right: 1px solid #fff;
    }
    .social-links a i{
        padding-right: 5px;
        margin-right: 5px;
        border-right: 1px solid #B6FAC5;
    }
    .form-text{min-height: 20px;}
</style>
@endsection

@section('content')
<section style="padding-top:10vh">
    <div style="">
        <div class="container d-flex align-items-center" style="min-height: 90vh;">
            <div class="row" style="border: 1px solid #fff;padding:10px 0;">
                <div class="col-sm-12 col-md-5">
                    <form action="" method="POST">
                        @csrf
                        <div class="Nmb-2">
                            <h5 class="form_title sec_color">CONTACT US</h5>
                            {{-- <label for="name" class="form-label">First Name*</label>
                            <input type="text" class="form-control" name="name"> --}}
                        </div>
                        <div class="row Nmb-2">
                            <div class="col-6">
                                <label for="name_first" class="form-label">First Name</label>
                                <input type="email" id="name_first" name="name_first" class="form-control">
                                <div class="form-text text-danger"><span class="d-none name_first">Please complete this required field.</span></div>
                            </div>
                            <div class="col-6">
                                <label for="name_last" class="form-label">Last Name</label>
                                <input type="text" id="name_last" class="form-control">
                                <div class="form-text text-danger"><span class="d-none name_last">Please complete this required field.</span></div>
                            </div>
                        </div>
                        {{-- <div class="Nmb-2">
                            <label for="name" class="form-label">Last Name*</label>
                            <input type="text" class="form-control" name="name">
                        </div> --}}
                        <div class="Nmb-2">
                            <label for="email" class="form-label">Email*</label>
                            <input type="email" id="email" name="email" class="form-control">
                            <div class="form-text text-danger"><span class="d-none email">Please complete this required field.</span></div>
                        </div>
                        <div class="row Nmb-2">
                            <div class="col-6">
                                <label for="com_name" class="form-label">Company Name</label>
                                <input type="text" id="com_name" name="com_name" class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="phone" class="form-label">Phone (Skype)</label>
                                <input type="text" id="phone" name="phone" class="form-control">
                                <div class="form-text text-danger"><span class="d-none phone">Please complete this required field.</span></div>
                            </div>
                        </div>
                        <div class="Nmb-2">
                            <label for="select_service" class="form-label">Type of Services</label>
                            <select class="form-select" id="select_service" name="select_service" aria-label="Type of Services*">
                                <option value="">-- Select a service</option>
                                <option value="">Discovery Strategy</option>
                                <option value="">User Experience (UX)</option>
                                <option value="">Website Design</option>
                                <option value="">Website Development</option>
                                <option value="">Application Development</option>
                                <option value="">Mobile Apps</option>
                                <option value="">E-Commerce</option>
                                <option value="">Marketing/Advertising</option>
                                <option value="">Social Media</option>
                            </select>
                            <div class="form-text text-danger"><span class="d-none select_service">Please complete this required field.</span></div>
                        </div>
                        <div class="Nmb-2">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" id="message" class="form-control" rows="10"></textarea>
                            <div class="form-text text-danger"><span class="d-none message">Please complete this required field.</span></div>
                        </div>
                        <div class="Nmb-2 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Receive monthly updates covering marketing, strategy, design, and all things digital. No spam, we promise.</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-sm-12 col-md-1 d-flex justify-content-center">
                    <div style="width: 1px;background:#fff;height:100%"></div>
                </div>
                <div class="col-sm-12 col-md-6 contact_right">
                    <h3>PARTICIPATE <br>& EXPERIENCE</h3>

                    <div style="min-height: 230px;">
                        <img src="{{asset('final_front_assets/contact.png')}}" alt="" class="img-fluid" style="opacity: 60%;height:290px">
                    </div>

                    <div class="company_details">
                        {{-- <div class="row">
                            <div class="col-1"><i class="fas fa-mobile-alt fa-2x"></i></div>
                            <div class="col-11">+1 5589 55488 55</div>
                        </div> --}}
                        <div class="row">
                            <div class="col-1"><i class="fas fa-map-marker-alt fa-2x"></i></div>
                            <div class="col-11"><a target="_blank" href="https://www.google.com/maps?q=23.80224743742919,+90.3528942453915">Block-E, Zoo Road, Mirpur 01, Dhaka-1216<br>
                                Bangladesh</a></div>
                        </div>
                        <div class="row">
                            <div class="col-1"><i class="fas fa-envelope fa-2x"></i></div>
                            <div class="col-11"><a href="mailto:contact@bdosc.com">contact@bdosc.com</a></div>
                        </div>
                    </div>

                    <div class="social-links mt-3">
                        <a class="facebook" target="_blank" href="#"><i class="bx bxl-facebook"></i> Facebook</a>
                        <a class="instagram" target="_blank" href="#"><i class="bx bxl-instagram"></i> Instagram</a>
                        <a class="twitter" target="_blank" href="https://twitter.com/bdosc22"><i class="bx bxl-twitter"></i> Twitter</a>
                        <a class="linkedin" target="_blank" href="https://www.linkedin.com/company/bdosc/"><i class="bx bxl-linkedin"></i>Linkedin</a>
                        <a class="whatsapp" target="_blank" href="#"><i class="bx bxl-whatsapp"></i>Whatsapp</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection









@section('custom_js')
<script>

    let IDName = ['name_first','name_last','email', 'phone', 'select_service', 'message'];

    for (let i = 0; i < IDName.length; i++) {
        validityChecker(`#${IDName[i]}`, `.${IDName[i]}`);
        console.log('hi');
    }

    function validityChecker(IDName, ClassName ){
        $(`${IDName}`).keyup(()=>{
            let data = $(`${IDName}`).val();
            if (data == '') {
                $(`${ClassName}`).removeClass('d-none');
            }else{
                $(`${ClassName}`).addClass('d-none');
            }
        });
    }


</script>
@endsection
