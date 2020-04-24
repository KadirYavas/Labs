@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-4">
    <h2>Editez la categorie</h2>
</div>

<form action="{{route('updateCategorie', $categorie->id)}}" method="post">
@csrf

<div>

<input class="w-50 m-3 form-control @error('categorie') is-invalid @enderror" value="{{$categorie->section}}" type="text" name="categorie" id="">
    @error('categorie')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

</div>

<div class="text-center m-4"><button class="btn btn-danger" type="submit">Editez la catégorie</button></div>

</form>

@stop