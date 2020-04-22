<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            @foreach ($contact as $item)
                <div class="col-md-5 col-md-offset-1 contact-info col-push">
                    <div class="section-title left">
                        <h2>{!! App\Helper\Color::green($titres->titreContact) !!}</h2>
                    </div>
                    <p>{{$item->description}} </p>
                    <h3 class="mt60">Main Office</h3>
                    <p class="con-item">{{$item->paysville}} <br> {{$item->adresse}} </p>
                    <p class="con-item">{{$item->numero}}</p>
                    <p class="con-item">{{$item->email}}</p>
                </div>
            @endforeach
            <!-- contact form -->
            <div class="col-md-6 col-pull">

                @if(Session::has('newsletter'))

                <div class="alert alert-success" id="newsletterSuccess">
                    Votre <strong>message</strong> a bien été envoyé.
                </div>

                @endif

                <form class="form-class" id="con_form" action="{{route('email')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" placeholder="Your name">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="email" placeholder="Your email">
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="subject" placeholder="Subject">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button class="site-btn">send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->