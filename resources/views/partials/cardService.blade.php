<!-- services card section-->
<div class="services-card-section spad" id="spadDeux">
    <div class="container">
        <div class="row">
            <!-- Single Card -->
            @foreach ($article as $item)
                <div class="col-md-4 col-sm-6">
                <div class="sv-card">
                    <div class="card-img">
                        <img src="{{'storage/'.$item->photo}}" alt="">
                    </div>
                    <div class="card-text">
                        <h2>{{$item->titre}}</h2>
                        <p>{{$item->description}}</p>
                    </div>
                </div>
                </div>
            @endforeach
            
        </div>
    </div>
</div>
<!-- services card section end-->