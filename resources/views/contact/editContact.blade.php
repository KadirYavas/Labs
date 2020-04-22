@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-4">
    <h2>Editez la section contact</h2>
</div>

<form action="{{route('updateContact', $contact->id)}}" method="post">
@csrf

<div class="d-flex flex-column align-items-center">
<textarea class="w-25 m-2 form-control @error('description') is-invalid @enderror" value="" type="text" rows="5" cols="30" name="description" id="">{{$contact->description}}</textarea>
@error('description')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="w-25 m-2 form-control @error('paysville') is-invalid @enderror" value="{{$contact->paysville}}" type="text" name="paysville" id="">
@error('paysville')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="w-25 m-2 form-control @error('adresse') is-invalid @enderror" value="{{$contact->adresse}}" type="text" name="adresse" id="">
@error('adresse')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="w-25 m-2 form-control @error('numero') is-invalid @enderror" value="{{$contact->numero}}" type="text" name="numero" id="">
@error('numero')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="w-25 m-2 form-control @error('email') is-invalid @enderror" value="{{$contact->email}}" type="text" name="email" id="">
@error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

<div class="text-center m-4"><button class="btn btn-danger" type="submit">Editez le contact</button></div>

</form>

@stop