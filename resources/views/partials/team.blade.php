<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>Get in <span>the Lab</span> and  meet the team</h2>
        </div>
        <div class="row">
            <!-- single member -->
            @foreach ($users as $index=>$user)
                    @if ($index==0)
                    <!-- single member -->
                    <div class="col-sm-4">
                        <div class="member">
                            <img src="{{'storage/'.$user->photo}}" alt="">
                            <h2>{{$user->name}}</h2>
                            <h3>{{$user->role->role}}</h3>
                        </div>
                    </div>
                    <!-- single member -->
                    <div class="col-sm-4">
                        <div class="member">
                            <img src="{{'storage/'.$ceo->photo}}" alt="">
                            <h2>{{$ceo->name}}</h2>
                            <h3>{{$ceo->role->role}}</h3>
                        </div>
                    </div>
                    @else
                        <!-- single member -->
                        <div class="col-sm-4">
                        <div class="member">
                            <img src="{{'storage/'.$user->photo}}" alt="">
                            <h2>{{$user->name}}</h2>
                            <h3>{{$user->role->role}}</h3>
                        </div>
                    </div>
                    @endif
                @endforeach
            {{-- <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="img/team/2.jpg" alt="">
                    <h2>Christinne Williams</h2>
                    <h3>Junior developer</h3>
                </div>
            </div>
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="img/team/3.jpg" alt="">
                    <h2>Christinne Williams</h2>
                    <h3>Digital designer</h3>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- Team Section end-->