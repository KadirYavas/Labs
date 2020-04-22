@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-4">
    <h2>Ajoutez un testimonial</h2>
</div>

<form action="{{route('envoiTestimonial')}}" method="post" enctype="multipart/form-data">
@csrf

<div>
<input class="w-25 m-3 form-control @error('nom') is-invalid @enderror" value="@if($errors->first('nom'))@else{{old('nom')}}@endif" type="text" name="nom" id="" placeholder="Veuillez saisir un nom">
@error('nom')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="w-25 m-3 form-control @error('prenom') is-invalid @enderror" value="@if($errors->first('prenom'))@else{{old('prenom')}}@endif" type="text" name="prenom" id="" placeholder="Veuillez saisir un prenom">
@error('prenom')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="w-25 m-3 form-control @error('fonction') is-invalid @enderror" value="@if($errors->first('fonction'))@else{{old('fonction')}}@endif" type="text" name="fonction" id="" placeholder="Veuillez saisir une fonction">
@error('fonction')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<textarea class="w-25 m-3 form-control @error('texte') is-invalid @enderror" type="text" name="texte" id="" placeholder="Veuillez saisir un texte">@if($errors->first('texte'))@else{{old('texte')}}@endif</textarea>
@error('texte')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="w-25 m-3 form-control @error('image') is-invalid @enderror" value="@if($errors->first('image'))@else{{old('image')}}@endif" type="file" name="image" id="" placeholder="Veuillez saisir une image">
@error('image')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

<div class="text-center m-4"><button class="btn btn-danger" type="submit">Ajoutez un testimonial</button></button>

</form>

@stop