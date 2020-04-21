@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<form action="{{route('updateLogoHeader', $header->id)}}" method="post" enctype="multipart/form-data">
@csrf

<input class="form-control" value="{{$header->logo}}" type="file" name="logo" id="">

<button class="btn btn-danger" type="submit">Editez le logo</button>

</form>

@stop