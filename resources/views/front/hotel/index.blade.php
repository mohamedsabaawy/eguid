<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hotels in {{\App\Sabaawy\getCity()['name']}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('front'.'/main.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    {{--    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>--}}
    <style>
        .selection select {
            margin-top: 2px;
            height: 50px;
            width: 230px;
            background: var(--dark);
            color: #fff;
            border: 0px;
            font-size: 15px;
            letter-spacing: 1.5px;
            transition: var(--transition);
            opacity: 0.8;

        }

        .selection select:hover {
            cursor: pointer;
        }
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
        <h1>Hotels in {{\App\Sabaawy\getCity()['name']}}</h1>
    </div>

    @if($hotels)
        @foreach($hotels as $hotel)
            <a href="{{route('front.hotel.show',$hotel->id)}}" id="link">
                <article class="flex-container">
                    <div class="pic">
                        <img id="photo" src="{{asset(STORAGE.$hotel->cover)}}">
                    </div>
                    <div class="brief">
                        <h3>{{$hotel->name}}</h3>
                        <p>{{(strlen($hotel->details) > 200 ? substr($hotel->details , 0 ,200).' ......' : $hotel->hotel->details)}}</p>
                        <h4>RATING: {{number_format($hotel->rating , 1)}} / 5</h4>
                    </div>
                </article>
            </a>
        @endforeach
    @endif


</header>
<!-- end of header -->


<!-- side navbar -->
@include('layouts.nav.nav')
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
@include('layouts.nav.footer')
</body>
</html>
