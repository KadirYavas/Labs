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
<div class="map" id="map-area"></div>

@include('components/contact')

@include('components/footer')

@endsection