<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Post item -->
                @foreach ($article as $item)
                    <div class="post-item">
                        <div class="post-thumbnail">
                            <img src="{{'storage/'.$item->photo}}" alt="">
                            <div class="post-date">
                                <h2>{{$item->updated_at->day}}</h2>
                                <h3>{{$item->updated_at->month}} {{$item->updated_at->year}}</h3>
                            </div>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title">{{$item->titre}}</h2>
                            <div class="post-meta">
                                <a href="">{{$item->categorie->section}}</a>
                                <a href="">@foreach ($item->tags->shuffle()->take(3) as $tage)
                                    {{$tage->tag}},
                                @endforeach</a>
                                <a href="">{{$commentaire->count()}} Comments</a>
                            </div>
                            <p>{{ Illuminate\Support\Str::limit($item->description, 250) }}</p>
                            <a href="{{route('showArticle', $item->id)}}" class="read-more">Read More</a>
                        </div>
                    </div>
                @endforeach
                <!-- Pagination -->
                <div class="page-pagination">
                    {{$article->links()}}
                </div>
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <form action="#" class="search-form">
                        <input type="text" placeholder="Search">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        @foreach ($categorie as $item) 
                            <li><a href="#">{{$item->section}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        @foreach ($tag as $item) 
                            <li><a href="">{{$item->tag}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- Single widget -->
                @foreach ($quote as $item) 
                    <div class="widget-item">
                        <h2 class="widget-title">Quote</h2>
                        <div class="quote">
                            <span class="quotation">‘​‌‘​‌</span>
                            <p>{{$item->description}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- page section end-->