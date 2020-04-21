<!-- Services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>Get in <span>the Lab</span> and see the services</h2>
        </div>
        <div class="row">
            <!-- single service -->
            @foreach ($serviceNeuf as $item)
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <div class="icon">
                            <i class="{{$item->logo}}"></i>
                        </div>
                        <div class="service-text">
                            <h2>{{$item->titre}}</h2>
                            <p>{{$item->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center">
            <a href="{{route('service')}}" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- services section end -->