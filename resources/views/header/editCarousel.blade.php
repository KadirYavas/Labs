@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<form action="{{route('updateCarousel', $headerCarousel->id)}}" method="post" enctype="multipart/form-data">
@csrf

<input class="form-control" value="{{$headerCarousel->image}}" type="file" name="image" id="">

<button class="btn btn-danger" type="submit">Editez le carousel</button>

</form>

@stop