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
            <span>E-GUIDE</span>
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
                                <p>{{$restaurant->details}}</p>
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
