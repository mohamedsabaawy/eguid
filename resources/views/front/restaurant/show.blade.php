<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$restaurant->name}}</title>
    <meta name="description">
    <meta name="viewport" content="width = device-width, initial-scale = 1, shrink-to-fit = no">
    <link rel="stylesheet" href="{{asset('front/main.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">


    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Cabin|Herr+Von+Muellerhoff|Source+Sans+Pro" rel="stylesheet">
    <!--Fonts-->


    <style>
        /*Start Global*/

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


        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 12px;
        }

        a {
            text-decoration: none;
        }

        img {
            max-width: 100%;
        }

        h2 {
            font-family: 'Herr Von Muellerhoff', cursive;
            font-size: 100px;
            font-weight: normal;
            margin: 0 0 -55px;
        }

        h1,
        h3 {
            font-family: "Source Code Pro", sans-serif;
            font-size: 47px;
            font-weight: bold;
            letter-spacing: 9.4px;
            margin: 0 0 15px;
        }

        p {
            color: #515151;
            line-height: 27px;
        }

        /*End Global*/

        /*Start Mutual*/

        h2 {
            color: #a96700;
        }

        header .navigation-bar ul li,
        header .text,
        .about-us .text,
        .reservation .text,
        .menu .box-model,
        .menu .text,
        .fixed-image .text,
        footer,
        .copyright,
        .contact .text i {
            text-align: center;
        }

        .about-us,
        .reservation,
        .about-us .image-container,
        .reservation .image-container,
        .menu,
        .menu .menu-image-container {
            display: flex;
        }

        header,
        header .text,
        .recipes,
        .menu .box-image-container,
        .fixed-image .text {
            position: relative;
        }

        .recipes .text,
        .menu .box-image-container .box-image {
            position: absolute;
        }

        .recipes .text,
        .fixed-image .text,
        .menu .box-image-container,
        .menu .box-image-container .box-image {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        header nav,
        header .navigation-bar a:hover .underline,
        header .navigation-bar li.active .underline,
        .menu .box-model,
        .menu .box-image-container,
        .menu .box-image-container .box-image {
            width: 100%;
        }

        button,
        .dots > div,
        header nav .toggle,
        header .arrow-down,
        .menu .box-model .close,
        .menu .box-model .arrow .arrow-right,
        .menu .box-model .arrow .arrow-left,
        .menu .menu-image-container .image img,
        footer .newsletter i,
        .copyright .arrow-up {
            cursor: pointer;
        }

        .dots .active,
        header nav.active,
        header nav.active .toggle.active span,
        header nav .toggle span,
        header .navigation-bar .underline,
        header .text .arrow .left,
        header .text .arrow .right,
        header .text .button button,
        .contact form button {
            background-color: #fff;
        }

        h1,
        h3,
        header .navigation-bar a,
        header .text span,
        .menu .box-model .close:hover,
        footer .text h2,
        footer .text p,
        footer .social-media .links a,
        .contact .text i,
        .contact .form form button {
            color: #fff;
        }

        /*End Mutual*/


        /*Start Home Page*/

        /*Start Header*/
        header {
            height: calc(100vh - 22px);
            background-size: cover;
            background: url("https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988534/header.jpg") fixed bottom;
            padding: 20px 70px;
        }

        header .text {
            top: 24%;
        }

        header .text h1 {
            margin-bottom: 0;
        }

        /*End Header*/

        /*Start About-Us*/
        .about-us,
        .reservation {
            padding: 60px;
        }

        .about-us .text,
        .reservation .text {
            flex: 50%;
            padding: 40px 52px 0 0;
        }

        .about-us .text h3,
        .reservation .text h3 {
            color: #000;
        }

        .about-us .text,
        .reservation .text .fa-asterisk {
            color: #9a9998;
        }

        .about-us .image-container,
        .reservation .image-container {
            flex: 50%;
        }

        .about-us .image,
        .reservation .image {
            margin-left: 20px;
        }

        /*End About-Us*/

        /*Start Recipes*/
        .recipes .image {
            height: 350px;
            background: url("https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988529/three-col-1.jpg") fixed center;
            background-size: cover;
        }

        /*End Recipes*/

        /*Start Menu*/
        .menu {
            padding: 60px;
        }

        .menu .box-model {
            display: none;
            position: fixed;
            height: 100%;
            top: 0;
            z-index: 20;
            background-color: rgba(0, 0, 0, .7);
        }

        .menu .box-model.active {
            display: block;
        }

        .menu .box-model.active body {
            overflow: hidden;
        }

        .menu .box-model .close {
            color: #ccc;
            right: 25px;
            top: 10px;
            z-index: 20;
        }

        .menu .box-model .arrow .arrow-right,
        .menu .box-model .arrow .arrow-left {
            width: 40px;
            height: 40px;
            right: 20px;
            top: 50%;
            border-right: 2px solid #fff;
            border-top: 2px solid #fff;
            transform: rotate(45deg);
            z-index: 20;
        }

        .menu .box-model .arrow .arrow-left {
            left: 20px;
            transform: rotate(-135deg);
        }

        .menu .box-image-container {
            height: 100%;
        }

        .menu .box-image-container .box-image img.active {
            animation: scale .5s;
        }

        @keyframes scale {
            from {
                transform: scale(0, 0)
            }

            to {
                transform: scale(1, 1)
            }
        }

        .menu .menu-image-container {
            flex-wrap: wrap;
            flex: 60%;
        }

        .menu .menu-image-container .image {
            margin: 0 20px 20px 0;
            flex: calc(50% - 40px);
        }

        .menu .text {
            flex: 55%;
            padding: 40px 0 0 62px;
        }

        .menu .text h3 {
            color: #000;;
        }

        .menu .text .fa-asterisk {
            color: #9a9998;
        }

        /*End Menu*/

        /*Start fixed-image*/
        .fixed-image {
            background: url("https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988533/frontpage-menu.jpg") fixed center;
            background-size: cover;
            height: 400px;
        }

        /*End fixed-image*/


        /*End Home Page*/


        /*Start Home Page Responsive*/

        @media (max-width: 1200px) {

            .menu,
            .about-us,
            .reservation {
                padding: 60px 40px;
            }

            .about-us .text,
            .reservation .text {
                padding: 0 32px 0 0;
            }

            .about-us .image-container,
            .reservation .image-container {
                align-items: center;
            }

            .menu .text {
                padding: 0 0 0 32px;
            }
        }

        @media (max-width: 992px) {
            body {
                padding: 0;
            }

            header {
                height: calc(100vh - 10px);
            }

            .about-us {
                display: block;
                padding-top: 50px;
            }

            .about-us .text,
            .reservation .text {
                padding: 0 0 40px;
            }

            .about-us .image-container .image1,
            .reservation .image-container .image1 {
                margin-left: 0;
            }

            .menu {
                display: block;
                padding: 60px 20px 60px 40px;
            }

            .menu .text {
                padding: 20px 20px 0 0;
            }

            .reservation {
                display: block;
                padding: 30px 20px 60px;
            }

        }


        @media (max-width: 576px) {

            h3,
            h1 {
                font-size: 40px;
            }

            h2 {
                font-size: 90px
            }

            header {
                padding: 0;
            }

            .about-us,
            .reservation {
                padding: 60px 20px;
            }

            .menu {
                padding: 60px 0 60px 20px;
            }
        }

        /*End Home Page Responsive*/


        .booking {
            width: 60%;
            margin: auto;
            padding-top: 100px;
        }


        label {
            color: #fff;
        }

        input {
            background: transparent;
            color: #fff;
            outline: solid 1px #fff;
        }


        .change-to-white {
            color: #fff;
        }


        table {
            width: 90%;
            margin: 100px auto;
            table-layout: fixed;
            border-collapse: collapse;
        }

        td {
            padding: 1em 0 0 0;
            vertical-align: bottom;
            background-image: radial-gradient(black 1px, white 0px);
            background-size: 8px 8px;
            background-repeat: repeat-x;
            background-position: left bottom;
        }

        td span {
            background-color: #fff;
        }

        td:first-child {
            text-align: left;
            font-weight: 700;
        }

        td:first-child span {
            padding-right: .25em;
        }

        td:last-child {
            text-align: right;
            width: 3em;
        }

        td:last-child span {
            padding-left: .25em;
        }


        #see-menu {
            text-align: center;
        }
    </style>


