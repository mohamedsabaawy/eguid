<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{$hotel->name}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('front/main.css')}}">
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


        /*
        ===============
        Variables
        ===============
        */

        .landmarks {
            /* dark shades of primary color*/
            --clr-primary-1: hsl(205, 86%, 17%);
            --clr-primary-2: hsl(205, 77%, 27%);
            --clr-primary-3: hsl(205, 72%, 37%);
            --clr-primary-4: hsl(205, 63%, 48%);
            /* primary/main color */
            --clr-primary-5: #49a6e9;
            /* lighter shades of primary color */
            --clr-primary-6: hsl(205, 89%, 70%);
            --clr-primary-7: hsl(205, 90%, 76%);
            --clr-primary-8: hsl(205, 86%, 81%);
            --clr-primary-9: hsl(205, 90%, 88%);
            --clr-primary-10: hsl(205, 100%, 96%);
            /* darkest grey - used for headings */
            --clr-grey-1: hsl(209, 61%, 16%);
            --clr-grey-2: hsl(211, 39%, 23%);
            --clr-grey-3: hsl(209, 34%, 30%);
            --clr-grey-4: hsl(209, 28%, 39%);
            /* grey used for paragraphs */
            --clr-grey-5: hsl(210, 22%, 49%);
            --clr-grey-6: hsl(209, 23%, 60%);
            --clr-grey-7: hsl(211, 27%, 70%);
            --clr-grey-8: hsl(210, 31%, 80%);
            --clr-grey-9: hsl(212, 33%, 89%);
            --clr-grey-10: hsl(210, 36%, 96%);
            --clr-white: #fff;
            --clr-red-dark: hsl(360, 67%, 44%);
            --clr-red-light: hsl(360, 71%, 66%);
            --clr-green-dark: hsl(125, 67%, 44%);
            --clr-green-light: hsl(125, 71%, 66%);
            --clr-black: #222;
            --ff-primary: "Roboto", sans-serif;
            --ff-secondary: "Open Sans", sans-serif;
            --transition: all 0.3s linear;
            --spacing: 0.25rem;
            --radius: 0.5rem;
            --light-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            --dark-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            --max-width: 1170px;
            --fixed-width: 620px;
        }


        .landmarks,
        ::after,
        ::before {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .landmarks {
            font-family: var(--ff-secondary);
            color: var(--clr-grey-1);
            line-height: 1.5;

        }

        .landmarks ul {
            list-style-type: none;
        }

        .landmarks a {
            text-decoration: none;
        }

        .landmarks img:not(.person-img) {
            width: 100%;
        }

        .landmarks img {
            display: block;
        }

        .landmarks h1,
        h2,
        h3,
        h4 {
            letter-spacing: var(--spacing);
            text-transform: capitalize;
            line-height: 1.25;
            margin-bottom: 0.75rem;

        }

        .landmarks h1 {
            font-size: 3rem;
        }

        .landmarks h2 {
            font-size: 2rem;
        }

        .landmarks h3 {
            font-size: 1.25rem;
        }

        .landmarks h4 {
            font-size: 0.875rem;
        }

        .landmarks p {
            margin-bottom: 1.25rem;
            color: var(--clr-grey-5);
        }

        @media screen and (min-width: 800px) {
            .landmarks h1 {
                font-size: 4rem;
            }

            .landmarks h2 {
                font-size: 2.5rem;
            }

            .landmarks h3 {
                font-size: 1.75rem;
            }

            .landmarks h4 {
                font-size: 1rem;
            }

            body .landmarks {
                font-size: 1rem;
            }

            .landmarks h1,
            h2,
            h3,
            h4 {
                line-height: 1;
            }
        }

        /*  global classes */

        .landmarks .btn {
            text-transform: uppercase;
            background: transparent;
            color: var(--clr-black);
            padding: 0.375rem 0.75rem;
            letter-spacing: var(--spacing);
            display: inline-block;
            transition: var(--transition);
            font-size: 0.875rem;
            border: 2px solid var(--clr-black);
            cursor: pointer;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
            border-radius: var(--radius);
        }

        .landmarks .btn:hover {
            color: var(--clr-white);
            background: var(--clr-black);
        }

        /* section */
        .section {
            padding: 5rem 0;
        }

        .section-center {
            width: 90vw;
            margin: 0 auto;
            max-width: 1170px;
        }

        @media screen and (min-width: 992px) {
            .section-center {
                width: 95vw;
            }
        }

        main {
            min-height: 100vh;
            display: grid;
            place-items: center;
        }

        /*
        ===============
        Slider
        ===============
        */

        .slider-container {
            border: 5px solid var(--clr-primary-5);
            width: 80vw;
            margin: 0 auto;
            height: 60vh;
            max-width: 80rem;
            position: relative;
            border-radius: 0.5rem;
            overflow: hidden;
            margin-top: 2rem;
        }

        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            background: var(--clr-primary-9);
            color: var(--clr-white);
            display: grid;
            place-items: center;
            transition: all 0.25s ease-in-out;
            text-align: center;
        }

        .slide-img {
            height: 100%;
            object-fit: cover;
        }

        .slide h1 {
            font-size: 5rem;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            margin-top: 0.75rem;
            margin-bottom: 20px;
        }

        .prevBtn,
        .nextBtn {
            background: transparent;
            border-color: transparent;
            font-size: 1.75rem;
            cursor: pointer;
            margin: 0 0.25rem;
            text-transform: capitalize;
            letter-spacing: 2px;
            color: var(--clr-grey-5);
            transition: var(--transition);
        }

        .prevBtn:hover,
        .nextBtn:hover {
            color: var(--clr-grey-3);
        }

        @media screen and (min-width: 576px) {
            .slider-container {
                height: 45vh;
            }
        }

        @media screen and (min-width: 768px) {
            .slider-container {
                height: 55vh;
            }
        }

        @media screen and (min-width: 992px) {
            .slider-container {
                height: 65vh;
            }
        }

        #land {
            color: #2e2e2e;
            margin-left: 90px;
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

    @if (session('status'))
        <div class="" style="color: #060606 ;border: #23ffe2 3px solid; background-color: #23ffe2 ; text-align: center" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @if(count($hotel->Photos) > 0)
        <section class="landmarks">
            <div class="title" id="land">
                <h2>{{$hotel->name}} Photos</h2>
            </div>

            <div class="slider-container">
                @foreach($hotel->Photos as $photo)
                    <div class="slide">
                        <img src="{{asset(STORAGE.$photo->name)}}" class="slide-img" alt=""/>
                    </div>
                @endforeach
            </div>
            <div class="btn-container">
                <button type="button" class="prevBtn">
                    prev
                </button>
                <button type="button" class="nextBtn">
                    next
                </button>
            </div>


        </section>
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


<div class="book">
    <form class="book-form" id="form" action="{{route('room1')}}" method="post">
        @csrf
        <div class="form-item">
            <label for="checkin-date">Check In Date: </label>
            <input type="date" id="chekin-date" name="start_at" required>
            @error('start_at')
            <span class="" style="color:red" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-item">
            <label for="checkout-date">Check Out Date: </label>
            <input type="date" id="chekout-date" name="end_at" required>
            <input type="hidden" id="chekout-date" value="{{$hotel->id}}" name="hotel_id">
            @error('end_at')
                <span class="" style="color:red" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{--        <div class="form-item">--}}
        {{--            <label for="room">Room Type: </label>--}}
        {{--            <select id="room" name="room">--}}
        {{--                <option value="single">Single</option>--}}
        {{--                <option value="double">Double</option>--}}
        {{--            </select>--}}
        {{--        </div>--}}

        <div class="form-item">
            <label for="rooms">Rooms: </label>
            <input type="number" min="1" value="1" id="rooms" name="number">
            @error('number')
            @enderror
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
