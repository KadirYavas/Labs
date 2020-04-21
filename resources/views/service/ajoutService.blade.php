@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<form action="{{route('envoiService')}}" method="post">
@csrf

<input class="form-control @error('logo') is-invalid @enderror" value="@if($errors->first('logo'))@else{{old('logo')}}@endif" type="text" name="logo" id="" placeholder="Veuillez choisir un logo">
@error('logo')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="form-control @error('titre') is-invalid @enderror" value="@if($errors->first('titre'))@else{{old('titre')}}@endif" type="text" name="titre" id="" placeholder="Veuillez saisir un titre">
@error('titre')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="form-control @error('description') is-invalid @enderror" value="@if($errors->first('description'))@else{{old('description')}}@endif" type="text" name="description" id="" placeholder="Veuillez saisir une description">
@error('description')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<button class="btn btn-danger" type="submit">Ajoutez un service</button>

</form>

@stop