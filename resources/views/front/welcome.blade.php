{{--@inject('cities' ,"App\Models\City::all()")--}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>HOME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('front/main.css')}}">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
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
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto est quos veniam impedit numquam itaque
            voluptatum, dicta asperiores accusamus, eligendi neque ut incidunt, modi harum molestiae atque natus officia
            minima.</p>
        <button type="button" class="head-btn">GET STARTED</button>
    </div>
</header>
<!-- end of header -->

<!-- side navbar -->
<div class="sidenav" id="sidenav">
            <span class="cancel-btn" id="cancel-btn">
                <i class="fas fa-times"></i>
            </span>

    <ul class="navbar">
        <li><a href="{{route('home')}}">home</a></li>
        <li><a href="#services">services</a></li>
        <li><a href="#rooms">rooms</a></li>
    </ul>
    <button  class="btn sign-up" >sign up</button >
    <button class="btn log-in">log in</button>
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia
                    accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque
                    ut illo similique voluptatum enim distinctio perferendis, ad ipsam aspernatur omnis rem autem ex,
                    reiciendis corporis suscipit!</p>

            </div>
        </article>
        <!-- end of single service -->
        <!-- single service -->
        <article class="service">
            <div class="service-icon">
                        <span>
                            <i class="fas fa-umbrella"></i>
                        </span>
            </div>
            <div class="service-content">
                <h2>Weather Report</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia
                    accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque
                    ut illo similique voluptatum enim distinctio perferendis, ad ipsam aspernatur omnis rem autem ex,
                    reiciendis corporis suscipit!</p>

            </div>
        </article>
        <!-- end of single service -->
        <!-- single service -->


        <article class="service">
            <div class="service-icon">
                        <span>
                            <i class="fas fa-broom"></i>
                        </span>
            </div>
            <div class="service-content">
                <h2>Housekeeping</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia
                    accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque
                    ut illo similique voluptatum enim distinctio perferendis, ad ipsam aspernatur omnis rem autem ex,
                    reiciendis corporis suscipit!</p>

            </div>
        </article>
        <!-- end of single service -->
        <!-- single service -->
        <article class="service">
            <div class="service-icon">
                        <span>
                            <i class="fas fa-door-closed"></i>
                        </span>
            </div>
            <div class="service-content">
                <h2>Room Security</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia
                    accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque
                    ut illo similique voluptatum enim distinctio perferendis, ad ipsam aspernatur omnis rem autem ex,
                    reiciendis corporis suscipit!</p>

            </div>


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
            <label for="room">Number Of People: </label>
            <select id="room" name="number">
                @for($i=0;$i<11;$i++)
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
            <input type="submit" id="sub" class="btn" value="Book Now">
        </div>
    </form>
</div>

<section class="rooms sec-width" id="rooms">
    <div class="title">
        <h2>rooms</h2>
    </div>
    <div class="rooms-container">
        <!-- single room -->
        <article class="room">
            <div class="room-image">
                <img src="images/img1.jpg" alt="room image">
            </div>
            <div class="room-text">
                <h3>Luxury Rooms</h3>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus exercitationem repellendus maxime
                    ullam tempore architecto provident unde expedita quam beatae, dolore eligendi molestias sint tenetur
                    incidunt voluptas. Unde corporis qui iusto vitae. Aut nesciunt id iste, cum esse commodi nemo?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat
                    nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore,
                    atque quo?</p>

                <button type="button" class="btn">book now</button>
            </div>
        </article>
        <!-- end of single room -->
        <!-- single room -->
        <article class="room">
            <div class="room-image">
                <img src="images/img2.jpg" alt="room image">
            </div>
            <div class="room-text">
                <h3>Luxury Rooms</h3>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus exercitationem repellendus maxime
                    ullam tempore architecto provident unde expedita quam beatae, dolore eligendi molestias sint tenetur
                    incidunt voluptas. Unde corporis qui iusto vitae. Aut nesciunt id iste, cum esse commodi nemo?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat
                    nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore,
                    atque quo?</p>

                <button type="button" class="btn">book now</button>
            </div>
        </article>
        <!-- end of single room -->
        <!-- single room -->
        <article class="room">
            <div class="room-image">
                <img src="images/img3.jpg" alt="room image">
            </div>
            <div class="room-text">
                <h3>Luxury Rooms</h3>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus exercitationem repellendus maxime
                    ullam tempore architecto provident unde expedita quam beatae, dolore eligendi molestias sint tenetur
                    incidunt voluptas. Unde corporis qui iusto vitae. Aut nesciunt id iste, cum esse commodi nemo?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat
                    nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore,
                    atque quo?</p>

                <button type="button" class="btn">book now</button>
            </div>
        </article>
        <!-- end of single room -->
    </div>
</section>


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

<script src="{{asset('front/'.'script.js')}}"></script>
</body>
</html>
