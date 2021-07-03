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
        <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">services</a>
            <div class="dropdown-content">
                <a href="{{route('front.restaurant.index')}}">Restaurants</a>
                <a href="{{route('front.map')}}">Map</a>
                <a href="{{route('front.museums')}}">Museums Gallery</a>
                <a href="{{route('front.otherSites')}}">Other Sites</a>
            </div>

        </li>
{{--        <li><a href="#rooms">rooms</a></li>--}}

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
