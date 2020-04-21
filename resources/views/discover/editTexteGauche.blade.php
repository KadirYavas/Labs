@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-4">
    <h2>Editez le texte de gauche</h2>
</div>

<form action="{{route('updateTexteGauche', $discover->id)}}" method="post">
@csrf

<div class="d-flex justify-content-around">
<textarea class="w-75 form-control @error('texteGauche') is-invalid @enderror" type="text" name="texteGauche" id="" rows="5" cols="40">{{$discover->textGauche}}</textarea>
@error('texteGauche')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

<div class="text-center m-4"><button class="btn btn-danger" type="submit">Editez le texte de gauche</button></div>

</form>

@stop