@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<form action="{{route('updateService', $service->id)}}" method="post">
@csrf

<input class="form-control @error('logo') is-invalid @enderror" value="@if($errors->first($service->logo))@else{{old($service->logo)}}@endif" type="text" name="logo" id="">
@error('logo')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="form-control @error('titre') is-invalid @enderror" value="@if($errors->first($service->titre))@else{{old($service->titre)}}@endif" type="text" name="titre" id="">
@error('titre')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="form-control @error('description') is-invalid @enderror" value="@if($errors->first($service->description))@else{{old($service->description)}}@endif" type="text" name="description" id="">
@error('description')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<button class="btn btn-danger" type="submit">Editez le service</button>

</form>

@stop