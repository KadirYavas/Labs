@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-4">
    <h2>Editez le quote</h2>
</div>

<form action="{{route('updateQuote', $quote->id)}}" method="post">
@csrf

<div class="d-flex justify-content-around mb-3">
<textarea class="w-75 form-control @error('description') is-invalid @enderror" type="text" name="description" id="" rows="5" cols="40">{{$quote->description}}</textarea>
@error('description')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>


<div class="text-center m-4"><button class="btn btn-danger" type="submit">Editez le quote</button></div>

</form>

@stop