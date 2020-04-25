<!-- newsletter section -->
<div class="newsletter-section spad" id="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>{!! App\Helper\Color::blue($titres->titreNewsletter) !!}</h2>
            </div>
            <div class="col-md-9">
                <!-- newsletter form -->
                @if(Session::has('newslette'))

                <div class="alert alert-success" id="newsletterSuccess">
                    <strong>Merci</strong> de vous être inscris.
                </div>

                @endif
                <form class="nl-form" action="{{route('news')}}" method="POST">
                    @csrf
                    @error('news')
                        <div class="alert alert-warning">{{ $message }}</div>
                    @enderror
                    <input type="text" name="news" placeholder="Your e-mail here">
                    <button type="submit" class="site-btn btn-2">Newsletter</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- newsletter section end-->