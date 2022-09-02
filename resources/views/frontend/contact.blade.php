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
</head>

<body style="background:#e2dedb;height:100vh;">

    <div class="container my-5">
        <div class="row w-100 justify-content-center">
            <div class="col-8 p-5" style="background:#dbd5d0;border-radius:5px;">

                <h4>Contact Us Today</h4>
                <h3>Your Information</h3>
                <form action="" method="post" class="ui form">
                    <div class="row my-3">
                        <div class="col-sm-12 col-md-6">
                            <div class="ui left icon input w-100">
                                <input type="text" placeholder="Your Name">
                                <i class="fas fa-user icon"></i>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="ui left icon input w-100">
                                <input type="email" placeholder="Email Address">
                                <i class="fas fa-envelope icon"></i>
                            </div>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-sm-12 col-md-6">
                            {{-- <label for="name">Country</label> --}}
                            <div class="ui fluid search selection dropdown" id="country_Name">
                                <input type="hidden" name="country" id="country_Name_Input">
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
                            <div class="ui left icon input w-100">
                                <input type="number" placeholder="Phone">
                                <i class="fas fa-phone icon"></i>
                            </div>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-12">
                            <textarea name="" id="" placeholder="Type Your Message..."></textarea>
                        </div>
                    </div>

                    <h3>Your Information</h3>

                    <div class="col-12">
                        <div class="ui steps">
                            <a class="step">
                                <div class="content">
                                    <div class="title">Step 01</div>
                                    <div class="description">Your Info</div>
                                </div>
                            </a>
                            <a class="active step">
                                <div class="content">
                                    <div class="title">Step 02</div>
                                    <div class="description">About Plan</div>
                                </div>
                            </a>
                            <a class="step">
                                <div class="content">
                                    <div class="title">Step 01</div>
                                    <div class="description">Requirment</div>
                                </div>
                            </a>
                            <a class="step">
                                <div class="content">
                                    <div class="title">Step 01</div>
                                    <div class="description">Leads Quantity</div>
                                </div>
                            </a>
                            <a class="step">
                                <div class="content">
                                    <div class="title">Step 01</div>
                                    <div class="description">Project Duration</div>
                                </div>
                            </a>
                            <a class="step">
                                <div class="content">
                                    <div class="title">Step 01</div>
                                    <div class="description">Your Review</div>
                                </div>
                            </a>
                        </div>
                    </div>


                </form>

            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="{{asset('frontend_assets')}}/dist/semantic/semantic.js"></script>
    <script>
        $('#country_Name').dropdown();

    </script>
</body>

</html>
