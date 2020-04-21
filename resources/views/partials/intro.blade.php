<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        @foreach ($header as $item) 
            <div class="hero-center">
                <img src="{{asset('storage/'.$item->logo)}}" alt="">
                <p>{{$item->texte}}</p>
            </div>
        @endforeach
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        @foreach ($carousel as $item) 
            <div class="item hero-item" data-bg="{{asset('storage/'.$item->image)}}"></div>
            {{-- <div class="item hero-item" data-bg="{{asset('img/02.jpg')}}"></div> --}}
        @endforeach
    </div>
</div>
<!-- Intro Section -->