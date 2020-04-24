@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-4">
    <h2>Ajoutez une categorie</h2>
</div>

<form action="{{route('envoiCategorie')}}" method="post">
@csrf

<div>

<input class="w-25 m-3 form-control @error('categorie') is-invalid @enderror" value="@if($errors->first('categorie'))@else{{old('categorie')}}@endif" type="text" name="categorie" id="" placeholder="Veuillez saisir une categorie">
@error('categorie')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

</div>

<div class="text-center m-4"><button class="btn btn-danger" type="submit">Ajoutez une categorie</button></button>

</form>

@stop