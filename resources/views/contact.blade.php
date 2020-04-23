@extends('layouts/master')

@section('content')
<!-- Page Preloder -->
{{-- <div id="preloder">
    <div class="loader">
        <img src="img/logo.png" alt="">
        <h2>Loading.....</h2>
    </div>
</div> --}}

@include('components/header')

@include('components/headerContact')

<!-- Google map -->
<div class="map" id="map-area">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2518.69314430385!2d4.339030950678192!3d50.85536636588713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c38c275028d3%3A0xc7799151146ebf77!2sMolenGeek!5e0!3m2!1sfr!2sbe!4v1587635093094!5m2!1sfr!2sbe" width="100%" height="750" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

@include('components/contact')

@include('components/footer')

@endsection