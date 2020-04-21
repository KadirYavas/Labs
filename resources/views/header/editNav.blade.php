@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-4">
    <h2>Editez les noms de la barre de recherche</h2>
</div>

<form action="{{route('updateNav', $headerNav->id)}}" method="post">
@csrf

<div class="d-flex flex-column align-items-center">
<input class="w-25 m-2 form-control @error('navUn') is-invalid @enderror" value="{{$headerNav->navUn}}" type="text" name="navUn" id="">
@error('navUn')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="w-25 m-2 form-control @error('navDeux') is-invalid @enderror" value="{{$headerNav->navDeux}}" type="text" name="navDeux" id="">
@error('navDeux')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="w-25 m-2 form-control @error('navTrois') is-invalid @enderror" value="{{$headerNav->navTrois}}" type="text" name="navTrois" id="">
@error('navTrois')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="w-25 m-2 form-control @error('navQuatre') is-invalid @enderror" value="{{$headerNav->navQuatre}}" type="text" name="navQuatre" id="">
@error('navQuatre')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

<div class="text-center m-4"><button class="btn btn-danger" type="submit">Editez les noms</button></div>

</form>

@stop