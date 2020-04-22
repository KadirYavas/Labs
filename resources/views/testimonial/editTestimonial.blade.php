@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-4">
    <h2>Editez le testimonial</h2>
</div>

<form action="{{route('updateTestimonial', $testimonial->id)}}" method="post" enctype="multipart/form-data">
@csrf

<div class="d-flex justify-content-around mb-3">
    <input class="w-75 form-control @error('nom') is-invalid @enderror" type="text" name="nom" id="" rows="5" cols="40" value="{{$testimonial->nom}}">
    @error('nom')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>

    <div class="d-flex justify-content-around mb-3">
        <input class="w-75 form-control @error('prenom') is-invalid @enderror" type="text" name="prenom" id="" rows="5" cols="40" value="{{$testimonial->prenom}}">
        @error('prenom')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>

<div class="d-flex justify-content-around mb-3">
    <input class="w-75 form-control @error('fonction') is-invalid @enderror" type="text" name="fonction" id="" rows="5" cols="40" value="{{$testimonial->fonction}}">
    @error('fonction')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>

<div class="d-flex justify-content-around mb-3">
<textarea class="w-75 form-control @error('texte') is-invalid @enderror" type="text" name="texte" id="" rows="5" cols="40">{{$testimonial->texte}}</textarea>
@error('texte')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

<div class="d-flex justify-content-around mb-3">
    <input class="w-75 form-control @error('image') is-invalid @enderror" type="file" name="image" id="" rows="5" cols="40" value="{{$testimonial->image}}">
    @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>


<div class="text-center m-4"><button class="btn btn-danger" type="submit">Editez le testimonial</button></div>

</form>

@stop