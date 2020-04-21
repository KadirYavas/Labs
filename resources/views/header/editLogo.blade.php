@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<form action="{{route('updateLogoHeader', $header->id)}}" method="post" enctype="multipart/form-data">
@csrf

<input class="form-control @error('logo') is-invalid @enderror" value="@if($errors->first($header->logo))@else{{old($header->logo)}}@endif" type="file" name="logo" id="">
@error('logo')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<button class="btn btn-danger" type="submit">Editez le logo</button>

</form>

@stop