</head>

<body class="stop-scroll">


<!--Start Header-->
<header>


    <div class="head-top">
        <div class="site-name">
            <span class="change-to-white">E-GUIDE</span>
        </div>
        <div class="site-nav">
            <span class="change-to-white" id="nav-btn">MENU <i class="fas fa-bars"></i></span>
        </div>
    </div>


    <div class="text">
        <h2>Welcome to</h2>
        <h1>{{$restaurant->name}}</h1>
    </div>
</header>
<!--End Header-->


<!-- side navbar -->
@include('layouts.nav.nav')

<!-- end of side navbar -->


<!--start About Us-->
<div class="about-us">
    <div class="text">
        <h2>Discover</h2>
        <h3>Our Story</h3>
        <p>We are a restaurant and coffee roastery since 1995 located on a busy corner site in Sharm El-Sheikh. With
            glazed frontage on two sides of the building, overlooking midtown.</p>
    </div>
    <div class="image-container">
        <div class="image image1">
            <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988527/vertical-photo-1.jpg"
                 alt="Food Photo">
        </div>
        <div class="image image2">
            <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988532/vertical-photo-2.jpg"
                 alt="Food Photo">
        </div>
    </div>
</div>
<!--End About Us-->

<!--start Recipes-->
<div class="recipes">
    <div class="image"></div>
    <div class="text">
        <h2>Tasteful</h2>
        <h3>Recipes</h3>
    </div>
