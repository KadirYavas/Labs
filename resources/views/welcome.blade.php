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

@include('partials/intro')

@include('partials/about')

@include('partials/testimonial')

@include('partials/service')

@include('partials/team')

@include('components/promo')

@include('components/contact')

@include('components/footer')

@endsection