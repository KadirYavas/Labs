@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<form action="{{route('updateTexte', $headerTexte->id)}}" method="post">
@csrf

<input class="form-control @error('texte') is-invalid @enderror" value="@if($errors->first($headerTexte->texte))@else{{old($headerTexte->texte)}}@endif" type="text" name="texte" id="">
@error('texte')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<button class="btn btn-danger" type="submit">Editez le texte</button>

</form>

@stop