</div>
<!--End Recipes-->

<!--start Menu-->
<div class="menu">
    <div class="box-model">
        <i class="fas fa-times fa-2x close"></i>
        <div class="arrow">
            <div class="arrow arrow-right"></div>
            <div class="arrow arrow-left"></div>
        </div>
        <div class="box-image-container">
            <div class="box-image">
                <img src="" alt="Food Photo">
            </div>
        </div>
    </div>
    <div class="menu-image-container">
        <div class="image active">
            <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988517/big-menu-thumb-1.jpg"
                 alt="Food Photo">
        </div>
        <div class="image">
            <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988526/big-menu-thumb-2.jpg"
                 alt="Food Photo">
        </div>
        <div class="image">
            <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988525/big-menu-thumb-4.jpg"
                 alt="Food Photo">
        </div>
        <div class="image">
            <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988524/big-menu-thumb-6.jpg"
                 alt="Food Photo">
        </div>
    </div>
    <div class="text">

        <h2>working</h2>
        <h3>Hours</h3>
        <p>Sat-Thu .......... 1pm-11pm</p>
        <p>Fridays .......... 5pm-11pm</p>
    </div>
</div>
<!--End Menu-->

<!--Start fixed-image-->
<div class="fixed-image">


    <div class="text">
        <h2>The Perfect</h2>
        <h3>Blend</h3>
    </div>


</div>
<!--End fixed-image-->

<!--start About Us-->
<div class="reservation">
    <div class="text">
        <h2>Culinary</h2>
        <h3>Delight</h3>
        <p>We promise an intimate and relaxed dining experience that offers something different to local and foreign
            patrons and ensures you enjoy a memorable food experience every time.</p>
    </div>


    <div class="image-container">
        <div class="image image1">
            <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988518/bacon-1.jpg"
                 alt="Food Photo">
        </div>
        <div class="image image2">
            <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988518/bacon-2.jpg"
                 alt="Food Photo">
        </div>
    </div>


</div>


<div>

    <div id="see-menu">
        <h2>See Our Menu</h2>
    </div>

    <table>
        @foreach($restaurant->menu as $food)
            <tr>
                <td><span>{{$food->name}}</span></td>
                <td><span>{{$food->price}} L.E</span></td>
            </tr>
            @endforeach


                <tr>
                    <td><span>Just Eggs</span></td>
                    <td><span>5 L.E</span></td>
                </tr>
                <tr>
                    <td><span>Rotini Pasta</span></td>
                    <td><span>35 L.E</span></td>
                </tr>
                <tr>
                    <td><span>Cannelloni</span></td>
                    <td><span>45 L.E</span></td>
                </tr>
                <tr>
                    <td><span>Fettuccine Pasta</span></td>
                    <td><span>50 L.E</span></td>
                </tr>
                <tr>
                    <td><span>Ravioli</span></td>
                    <td><span>50 L.E</span></td>
                </tr>
                <tr>
                    <td><span>Linguine</span></td>
                    <td><span>69 L.E</span></td>
                </tr>
                <tr>
                    <td><span>Cappelletti</span></td>
                    <td><span>45 L.E</span></td>
                </tr>
                <tr>
                    <td><span>Pici</span></td>
                    <td><span>35 L.E</span></td>
                </tr>

    </table>


</div>

<!--End About Us-->


{{--@include('layouts.nav.footer')--}}
<script src="{{asset('front/script.js')}}"></script>
</body>

</html>
