@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<form action="{{route('updateCarousel', $headerCarousel->id)}}" method="post" enctype="multipart/form-data">
@csrf

<input class="form-control @error('image') is-invalid @enderror" value="@if($errors->first($headerCarousel->image))@else{{old($headerCarousel->image)}}@endif" type="file" name="image" id="">
@error('image')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<button class="btn btn-danger" type="submit">Editez le carousel</button>

</form>

@stop