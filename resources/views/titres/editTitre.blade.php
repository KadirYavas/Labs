@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-4">
    <h2>Editez le titre</h2>
</div>

<form action="{{route('updateTitre', $titres->id)}}" method="post">
@csrf

<input class="w-50 m-3 form-control @error('titreDiscover') is-invalid @enderror" value="{{$titres->titreDiscover}}" type="text" name="titreDiscover" id="">
@error('titreDiscover')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="w-75 m-3 form-control @error('titreClient') is-invalid @enderror" value="{{$titres->titreClient}}" type="text" name="titreClient" id="">
@error('titreClient')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="w-75 m-3 form-control @error('titreService') is-invalid @enderror" value="{{$titres->titreService}}" type="text" name="titreService" id="">
@error('titreService')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="w-75 m-3 form-control @error('titreTeam') is-invalid @enderror" value="{{$titres->titreTeam}}" type="text" name="titreTeam" id="">
@error('titreTeam')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="w-75 m-3 form-control @error('titreContact') is-invalid @enderror" value="{{$titres->titreContact}}" type="text" name="titreContact" id="">
@error('titreContact')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="w-75 m-3 form-control @error('titreReady') is-invalid @enderror" value="{{$titres->titreReady}}" type="text" name="titreReady" id="">
@error('titreReady')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="w-75 m-3 form-control @error('titreNewsletter') is-invalid @enderror" value="{{$titres->titreNewsletter}}" type="text" name="titreNewsletter" id="">
@error('titreNewsletter')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="text-center m-4"><button class="btn btn-danger" type="submit">Editez le titre</button></div>

</form>

@stop
