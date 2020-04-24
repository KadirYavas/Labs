@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-4">
    <h2>Editez le tag</h2>
</div>

<form action="{{route('updateCategorie', $categorie->id)}}" method="post">
@csrf

<div>

<input class="w-50 m-3 form-control @error('tag') is-invalid @enderror" value="{{$tags->tag}}" type="text" name="tag" id="">
    @error('tag')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

</div>

<div class="text-center m-4"><button class="btn btn-danger" type="submit">Editez le tag</button></div>

</form>

@stop