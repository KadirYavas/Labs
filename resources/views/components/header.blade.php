<!-- Header section -->
<header class="header-section">
    @foreach ($header as $item)
        <div class="logo">
            <img src="{{asset('storage/'.$item->logo)}}" height="40px" alt=""><!-- Logo -->
        </div>
    @endforeach
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            @foreach ($header as $item) 
                <li class="active"><a href="{{route('welcome')}}">{{$item->navUn}}</a></li>
                <li><a href="{{route('service')}}">{{$item->navDeux}}</a></li>
                <li><a href="{{route('blog')}}">{{$item->navTrois}}</a></li>
                <li><a href="{{route('contact')}}">{{$item->navQuatre}}</a></li>
            @endforeach
            @if (Auth::check() && Auth::id() == 1 || Auth::id() == 2 || Auth::id() == 3 || Auth::id() == 5)
                <li><a href="{{route('home')}}">Back-Office</a></li>
            @endif
            @guest
            <li><a href="{{route('login')}}">Login</a></li>
            @else
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            @endguest
        </ul>
    </nav>
</header>
<!-- Header section end -->