<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                <!-- single card -->
                @foreach ($service as $item)  
                    <div class="col-md-4 col-sm-6">
                        <div class="lab-card">
                            <div class="icon">
                                <i class="{{$item->logo}}"></i>
                            </div>
                            <h2>{{$item->titre}}</h2>
                            <p>{{$item->description}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About contant -->
    <div class="about-contant">
        @foreach ($discover as $item)
            <div class="container">
                <div class="section-title">
                    <h2>{!! App\Helper\Color::green($titres->titreDiscover) !!}</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>{{$item->textGauche}}</p>
                    </div>
                    <div class="col-md-6">
                        <p>{{$item->textDroite}}</p>
                    </div>
                </div>
                <div class="text-center mt60">
                    <a href="{{route('contact')}}" class="site-btn">Browse</a>
                </div>
                <!-- popup video -->
                <div class="intro-video">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <img src="img/video.jpg" alt="">
                            <a href="{{$item->video}}" class="video-popup">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- About section end -->