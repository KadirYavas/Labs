@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-4">
    <h2>Editez le logo</h2>
</div>

<form action="{{route('updateLogoHeader', $header->id)}}" method="post" enctype="multipart/form-data">
@csrf

<div class="d-flex justify-content-around">
<input class="w-25 form-control @error('logo') is-invalid @enderror" value="{{$header->logo}}" type="file" name="logo" id="">
@error('logo')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

<div class="text-center m-4"><button class="btn btn-danger" type="submit">Editez le logo</button></div>

</form>

@stop