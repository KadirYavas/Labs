@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-4">
    <h2>Ajoutez un article</h2>
</div>

<form action="{{route('envoiArticle')}}" method="post" enctype="multipart/form-data">
@csrf

<div>

<input class="w-25 m-3 form-control @error('photo') is-invalid @enderror" value="@if($errors->first('photo'))@else{{old('photo')}}@endif" type="file" name="photo" id="" placeholder="Veuillez choisir une photo">
@error('photo')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="w-25 m-3 form-control @error('titre') is-invalid @enderror" value="@if($errors->first('titre'))@else{{old('titre')}}@endif" type="text" name="titre" id="" placeholder="Veuillez saisir un titre">
@error('titre')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="w-25 m-3 form-control @error('description') is-invalid @enderror" value="@if($errors->first('description'))@else{{old('description')}}@endif" type="text" name="description" id="" placeholder="Veuillez saisir une description">
@error('description')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<select class="form-control" name="categorie" id="">
    <option value="">Choisir une catégorie</option>
    @foreach ($categorie as $item)
        <option value="{{$item->id}}">{{$item->section}}</option>
    @endforeach
</select>

</div>

<div class="text-center m-4"><button class="btn btn-danger" type="submit">Ajoutez un article</button></button>

</form>

@stop

@section('css')
<link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
@endsection