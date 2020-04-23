@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-4">
    <h2>Editez un article</h2>
</div>

<form action="{{route('updateArticle', $article->id)}}" method="post" enctype="multipart/form-data">
@csrf

<div>

<input class="w-50 m-3 form-control @error('photo') is-invalid @enderror" value="{{$article->photo}}" type="file" name="photo" id="" @if($article->valide == false)disabled @endif>
    @error('photo')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

<input class="w-50 m-3 form-control @error('titre') is-invalid @enderror" value="{{$article->titre}}" type="text" name="titre" id="" @if($article->valide == false)disabled @endif>
@error('titre')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="w-75 m-3 form-control @error('description') is-invalid @enderror" value="{{$article->description}}" type="text" name="description" id="" @if($article->valide == false)disabled @endif>
@error('description')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<select class="form-control w-25 mb-4" name="categorie" id="" @if($article->valide == false)disabled @endif>
    <option value="">Choisir une catégorie</option>
    @foreach ($categorie as $item)
        <option value="{{$item->id}}">{{$item->section}}</option>
    @endforeach
</select>

@if ($article->valide == false)
    <select class="form-control w-25" name="valide" id="">
        <option value="">Choisir la validation</option>
        <option value="0">Ne pas validé</option>
        <option value="1">Validé</option>
    </select>
@endif

</div>

<div class="text-center m-4"><button class="btn btn-danger" type="submit">Editez le article</button></div>

</form>

@stop