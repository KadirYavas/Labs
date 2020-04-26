<!-- Footer section -->
<footer class="footer-section">
    @foreach ($footer as $item) 
        @if ($item->position)
            <h2>{{$item->texte}} <a href="{{$item->lien}}" target="_blank">Colorlib</a></h2>
        @else
            <h2><a href="{{$item->lien}}" target="_blank">{{$item->nom}}</a> {{$item->texte}} </h2>
        @endif
    @endforeach
</footer>
<!-- Footer section end -->