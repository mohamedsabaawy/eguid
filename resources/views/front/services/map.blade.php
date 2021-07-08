<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Map</title>
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





        .map {
            width: 90%;
            margin: auto;
            margin-bottom: 3%;
            padding-top: 50%;
            position: relative;

        }

        .map iframe {
            position: absolute;
            top: 20;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 90%;
        }


    </style>

</head>

<body>

<!-- header -->
<header class="header" id="header">
    <div class="head-top">
        <div class="site-name">
            <span style="color: var(--dark);">E-GUIDE</span>
        </div>
        <div class="site-nav">
            <span style="color: var(--dark);" id="nav-btn">MENU <i class="fas fa-bars"></i></span>
        </div>
    </div>







    <section class="map-sec">
        <div class="map">
            <iframe src="https://www.google.com/maps/d/embed?mid=12DL2yd6YHpbcaiNGq4gqMd111-0&hl=en" loading="lazy" style=" border: 0px solid;"></iframe>
        </div>
    </section>










</header>
<!-- end of header -->



<!-- side navbar -->
@include('layouts.nav.nav')
<!-- end of side navbar -->

















<!-- footer -->
@include('layouts.nav.footer')
</body>

</html>
