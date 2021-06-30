{{--@inject('cities' ,"App\Models\City::all()")--}}
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>HOME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('front/main.css')}}">
    {{--    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>--}}
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <style>
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
    </style>
</head>
<body>

<!-- header -->
<header class="header" id="header">
    <div class="head-top">
        <div class="site-name">
            <span>E-GUIDE</span>
        </div>
        <div class="site-nav">
            <span id="nav-btn">MENU <i class="fas fa-bars"></i></span>
        </div>
    </div>

    <div class="head-bottom flex">
        <h2>YOUR PERSONAL GUIDE</h2>
        <p>The proposed E-Guide project aims to help the tourists to get hotels and restaurant in a smooth way by our web site and android application.
            Easy and quick access to nearby hotels and restaurants to book and provide hotel services remotely.</p>
        <a href="#services">
            <button type="button" class="head-btn">GET STARTED</button>
        </a>
    </div>
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

<!-- fullscreen modal -->
<div id="modal"></div>
<!-- end of fullscreen modal -->

<!-- body content  -->
<section class="services sec-width" id="services">
    <div class="title">
        <h2>services</h2>
    </div>
    <div class="services-container">
        <!-- single service -->
        <article class="service">
            <div class="service-icon">
                        <span>
                            <i class="fas fa-hotel"></i>
                        </span>
            </div>
            <div class="service-content">
                <h2>Discover Hotels</h2>
                <p>Discover with us many hotels, you can find the hotel that suits you in terms of room numbers, quality, capacity and view of each room,
                    Big discounts on hotels in 120,000 travel destinations around the world. Browse hotel reviews and find the best price guaranteed for hotels for all budgets.
                    Find what you want with us.</p>

            </div>
        </article>
        <!-- end of single service -->
        <!-- single service -->
        <article class="service">
            <div class="service-icon">
                        <span>
                            <i class="fas fa-utensils"></i>
                        </span>
            </div>
            <div class="service-content">
                <h2>Restaurant</h2>
                <p>You can book a restaurant in a few clicks.
                    Get food in seconds, service just got easier
                    There are a lot of restaurants nearby wherever
                    you will get your favorite meal.</p>

            </div>
        </article>
        <!-- end of single service -->
        <!-- single service -->


{{--        <article class="service">--}}
{{--            <div class="service-icon">--}}
{{--                        <span>--}}
{{--                            <i class="fas fa-broom"></i>--}}
{{--                        </span>--}}
{{--            </div>--}}
{{--            <div class="service-content">--}}
{{--                <h2>Housekeeping</h2>--}}
{{--                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia--}}
{{--                    accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque--}}
{{--                    ut illo similique voluptatum enim distinctio perferendis, ad ipsam aspernatur omnis rem autem ex,--}}
{{--                    reiciendis corporis suscipit!</p>--}}

{{--            </div>--}}
{{--        </article>--}}
        <!-- end of single service -->
        <!-- single service -->
{{--        <article class="service">--}}
{{--            <div class="service-icon">--}}
{{--                        <span>--}}
{{--                            <i class="fas fa-door-closed"></i>--}}
{{--                        </span>--}}
{{--            </div>--}}
{{--            <div class="service-content">--}}
{{--                <h2>Room Security</h2>--}}
{{--                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia--}}
{{--                    accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque--}}
{{--                    ut illo similique voluptatum enim distinctio perferendis, ad ipsam aspernatur omnis rem autem ex,--}}
{{--                    reiciendis corporis suscipit!</p>--}}

{{--            </div>--}}


        </article>
        <!-- end of single service -->
    </div>
</section>

<div class="book">
    <form class="book-form" id="form" method="post" action="{{route('hotel.search')}}">

        @csrf
        <div class="form-item">
            <label for="checkin-date">Check In Date: </label>
            <input type="date" id="chekin-date" name="start_at">
        </div>

        <div class="form-item">
            <label for="checkout-date">Check Out Date: </label>
            <input type="date" id="chekout-date" name="end_at">
        </div>

        <div class="form-item">
            <label for="room">Rooms: </label>
            <select id="room" name="number">
                @for($i=1;$i<11;$i++)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
        </div>

        <div class="form-item">
            <label for="city">CITY: </label>
            <select id="city" name="city_id">
                @foreach($cities as $city)
                    <option value="{{$city->id}}">{{$city->name}}</option>
                @endforeach
            </select>
        </div>


        <div class="form-item">
            <input type="submit" id="sub" class="btn" value="search">
        </div>
    </form>
</div>



<!-- end of body content -->

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
                            +12545 37534 48
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
