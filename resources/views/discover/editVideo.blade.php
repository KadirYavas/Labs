@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-4">
    <h2>Editez la vidéo</h2>
</div>

<form action="{{route('updateVideo', $discover->id)}}" method="post">
@csrf

<div class="d-flex justify-content-around">
<input class="w-25 form-control @error('video') is-invalid @enderror" value="{{$discover->video}}" type="text" name="video" id="">
@error('video')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

<div class="text-center m-4"><button class="btn btn-danger" type="submit">Editez la vidéo</button></div>

</form>

@stop