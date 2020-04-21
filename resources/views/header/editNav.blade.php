@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<form action="{{route('updateNav', $headerNav->id)}}" method="post">
@csrf

<input class="form-control @error('navUn') is-invalid @enderror" value="@if($errors->first($headerNav->navUn))@else{{old($headerNav->navUn)}}@endif" type="text" name="navUn" id="">
@error('navUn')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="form-control @error('navDeux') is-invalid @enderror" value="@if($errors->first($headerNav->navDeux))@else{{old($headerNav->navDeux)}}@endif" type="text" name="navDeux" id="">
@error('navDeux')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="form-control @error('navTrois') is-invalid @enderror" value="@if($errors->first($headerNav->navTrois))@else{{old($headerNav->navTrois)}}@endif" type="text" name="navTrois" id="">
@error('navTrois')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="form-control @error('navQuatre') is-invalid @enderror" value="@if($errors->first($headerNav->navQuatre))@else{{old($headerNav->navQuatre)}}@endif" type="text" name="navQuatre" id="">
@error('navQuatre')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<button class="btn btn-danger" type="submit">Editez les noms</button>

</form>

@stop