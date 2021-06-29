<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hotels in {{$city->name}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('front'.'/main.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    {{--    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>--}}
    <style>
        .header {
            background: none;

        }

        .flex-container {
            display: flex;

            margin: 20px 50px;
            background: #2e2e2e;
            flex-wrap: wrap;
            height: 250px;
        }

        .pic {
            flex-basis: 400px;
            flex: 1;

        }

        #photo {
            height: 250px;
        }

        .brief {
            flex-basis: 400px;
            flex: 2;
            margin-top: 10px;
            margin-left: 20px;
            margin-right: 50px;

        }


        h3 {
            border-bottom: 3px solid;
            width: 180px;
            margin-bottom: 10px;
            padding-top: 0;
        }

        .title {
            color: #fff;
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


        .chart {
            width: 80%;
            margin: auto;
            padding-top: 40%;
            position: relative;

        }


        .chart iframe {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 90%;
        }

        #stats {
            color: #2e2e2e;
            margin: 20px 50px;
            display: flex;
        }

        #stats h2 {
            margin-left: 10px;
        }

        #link {
            text-decoration: none;
            color: inherit;
        }

        #title {
            width: 400px;
            margin-left: 25px;
            margin-bottom: 20px;
        }

        #title h1 {
            color: #2e2e2e;
            border-bottom: 5px solid;
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

    <div id="title">
        <h1>Hotels in {{$city->name}}</h1>
    </div>

    @if($rooms)
        @php
            $review =0;
            $count = 0;
        @endphp
        @foreach($rooms as $room)
{{--            @if(count($room->Hotel->Clients) > 0)--}}

{{--                @foreach($room->Hotel->Clients as $client )--}}
{{--                    @php--}}
{{--                        $review +=$client->pivot->review;--}}
{{--                        $count +=1;--}}
{{--                    @endphp--}}
{{--                    --}}{{----}}{{--            <h6 style="color: black">{{$client->pivot->review}}</h6>--}}
{{--                @endforeach--}}
{{--            @endif--}}
            <a href="{{route('front.hotel.show',$room->Hotel->id)}}" id="link">
                <article class="flex-container">
                    <div class="pic">
                        <img id="photo" src="{{asset(STORAGE.$room->Hotel->cover)}}">
                    </div>
                    <div class="brief">
                        <h3>{{$room->Hotel->name}}</h3>
                        <p>{{(strlen($room->hotel->details) > 200 ? substr($room->hotel->details , 0 ,200).' ......' : $room->hotel->details)}}</p>
                        <h4>RATING: {{number_format($room->hotel->rating , 1)}} / 5</h4>
                    </div>
                </article>
            </a>
        @endforeach
    @endif


</header>
<!-- end of header -->


<!-- side navbar -->
<div class="sidenav" id="sidenav">
                    <span class="cancel-btn" id="cancel-btn">
                        <i class="fas fa-times"></i>
                    </span>

    <ul class="navbar">
        @auth('client')
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">{{auth('client')->user()->name}}</a>
                <div class="dropdown-content">
                    <a href="#">Profile</a>
                    <form action="{{route('client.logout')}}" method="post">
                        @csrf
                        <button class="btn log-out">log out</button>
                    </form>
                </div>
            </li>
        @endauth

        <li><a href="{{route('front.welcome')}}">home</a></li>
        <li><a href="{{route('front.restaurant.index')}}">restaurants</a></li>
        <li><a href="#services">services</a></li>
        <li><a href="#rooms">rooms</a></li>

    </ul>

    @guest('client')
        <form action="{{route('client.form.register')}}" method="get">
            @csrf
            <button class="btn sign-up">sign up</button>
        </form>
        <form action="{{route('client.form.login')}}" method="get">
            @csrf
            <button class="btn log-in">log in</button>
        </form>
    @endguest
</div>
<!-- end of side navbar -->


<section class="covid-cases">

    <div class="title" id="stats">
        <i class="fas fa-exclamation-triangle"></i>
        <h2>COVID-19 STATS IN EGYPT</h2>
    </div>

    <div class="chart">
        <iframe
            src="https://ourworldindata.org/explorers/coronavirus-data-explorer?zoomToSelection=true&time=2020-02-14..2021-06-14&hideControls=true&Metric=Confirmed+cases&Interval=Cumulative&Relative+to+Population=false&Align+outbreaks=false&country=~EGY"
            loading="lazy" style=" border: 0px solid;"></iframe>
    </div>
</section>


<!-- footer -->
<footer class="footer">
    <div class="footer-container">
        <div>
            <h2>About Us </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque sapiente mollitia doloribus provident?
                Eos quisquam aliquid vel dolorum, impedit culpa.</p>
            <ul class="social-icons">
                <li class="flex">
                    <i class="fa fa-twitter fa-2x"></i>
                </li>
                <li class="flex">
                    <i class="fa fa-facebook fa-2x"></i>
                </li>
                <li class="flex">
                    <i class="fa fa-instagram fa-2x"></i>
                </li>
            </ul>
        </div>

        <div>
            <h2>Useful Links</h2>
            <a href="#">Blog</a>
            <a href="#">Rooms</a>
            <a href="#">Subscription</a>
            <a href="#">Gift Card</a>
        </div>

        <div>
            <h2>Privacy</h2>
            <a href="#">Career</a>
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
            <a href="#">Services</a>
        </div>

        <div>
            <h2>Have A Question</h2>
            <div class="contact-item">
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                        </span>
                <span>
                            203 Fake St. Lorem, ipsum, Cairo, Egypt
                        </span>
            </div>
            <div class="contact-item">
                        <span>
                            <i class="fas fa-phone-alt"></i>
                        </span>
                <span>
                            +124245 37534 48
                        </span>
            </div>
            <div class="contact-item">
                        <span>
                            <i class="fas fa-envelope"></i>
                        </span>
                <span>
                            info@domain.com
                        </span>
            </div>
        </div>
    </div>
</footer>
<!-- end of footer -->

<script src="{{asset('front/script.js')}}"></script>
</body>
</html>
