<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Restaurants in Sharm El-Sheikh</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('front/main.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    {{--    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>--}}
    <style>


        .title h2 {
            margin-bottom: 10px;
            color: #fff;
        }


        #customers {
            margin-top: 0;
            padding: 25px;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("{{asset('front/images/restaurants3.jpg')}}") center/cover no-repeat fixed;

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


        .site-name {
            margin-left: 25px;
        }


        .site-name span {
            color: #fff;
        }

        .site-nav span {
            color: #fff;
        }

        #restaurants {
            margin-top: 60px;
        }

        #fres {
            text-decoration: none;
            color: inherit;
        }

    </style>
</head>
<body>


<!-- header -->
<header class="customers" id="customers">
    <div class="head-top">
        <div class="site-name">
            <span  onclick="window.location.href='{{route('front.welcome')}}'">E-GUIDE</span>
        </div>
        <div class="site-nav">
            <span id="nav-btn">MENU <i class="fas fa-bars"></i></span>
        </div>
    </div>


    <section id="restaurants">
        <div class="sec-width">
            <div class="title">
                <h2>RESTAURANTS</h2>
            </div>
            <div class="customers-container">
                <!-- single customer -->
                @if(count($restaurants) > 0)
                    @foreach($restaurants as $restaurant)
                        <a href="{{route('front.restaurant.show' ,$restaurant->id)}}" id="fres">
                            <div class="customer">
                                <h3>{{$restaurant->name}}</h3>
                                <p>Rating : {{number_format($restaurant->rating,1)}}</p>
                                <p>{{strlen($restaurant->details) > 65 ? substr($restaurant->details,65).' .....' : $restaurant->details}}</p>
                                <img src="{{asset(STORAGE.$restaurant->cover)}}" alt="customer image">

                            </div>
                        </a>
                @endforeach
            @else

            @endif
            <!-- end of single customer -->
            </div>
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
