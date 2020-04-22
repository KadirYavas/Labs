@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-4">
    <h2>Editez le carousel</h2>
</div>

<form action="{{route('updateCarousel', $headerCarousel->id)}}" method="post" enctype="multipart/form-data">
@csrf

<div class="d-flex justify-content-around">
<input class="w-25 form-control @error('image') is-invalid @enderror" value="{{$headerCarousel->image}}" type="file" name="image" id="">
@error('image')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>


<div class="text-center m-4"><button class="btn btn-danger" type="submit">Editez le carousel</button></div>

</form>

@stop