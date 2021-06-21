<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{$hotel->name}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('front/main.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <style>
        .header {
            background: none;

        }

        .flex-container {
            display: flex;

            margin: 20px 50px;
            background: #2e2e2e;
            flex-wrap: wrap;
        }

        .pic {
            flex-basis: 400px;
            flex: 1;

        }

        #photo {
            height: 500px;
        }

        .brief {
            flex-basis: 400px;
            flex: 2;
            margin-top: 30px;
            margin-left: 20px;
            margin-right: 50px;

        }

        h1 {
            border-bottom: 5px solid;
            width: 180px;
            margin-bottom: 15px;

        }

        h3 {
            margin: 20px 0;
        }

        .title {
            color: #fff;
        }

        #rooms {
            color: #2e2e2e;
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

    <article class="flex-container">
        <div class="pic">
            <img id="photo" src="{{asset(STORAGE.$hotel->cover)}}">
        </div>

        @php
            $review =0;
            $count = 0;
        @endphp
        @if(count($hotel->Clients) > 0 )
            @foreach($hotel->Clients as $client )
                @php
                    $review +=$client->pivot->review;
                    $count +=1;
                @endphp
            @endforeach
        @else
        @endif

        <div class="brief">
            <h1>{{$hotel->name}}</h1>
            <p>{{$hotel->details}}</p>
            <h3>RATING: {{$review / ($count > 0 ? $count : 1 )}} / 5</h3>
        </div>
    </article>


</header>
<!-- end of header -->


<!-- side navbar -->
<div class="sidenav" id="sidenav">
                    <span class="cancel-btn" id="cancel-btn">
                        <i class="fas fa-times"></i>
                    </span>

    <ul class="navbar">
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">User</a>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>

    </ul>


    <button class="btn log-out">log out</button>
    <button class="btn sign-up">sign up</button>
    <button class="btn log-in">log in</button>
</div>
<!-- end of side navbar -->


<div class="book">
    <form class="book-form" id="form">

        <div class="form-item">
            <label for="checkin-date">Check In Date: </label>
            <input type="date" id="chekin-date">
        </div>

        <div class="form-item">
            <label for="checkout-date">Check Out Date: </label>
            <input type="date" id="chekout-date">
        </div>

        <div class="form-item">
            <label for="room">Room Type: </label>
            <select id="room" name="room">
                <option value="single">Single</option>
                <option value="double">Double</option>
            </select>
        </div>

        <div class="form-item">
            <label for="rooms">Rooms: </label>
            <input type="number" min="1" value="1" id="rooms">
        </div>


        <div class="form-item">
            <input type="submit" id="sub" class="btn" value="Book Now">
        </div>
    </form>
</div>


<section class="rooms sec-width" id="rooms">
    <div class="title">
        <h2 id="rooms">rooms</h2>
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
        <!-- single room -->
        <article class="room">
            <div class="room-image">
                <img src="images/img5.jpg" alt="room image">
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


<section class="customers" id="customers">
    <div class="sec-width">
        <div class="title">
            <h2>customers</h2>
        </div>
        <div class="customers-container">
        @foreach($hotel->Clients as $client)
            <!-- single customer -->
                <div class="customer">
                    <h3>{{$client->pivot->title}}</h3>
                    <p>{{$client->pivot->comment}}</p>
                    <img src="{{asset(STORAGE.$client->cover)}}" alt="customer image">
                    <span>{{$client->name}}</span>
                </div>
                <!-- end of single customer -->
            @endforeach
        </div>
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
                            +14535 37534 48
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
