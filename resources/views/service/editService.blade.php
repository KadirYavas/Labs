@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-4">
    <h2>Editez un service</h2>
</div>

<form action="{{route('updateService', $service->id)}}" method="post">
@csrf

{{-- <div class="d-flex flex-column align-items-center">
<input class="w-50 m-3 form-control @error('logo') is-invalid @enderror" value="{{$service->logo}}" type="text" name="logo" id="">
@error('logo')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror --}}


<div class="row">
    @foreach ($icones as $item)
        <div class="form-check col-2">
            <input class="form-check-input" type="radio" name="logo" value="{{$item['class']}}" @if($item['class'] == $service->logo) checked @endif>
            <label class="form-check-label"><i class="{{$item['class']}} fa-2x"></i></label>
        </div>
    @endforeach
</div>

<input class="w-50 m-3 form-control @error('titre') is-invalid @enderror" value="{{$service->titre}}" type="text" name="titre" id="">
@error('titre')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="w-75 m-3 form-control @error('description') is-invalid @enderror" value="{{$service->description}}" type="text" name="description" id="">
@error('description')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

<div class="text-center m-4"><button class="btn btn-danger" type="submit">Editez le service</button></div>

</form>

@stop

@section('css')
<link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
@endsection