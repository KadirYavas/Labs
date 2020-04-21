@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-4">
    <h2>Editez le texte de droite</h2>
</div>

<form action="{{route('updateTexteDroite', $discover->id)}}" method="post">
@csrf

<div class="d-flex justify-content-around">
<input class="w-25 form-control @error('texteDroite') is-invalid @enderror" value="{{$discover->texteDroite}}" type="text" name="texteDroite" id="">
@error('texteDroite')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

<div class="text-center m-4"><button class="btn btn-danger" type="submit">Editez le texte de droite</button></div>

</form>

@stop