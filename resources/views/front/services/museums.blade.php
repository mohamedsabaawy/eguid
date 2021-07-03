<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Museums Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('front/lightbox.min.css')}}">

    <link rel="stylesheet" href="{{asset('front/main.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <script src="{{asset('front/lightbox-plus-jquery.min.js')}}"></script>
    <style>



        :root{
            background-color: #eae6e8;
        }



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


        #title {
            width: 400px;
            margin-left: 25px;
            margin-bottom: 20px;
        }

        #title h1 {
            color: #2e2e2e;
            border-bottom: 5px solid;
        }


        .container {
            display: flex;
            flex-flow: column nowrap;
        }

        .section-grid {
            display: flex;
            padding-left: 25px;
            padding-right: 25px;
        }

        .grid-prod {
            flex: 1 1 auto;
            display: flex;
            flex-flow: row wrap;
        }


        .prod-grid img {
            width: 230px;
            padding: 5px;
            height: 200px;
            transition: 1s;
        }

        h3 {
            text-align: center;
            line-height: 1.5;
            letter-spacing: 1px;
            color: #2e2e2e;
        }






        @media (min-width : 320px) and (max-width : 480px) {

            .section-list,
            .buttons {
                display: none;
            }
        }

        #link {
            text-decoration: none;
            color: inherit;
        }


        .grid-prod img:hover {
            filter: grayscale(0);
            transform: scale(1.1);
        }




        .video-wrapper {
            width: 80%;
            margin: auto;
            padding-top: 40%;
            position: relative;
        }




        .video-wrapper video {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 80%;
            height: 90%;
            margin: auto;
        }



        #vid {
            color: #2e2e2e ;
            margin: 20px 50px;
            display: flex;
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
        <h1>Museums Gallery</h1>
    </div>








    <div class="container">
        <div id="div1">
            <section class="section-grid">
                <div class="grid-prod">

                    <div class="prod-grid">
                        <a class="link" href="{{asset('front/images/museum1.jpg')}}" data-lightbox="mygallery">
                            <div>
                                <img src="{{asset('front/images/museum1.jpg')}}">
                            </div>
                        </a>
                    </div>

                    <div class="prod-grid">
                        <a class="link" href="{{asset('front/images/museum2.jpg')}}" data-lightbox="mygallery">
                            <div>
                                <img src="{{asset('front/images/museum2.jpg')}}">
                            </div>
                        </a>
                    </div>

                    <div class="prod-grid">
                        <a class="link" href="{{asset('front/images/museum3.jpg')}}" data-lightbox="mygallery">
                            <div>
                                <img src="{{asset('front/images/museum3.jpg')}}">
                            </div>
                        </a>
                    </div>

                    <div class="prod-grid">
                        <a class="link" href="{{asset('front/images/museum4.jpg')}}" data-lightbox="mygallery">
                            <div>
                                <img src="{{asset('front/images/museum4.jpg')}}">
                            </div>
                        </a>
                    </div>

                    <div class="prod-grid">
                        <a class="link" href="{{asset('front/images/museum5.jpg')}}" data-lightbox="mygallery">
                            <div>
                                <img src="{{asset('front/images/museum5.jpg')}}">
                            </div>
                        </a>
                    </div>

                    <div class="prod-grid">
                        <a class="link" href="{{asset('front/images/museum6.jpg')}}" data-lightbox="mygallery">
                            <div>
                                <img src="{{asset('front/images/museum6.jpg')}}">
                            </div>
                        </a>
                    </div>

                    <div class="prod-grid">
                        <a class="link" href="{{asset('front/images/museum7.jpg')}}" data-lightbox="mygallery">
                            <div>
                                <img src="{{asset('front/images/museum7.jpg')}}">
                            </div>
                        </a>
                    </div>

                    <div class="prod-grid">
                        <a class="link" href="{{asset('front/images/museum8.jpg')}}" data-lightbox="mygallery">
                            <div>
                                <img src="{{asset('front/images/museum8.jpg')}}">
                            </div>
                        </a>
                    </div>

                    <div class="prod-grid">
                        <a class="link" href="{{asset('front/images/museum9.jpg')}}" data-lightbox="mygallery">
                            <div>
                                <img src="{{asset('front/images/museum9.jpg')}}">
                            </div>
                        </a>
                    </div>

                    <div class="prod-grid">
                        <a class="link" href="{{asset('front/images/museum10.jpg')}}" data-lightbox="mygallery">
                            <div>
                                <img src="{{asset('front/images/museum10.jpg')}}">
                            </div>
                        </a>
                    </div>




                </div>
            </section>
        </div>
    </div>












</header>
<!-- end of header -->



<!-- side navbar -->
@include('layouts.nav.nav')
<!-- end of side navbar -->









<div class="title" id="vid">
    <h2>A Tour inside Sharm El-Sheikh Museum</h2>
</div>

<div class="video-wrapper">
    <video controls><source src="{{asset('front/tour.mp4')}}" type="video/mp4"></video>
</div>
















<!-- footer -->
@include('layouts.nav.footer')
</body>

</html>
