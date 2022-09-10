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

    <title>Contact - BDOSC</title>

    <style>
        .ui.steps .step .title {
            font-size: 1em;
            font-weight: 600;
        }

    </style>
</head>

<body style="background:#e2dedb;height:100vh;">

    <div style="float:right;margin-right:200px;padding:20px;"><a href="{{ url()->previous() }}"><i
                class="fas fa-caret-left"></i> Back</a></div>

    <div class="container my-5">
        <div class="row w-100 justify-content-center">
            <div class="col-8 p-5" style="background:#dbd5d0;border-radius:5px;margin-bottom:50px;">
                <h4>Contact Us Today</h4>

                <div class="col-12 mb-3">
                    <div class="ui steps w-100">
                        <a class="active step">
                            <div class="content">
                                <div class="title">Step 01</div>
                                <div class="description">Your Info</div>
                            </div>
                        </a> <a class="step">
                            <div class="content">
                                <div class="title">Step 02</div>
                                <div class="description">Requirments</div>
                            </div>
                        </a> <a class="step">
                            <div class="content">
                                <div class="title">Step 03</div>
                                <div class="description">Quantity</div>
                            </div>
                        </a> <a class="step">
                            <div class="content">
                                <div class="title">Step 04</div>
                                <div class="description">Duration</div>
                            </div>
                        </a> <a class="step">
                            <div class="content">
                                <div class="title">Step 05</div>
                                <div class="description">Your Plan</div>
                            </div>
                        </a> <a class="step">
                            <div class="content">
                                <div class="title">Step 06</div>
                                <div class="description">Invoice</div>
                            </div>
                        </a>
                    </div>
                </div>


                <h3>Your Information</h3>
                <form action="{{route('frontend.contact.post')}}" method="post" class="ui form">
                    @csrf

                    <div class="row my-3">
                        <div class="col-sm-12 col-md-6">
                            <div class="ui small left icon input w-100">
                                <input type="text" name="name" id="name" placeholder="Your Name" required>
                                <i class="fas fa-user icon"></i>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="ui small left icon input w-100">
                                <input type="email" name="email" id="email" placeholder="Email Address" required>
                                <i class="fas fa-envelope icon"></i>
                            </div>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-sm-12 col-md-6">
                            {{-- <label for="name">Country</label> --}}
                            <div class="ui small fluid search selection dropdown" id="country_Name">
                                <input type="hidden" name="user_country" id="country_Name_Input">
                                <i class="dropdown icon"></i>
                                <div class="default text"><i class="fas fa-flag icon"></i> Your Country</div>
                                <div class="menu">
                                    @foreach ($all_countries as $country)
                                    <div class="item" data-value="{{$country->id}}"><i
                                            class="{{Str::lower($country->iso2)}} flag"></i>{{$country->name}}</div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="ui small left icon input w-100">
                                <input type="number" placeholder="Phone">
                                <i class="fas fa-phone icon"></i>
                            </div>
                        </div>
                    </div>

                    @if (empty(Auth::id()))
                    
                    <div class="row my-3">
                        <h6 class="text-center">You can apply for Free Membership ( Leave blank if not interested )</h6>
                        <div class="col-sm-12 col-md-6">
                            <div class="ui small left icon input w-100">
                                <input type="password" name="password" id="password" placeholder="Your password">
                                <i class="fas fa-key icon"></i>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="ui small left icon input w-100">
                                <input type="password" name="con_password" id="con_password" placeholder="Confirm Password">
                                <i class="fas fa-key icon"></i>
                            </div>
                        </div>
                    </div>

                    @endif

                    <h3>Lead Requirements</h3>


                    <div class="row">
                        <div class="col-6 mt-2">
                            <label for="">Country Name</label>
                            <div class="ui small fluid search selection dropdown" id="country_Name2">
                                <input type="hidden" name="country" id="country_Name_Input2">
                                <i class="dropdown icon"></i>
                                <div class="default text"><i class="fas fa-flag icon"></i> Lead Country</div>
                                <div class="menu">
                                    @foreach ($all_countries as $country)
                                    <div class="item" data-value="{{$country->id}}"><i
                                            class="{{Str::lower($country->iso2)}} flag"></i>{{$country->name}}</div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-2">
                            <label for="">City Name</label>
                            <select name="cities" class="ui small fluid search dropdown city_Name" id="city_Name">
                                <option value="">All Cities</option>
                                @foreach ($all_city as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6 mt-2">
                            <label for="">Industry Name</label>
                            <select name="industry" class="ui small fluid search dropdown city_Name" id="industry_Name">
                                <option value="">All Industry</option>
                                @foreach ($all_industry as $industry)
                                <option value="{{$industry->id}}">{{$industry->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6 mt-2">
                            <label for="" class="">Total Leads</label>
                            <div class="col-sm-12 col-md-12">
                                <div class="ui small left icon input w-100">
                                    <input type="text" name="total_leads" placeholder="Total Leads">
                                    <i class="fas fa-dollar-sign icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-2">
                            <div class="row">
                                <label for="" class="my-1">Revenue</label>
                                <div class="col-sm-4 col-md-6">
                                    <div class="ui left icon input w-100">
                                        <input type="text" name="revenue_minimum" placeholder="Minimum">
                                        <i class="fas fa-dollar-sign icon"></i>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-6">
                                    <div class="ui left icon input w-100">
                                        <input type="text" name="revenue_maximum" placeholder="Maximum">
                                        <i class="fas fa-dollar-sign icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-2">
                            <label for="" class="my-1">Project Duration</label>
                            <div class="col-sm-12 col-md-12">
                                <div class="ui left icon input w-100">
                                    <input type="date" name="duration" placeholder="Duration">
                                    <i class="fas fa-calendar-alt icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-12">
                            <label for="" class="my-1">Message</label>
                            <textarea name="message" id="message" placeholder="Type Your Message..." required></textarea>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-6" id="country_box_grp">
                            <label for="" class="my-1">Selected Country</label>
                            <input type="text" name="country_box" value="" id="country_box" style="background-color: transparent;"
                                placeholder="Selected Country">
                        </div>
                        <div class="col-6" id="city_box_grp">
                            <label for="" class="my-1">Selected Cities</label>
                            <input type="text" value="" name="city_box" id="city_box" style="background-color: transparent;"
                                placeholder="Selected Cities">
                        </div>
                    </div>
                    <button type="submit" class="ui basic button">
                        <i class="fas fa-paper-plane icon"></i>
                        Submit
                    </button>
                    {{-- <span class="mx-1">OR</span> --}}
                    <button type="reset" class="ui basic button">
                        <i class="fas fa-sign-in icon"></i>
                        Resel
                    </button>
                </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="{{asset('frontend_assets')}}/dist/semantic/semantic.js"></script>
    <script>
        $('#country_Name').dropdown();
        $('#country_Name2').dropdown();
        $('#city_Name').dropdown();
        $('#industry_Name').dropdown();

        // $('#contact_modal').modal();

    </script>

    <script>
        $country_name = localStorage.getItem("country_name");
        var country_name = localStorage.getItem("country_name");
        var cities_name = localStorage.getItem("cities_name");

        cities_name = cities_name.split(',').join(', ');

        if(country_name != null){$('#country_box').val(country_name)}else{$('#country_box_grp').addClass('d-none')};
        if(cities_name != null){$('#city_box').val(cities_name)}else{$('#city_box_grp').addClass('d-none')};

    </script>

    <script>
        $('#country_Name2').change(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $country = $('#country_Name_Input2').val();
            $.ajax({
                type: 'POST',
                url: '/getcities',
                data: {
                    'country': $country
                },
                success: function (data) {
                    $('#country_box').val(data.country_name);
                    $('#city_Name').html(data.cities);
                }
            });
        })

    </script>

    <script>
        // function localStorageClear() {
        //     localStorage.clear();
        // }

        // localStorageClear();

        $('#con_password').keyup(function(){
            var password = $('#password').val();
            var con_password = $('#con_password').val();
            if(password != con_password){
                $('#con_password').addClass('border border-danger');
            }else{
                $('#con_password').removeClass('border border-danger');
            }
        });


    </script>

</body>

</html>
