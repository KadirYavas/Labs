@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-4">
    <h2>Editez le texte & le lien</h2>
</div>

<form action="{{route('updateFooter', $footer->id)}}" method="post">
@csrf

<div class="d-flex justify-content-around mb-3">
<textarea class="w-75 form-control @error('texte') is-invalid @enderror" type="text" name="texte" id="" rows="5" cols="40">{{$footer->texte}}</textarea>
@error('texte')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

<div class="d-flex justify-content-around mb-3">
    <input class="w-75 form-control @error('lien') is-invalid @enderror" type="text" name="lien" id="" rows="5" cols="40" value="{{$footer->lien}}">
    @error('lien')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>

    <div class="d-flex justify-content-around mb-3">
        <select class="form-control w-25" name="position" id="">
            <option value="">Choisir la position</option>
            <option value="false">Gauche</option>
            <option value="true">Droite</option>
        </select>
        {{-- <input class="w-75 form-control @error('position') is-invalid @enderror" type="text" name="position" id="" rows="5" cols="40" value="{{$footer->position}}">
        @error('position')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
        </div>

<div class="text-center m-4"><button class="btn btn-danger" type="submit">Editez le texte & le lien</button></div>

</form>

@stop