@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-4">
    <h2>Editez le texte</h2>
</div>

<form action="{{route('updateTexte', $headerTexte->id)}}" method="post">
@csrf

<div class="d-flex justify-content-around">
<input class="w-50 form-control @error('texte') is-invalid @enderror" value="{{$headerTexte->texte}}" type="text" name="texte" id="">
@error('texte')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

<div class="text-center m-4"><button class="btn btn-danger" type="submit">Editez le texte</button></div>

</form>

@stop