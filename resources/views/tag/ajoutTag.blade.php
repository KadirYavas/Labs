@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-4">
    <h2>Ajoutez un tag</h2>
</div>

<form action="{{route('envoiTag')}}" method="post">
@csrf

<div>

<input class="w-25 m-3 form-control @error('tag') is-invalid @enderror" value="@if($errors->first('tag'))@else{{old('tag')}}@endif" type="text" name="tag" id="" placeholder="Veuillez saisir un tag">
@error('tag')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

</div>

<div class="text-center m-4"><button class="btn btn-danger" type="submit">Ajoutez un tag</button></button>

</form>

@stop