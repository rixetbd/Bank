<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Poppins);

        /*========COLOR PRESETS=========*/
        /*============NAVBAR============*/
        nav {
            font-family: 'Poppins', sans-serif;
            line-height: 1;
            text-transform: uppercase;
            width: 100%;
            height: 75px;
            font-size: 15px;
            position: relative;
        }

        @media (min-width:500px){
            nav ul{
                float: right;
            }
        }

        nav :before,
        nav :after {
            content: " ";
            display: table;
        }

        nav :after {
            clear: both;
            /*============FIRST LEVEL============*/
        }

        nav ul {
            /* background: #efefef; */
            /* box-shadow: 0px 0px 9px rgba(0, 0, 0, 0.15); */
            list-style: none;
            position: relative;
        }

        nav>ul {
            padding: 0;
            margin-top: 0px;
        }

        nav ul:after {
            content: "";
            clear: both;
            display: block;
        }

        nav li {
            float: left;
            position: relative;
        }

        nav li a {
            list-style: none;
            text-decoration: none;
            padding: 20px;
            display: block;
            color: #000000;
        }

        nav li:hover,
        nav .submenu.openSub {
            background: #4b545f;
            cursor: pointer;
        }

        nav li:hover a,
        nav .submenu.openSub {
            color: #fff;
        }

        nav .submenu-button {
            float: right;
            padding-left: 5px;
            position: relative;
        }

        nav .submenu-button::before {
            content: '';
            position: absolute;
            top: 5px;
            display: block;
            width: 9px;
            height: 1px;
            background: #757575;
            z-index: 99;
            -webkit-transition: all 0.3s;
            -webkit-transition: all 0.3s;
        }

        nav .submenu-button::after {
            content: '';
            position: absolute;
            left: 9px;
            top: 1px;
            display: block;
            width: 1px;
            height: 9px;
            -webkit-transition: all 0.3s;
            -webkit-transition: all 0.3s;
            background: #757575;
            z-index: 99;
        }

        nav li:hover .submenu-button::before,
        nav li:hover .submenu-button::after,
        nav .active .submenu-button::before,
        nav .active .submenu-button::after {
            background: #fff;
        }

        .submenu.openSub a {
            color: #fff;
        }

        /*==============MINUS SYMBOL==========*/
        /*==============CLOSE SYMBOL==========*/
        .openSub .submenu-button::after,
        .openSub .submenu-button::before {
            -webkit-transform: rotate(135deg);
        }

        .toggleMenu {
            display: none;
            list-style: none;
            position: relative;
            line-height: 1;
            font-size: 12px;
            text-align: center;
            text-transform: uppercase;
            padding: 20px;
            margin: 0;
            border: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            background-color: #efefef;
            color: #757575;
            cursor: pointer;
        }

        .toggleMenu::after {
            content: '';
            position: absolute;
            top: 20px;
            right: 20px;
            display: block;
            width: 15px;
            height: 2px;
            background: #000000;
        }

        .toggleMenu::before {
            content: '';
            position: absolute;
            top: 25px;
            right: 20px;
            display: block;
            width: 15px;
            height: 3px;
            border-top: 2px solid #000000;
            border-bottom: 2px solid #000000;
        }

        /*============SECOND LEVEL============*/
        .submenu ul {
            display: none;
            background: #626d7c;
            padding: 0;
            position: absolute;
            top: 100%;
        }

        .submenu li {
            float: none;
            border-top: 1px solid #6d7a8a;
            border-bottom: 1px solid #56616d;
            position: relative;
        }

        .submenu li a {
            padding: 15px 20px;
            width: 120px;
            color: #fff;
        }

        .submenu li a:hover {
            background: #4b545f;
        }

        /*============THIRD LEVEL============*/
        /*ul ul ul {
 position: absolute;
 left: 100%;
 top:0;
 }*/
        /*============MAKING RESPONSIVE============*/
        @media screen and (max-width: 600px) {
            .toggleMenu {
                display: block;
            }

            .submenu ul {
                position: relative;
            }

            .submenu li a {
                padding: 20px;
            }

            .submenu-button {
                padding-right: 10px;
            }

            nav ul {
                display: none;
            }

            nav>ul {
                border-top: 1px solid rgba(120, 120, 120, 0.15);
            }

            nav ul li {
                float: none;
                border-top: 1px solid rgba(120, 120, 120, 0.15);
            }

            nav li:hover .submenu-button::after,
            nav li:hover .submenu-button::before,
            nav .active .submenu-button::before,
            nav .active .submenu-button::after {
                background-color: #fff;
            }
        }

    </style>
</head>

<body>

    {{-- style="background: #374147;" --}}

    <header class="container mt-3">
        <div class="row justify-content-between">
            <div class="col-sm-12 col-md-2"><img src="{{asset('uploads/img/logo.png')}}" alt="Logo" width="50"></div>
            <nav class="col-sm-12 col-md-10" id="navbarMenu">
                <div class="toggleMenu text-white">Menu</div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li class="submenu"><a href="#">Tutorials</a>
                        <ul>
                            <li><a href="#">Photoshop</a></li>
                            <li><a href="#">CSS</a></li>
                        </ul>
                    </li>
                    <li class="submenu"><a href="#">Articles</a>
                        <ul>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">User Experience</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Inspiration</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>

    <script>
        //DYNAMIC SUBMENU CLASS SYMBOLS
        // $("#navbarMenu ul li").has( "ul" ).each(function( index ) {
        //     $(this).toggleClass('submenu');
        // });
        $("#navbarMenu ul .submenu > a").append('<span class="submenu-button"></span>');

        //OPEN TOGGLE MENU ON BREAKPOINT MEDIA QUERY
        $(".toggleMenu").click(function (e) {
            $("nav > ul").slideToggle();
            e.preventDefault();
        });

        //TO PREVENT MENU CLOSE ON CLICK IN SUBMENU
        $(".submenu ul li").click(function (e) {
            e.stopPropagation();
        });

        //CLICK ON SUBMENU LINK
        $(".submenu").click(function (e) {
            //CLOSE OPEN SUBMENU
            if ($(this).hasClass("active")) {
                $("#navbarMenu ul li").removeClass('active');
                $('#navbarMenu ul li ul').slideUp();
            } else {
                $("#navbarMenu ul li").removeClass('active');
                $("#navbarMenu ul li ul").slideUp();
                $(this).addClass("active");
                $(this).find('ul').stop().slideToggle();
                e.stopPropagation();
            }
            $("#navbarMenu ul li").removeClass('openSub');
            $(this).addClass('openSub');

        });

        $("body, html").click(function () {
            $("#navbarMenu ul li").removeClass('active openSub');
            $('#navbarMenu ul li ul').slideUp();
        });

    </script>
</body>

</html>
