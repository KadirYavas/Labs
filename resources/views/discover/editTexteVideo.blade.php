@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-4">
    <h2>Editez le texte & la vidéo</h2>
</div>

<form action="{{route('updateTexteVideo', $discover->id)}}" method="post">
@csrf

<div class="d-flex justify-content-around mb-3">
<textarea class="w-75 form-control @error('texteDroite') is-invalid @enderror" type="text" name="texteDroite" id="" rows="5" cols="40">{{$discover->textDroite}}</textarea>
@error('texteDroite')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

<div class="d-flex justify-content-around mb-3">
    <textarea class="w-75 form-control @error('texteGauche') is-invalid @enderror" type="text" name="texteGauche" id="" rows="5" cols="40">{{$discover->textGauche}}</textarea>
    @error('texteGauche')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>

    <div class="d-flex justify-content-around mb-3">
        <input class="w-50 form-control @error('video') is-invalid @enderror" value="{{$discover->video}}" type="text" name="video" id="">
        @error('video')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>

<div class="text-center m-4"><button class="btn btn-danger" type="submit">Editez le texte & la vidéo</button></div>

</form>

@stop