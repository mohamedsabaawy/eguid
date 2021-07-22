<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Other Sites</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('front/main.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <style>



        .header {
            background: none;

        }



        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #2e2e2e;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }


        .dropdown-content a {
            border-bottom: 0.5px solid rgba(71, 71, 70, 0.3);
        }



        .dropdown:hover .dropdown-content {
            display: block;
        }






        .container {
            display: flex;
            flex-flow: column nowrap;
        }

        .section-grid {
            display: flex;
            padding-left: 25px;
            padding-right: 25px;
        }

        .grid-prod {
            flex: 1 1 auto;
            display: flex;
            flex-flow: row wrap;
        }

        .prod-grid {
            flex: 1 1 25%;
            margin: 2%;
            padding: 12px;
            border: 2px solid #000;
        }

        .prod-grid img {
            width: 100%;
        }

        h3 {
            text-align: center;
            line-height: 1.5;
            letter-spacing: 1px;
            color: #2e2e2e;
        }






        @media (min-width : 320px) and (max-width : 480px) {

            .section-list,
            .buttons {
                display: none;
            }
        }

        #link {
            text-decoration: none;
            color: inherit;
        }

    </style>

</head>

<body>

<!-- header -->
<header class="header" id="header">
    <div class="head-top">
        <div class="site-name">
            <span onclick="window.location.href='{{route('front.welcome')}}'" style="color: var(--dark);">E-GUIDE</span>
        </div>
        <div class="site-nav">
            <span style="color: var(--dark);" id="nav-btn">MENU <i class="fas fa-bars"></i></span>
        </div>
    </div>










    <div class="container">
        <div id="div1">
            <section class="section-grid">
                <div class="grid-prod">

                    <div class="prod-grid">
                        <a class="link" href="https://www.egyptair.com/en/Pages/HomePage.aspx">
                            <div>
                                <img src="{{asset('front/images/egyptair.png')}}">
                                <h3>Egyptair Website</h3>
                            </div>
                        </a>
                    </div>

                    <div class="prod-grid">
                        <a class="link" href="https://www.airbnb.com/a/stays/Egypt?af=43720035&c=.pi0.pk62676069571_388144062669_c_352672703683&sem_position=&sem_target=kwd-352672703683&location_of_interest=&location_physical=1005390&localized_ghost=true">
                            <div>
                                <img src="{{asset('front/images/airbnb.png')}}">
                                <h3>Airbnb Website</h3>
                            </div>
                        </a>
                    </div>

                </div>
            </section>
        </div>
    </div>









</header>
<!-- end of header -->



<!-- side navbar -->
@include('layouts.nav.nav')
<!-- end of side navbar -->


<!-- footer -->
@include('layouts.nav.footer')
</body>

</html>
