@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-3"><h2 class="">Base de données pour la section Service</h2></div>

{{-- <div class="my-5"><a href="{{route('addService')}}"><button class="btn btn-outline-primary m-1">Ajoutez un service</button></a></div> --}}


<table class="table table-bordered table-hover shadow">
    <thead>
    <tr>
        <th>ID</th>
        <th>Logo</th>
        <th>Titre</th>
        <th>Description</th>
        <th>Actions: Edit & Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($service as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td><i class="{{ $item->logo }} fa-3x"></i></td>
            <td>{{ $item->titre }}</td>
            <td>{{ $item->description }}</td>
            <td>
                <a href="{{route('editService', $item->id)}}"><button class="btn btn-outline-success m-1">Modifier</button></a>
                <a href="{{route('destroyService', $item->id)}}"><button class="btn btn-outline-danger m-1">Supprimer</button></a>
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>

@stop

@section('css')
<link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
@endsection