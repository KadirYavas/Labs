@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-4">
    <h2>Ajoutez une image pour le carousel</h2>
</div>

<form action="{{route('envoiCarousel')}}" method="post" enctype="multipart/form-data">
@csrf

<div class="d-flex justify-content-around">
<input class="w-25 form-control @error('image') is-invalid @enderror" value="@if($errors->first('logo'))@else{{old('image')}}@endif" type="file" name="image" id="" placeholder="Veuillez choisir un logo">
@error('image')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>


<div class="text-center m-4"><button class="btn btn-danger" type="submit">Ajoutez une image</button></div>


</form>

@stop