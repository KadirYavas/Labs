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
            @if (Auth::check())
                <li><a href="{{route('login')}}">{{ Auth::user()->name }}</a></li>
            @else
                <li><a href="{{route('login')}}">LOGIN</a></li>
                <li><a href="{{route('register')}}">REGISTER</a></li>
            @endif
        </ul>
    </nav>
</header>
<!-- Header section end -->