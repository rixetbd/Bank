<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>Hello</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;900&display=swap');

        .container{
            max-width: 1110px;
        }
        body{font-family: 'Work Sans', sans-serif;}
        h1{font-family: 'Playfair Display', serif;}
        .nav-link{color: #000;padding-left: 1rem !important;padding-right: 1rem !important;font-size: 14px;}
        .hero_left h1{font-size: 60px;font-weight: 900;}
    </style>

  </head>
  <body style="background:url({{asset('uploads/img/mainbg.jpg')}})">

    <header class="container">

        <nav class="navbar navbar-expand-lg" style="min-height:15.5vh;">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="{{asset('uploads/img/logo3.png')}}" alt="" width="60"/></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                  <a class="nav-link aactive" aria-current="page" href="#">Home</a>
                  <a class="nav-link" href="#">Services</a>
                  <a class="nav-link" href="#">About us</a>
                  <a class="nav-link" href="#">Blog</a>
                  <a class="nav-link" href="#"><strong>Hire us</strong></a>
                </div>
              </div>
            </div>
          </nav>

        <div class="row align-items-center" style="min-height:75.8vh;">
            <div class="col-sm-12 col-md-6 hero_left">
                <h4>Welcome</h4>
                <h1>We Provide Effective Lead Generation Services</h1>
                <p>Lead generation is the process of producing new sales leads through developing interest in a service or product. Lead Generation services are a fundamental part of growing your business’s revenue.</p>
                <a href="#">Contact Us</a>
            </div>
            <div class="col-sm-12 col-md-6 hero_right">
                <img src="{{asset('uploads/img/avater.png')}}" alt="" style="float: right;height:704px;margin-right: 2px;">
            </div>
        </div>
    </header>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
