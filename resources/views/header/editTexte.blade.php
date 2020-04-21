@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<form action="{{route('updateTexte', $headerTexte->id)}}" method="post">
@csrf

<input class="form-control" value="{{$headerTexte->texte}}" type="text" name="texte" id="">

<button class="btn btn-danger" type="submit">Editez le texte</button>

</form>

@stop