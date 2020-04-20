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

@include('components/headerService')

@include('partials/service')

@include('partials/featureService')

@include('partials/cardService')

@include('components/newsletter')

@include('components/contact')

@include('components/footer')

@endsection