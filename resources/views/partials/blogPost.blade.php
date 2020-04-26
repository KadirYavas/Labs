<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Single Post -->
                <div class="single-post">
                    @foreach ($article as $item)   
                        <div class="post-thumbnail">
                            <img src="{{asset('storage/'.$item->photo)}}" alt="">
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
                                <a href="#comments">{{$commentaire->count()}} Comments</a>
                            </div>
                            <p>{{$item->description}}</p>
                        </div>
                    @endforeach
                    <!-- Post Author -->
                    @foreach ($article as $item) 
                        <div class="author">
                            <div class="avatar">
                                <img src="{{asset('storage/'.$item->user->photo)}}" alt="" width="100px">
                            </div>
                            <div class="author-info">
                                <h2>{{$item->user->name}}, <span>Author</span></h2>
                                <p>{{$item->user->description}} </p>
                            </div>
                        </div>
                    @endforeach
                    <!-- Post Comments -->
                    <div class="comments" id="comments">
                        <h2>Comments ({{$commentaire->count()}})</h2>
                        <ul class="comment-list">
                            @foreach ($commentaire as $item)
                                <li>
                                <div class="avatar">
                                    <img src="{{asset('storage/'.$item->user->photo)}}" alt="">
                                </div>
                                <div class="commetn-text">
                                    <h3>{{$item->user->name}} | {{$item->updated_at->day}} {{$item->updated_at->month}}, {{$item->updated_at->year}}</h3>
                                    <p>{{$item->message}}</p>
                                </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Commert Form -->
                    <div class="row">
                        <div class="col-md-9 comment-from" id="coms">
                            <h2>Leave a comment</h2>
                            @if(Session::has('newslett'))

                            <div class="alert alert-success" id="newsletterSuccess">
                                <strong>Merci</strong> pour votre commentaire.
                            </div>

                            @endif
                            @if(Session::has('newsle'))

                            <div class="alert alert-success" id="newsletterSuccess">
                                Veuillez vous <strong>connecter</strong> pour laisser un commentaire.
                            </div>

                            @endif
                            <form class="form-class" action="{{route('sendCommentaire', $article->first()->id)}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        @if (Auth::check())
                                            <input type="text" name="name" placeholder="Your name" value="{{Auth::user()->name}}">
                                        @else
                                            <input type="text" name="name" placeholder="Your name">
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        @if (Auth::check())
                                            <input type="text" name="email" placeholder="Your email" value="{{Auth::user()->email}}">
                                        @else  
                                            <input type="text" name="email" placeholder="Your email">
                                        @endif
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea name="message" placeholder="Message"></textarea>
                                        <button class="site-btn">send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <form method="GET" action="{{route('search')}}" class="search-form">
                        <input type="text" placeholder="Search" name="word">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        @foreach ($categorie as $item) 
                            <li><a href="{{route('showCategorie', $item->id)}}">{{$item->section}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        @foreach ($tag as $item) 
                            <li><a href="{{route('showTag', $item->id)}}">{{$item->tag}}</a></li>
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