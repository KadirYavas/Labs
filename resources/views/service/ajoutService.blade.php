@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-4">
    <h2>Ajoutez un service</h2>
</div>

<form action="{{route('envoiService')}}" method="post">
@csrf

<div class="d-flex justify-content-around">
<input class="w-25 m-3 form-control @error('logo') is-invalid @enderror" value="@if($errors->first('logo'))@else{{old('logo')}}@endif" type="text" name="logo" id="" placeholder="Veuillez choisir un logo">
@error('logo')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

{{-- <select class="form-control" name="logo" id="">
    <option value="">Choisir un icone...</option>
    @foreach ($service as $item)
        <option value="{{$item->id}}"><i class="{{$item->logo}}"></i></option>
    @endforeach
</select> --}}

<input class="w-25 m-3 form-control @error('titre') is-invalid @enderror" value="@if($errors->first('titre'))@else{{old('titre')}}@endif" type="text" name="titre" id="" placeholder="Veuillez saisir un titre">
@error('titre')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="w-25 m-3 form-control @error('description') is-invalid @enderror" value="@if($errors->first('description'))@else{{old('description')}}@endif" type="text" name="description" id="" placeholder="Veuillez saisir une description">
@error('description')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

<div class="text-center m-4"><button class="btn btn-danger" type="submit">Ajoutez un service</button></button>

</form>

@stop

@section('css')
<link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
@endsection