<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('front/main.css')}}">
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


        #header {
            background: none;
        }

        span {
            color: #2e2e2e;
        }

        .profile {
            width: 80%;
            margin: 50px auto;
            display: flex;

        }

        .profile-image {

            width: 7rem;

        }

        .profile-image img {
            border-radius: 50%;
        }

        .profile-name {
            margin-top: 30px;
            margin-left: 30px;
        }


        h1 {
            color: #2e2e2e;

        }

        table {
            color: #2e2e2e;
            width: 80%;
            margin: auto;
            margin-top: 30px;
        }

        table th, td {
            border: 1px solid #2e2e2e;
        }


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


    <div class="profile">
        <div class="profile-image">
            <img src="{{asset(STORAGE.auth('client')->user()->cover)}}">
        </div>
        <div class="profile-name">
            <h1>{{auth('client')->user()->name}}</h1>
        </div>
    </div>

    {{--    <h1>{{$client->HotelRooms->last()}}</h1>--}}
    {{--    @php--}}
    {{--        $status = 'waiting';--}}
    {{--        if ($client->HotelRooms->last()->pivot->status == 1){--}}
    {{--            $status ='accepted';--}}
    {{--        }elseif ($client->HotelRooms->last()->pivot->status == 2){--}}
    {{--            $status = 'rejected';--}}
    {{--        }--}}
    {{--    @endphp--}}

    <div class="table">
        <table>
            <tr>
                <th>Hotel Name</th>
                <th>Start-End</th>
                <th>price</th>
                <th>status</th>
                <th>Room Number</th>
            </tr>

                @foreach($rooms as $room)
                <tr>
                    <td>{{$room->hotel->name}}</td>
                    @foreach($room->clients as $client)
                        @if($client->id == auth('client')->id() )
                            @php
                            $status = 'waiting';
                                if($client->pivot->status == 2)
                                    $status = 'rejected';
                                elseif ($client->pivot->status == 1)
                                    $status = 'accepted';
                                elseif($client->pivot->status == 3)
                                    $status = 'done';

                            @endphp
                            <td>{{$client->pivot->start_at}} - {{$client->pivot->end_at}}</td>
                            <td>{{$client->pivot->price}}</td>
                            <td>{{$status}}</td>
                            @break
                        @endif
                        <h1>{{$client}}</h1>
                    @endforeach
                    <td>{{$room->name}}</td>
                </tr>
            @endforeach
        </table>
    </div>


</header>
<!-- end of header -->

<!-- side navbar -->
@include('layouts.nav.nav')
<!-- end of side navbar -->


<!-- footer -->
@include('layouts.nav.footer')
</body>
</html>
