@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-3"><h2 class="">Base de données pour la section Header</h2></div>

<table class="table table-bordered table-hover shadow">
    <thead>
    <tr>
        <th>ID</th>
        <th>Logo du site & Logo carousel</th>
        <th>Texte du carousel</th>
        <th>Nav Un</th>
        <th>Nav Deux</th>
        <th>Nav Trois</th>
        <th>Nav Quatre</th>
        <th>Actions: Edit</th>
    </tr>
    </thead>
    <tbody>
    @foreach($header as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td><img src="{{ 'img/'.$item->logo }}" width="200px" alt=""></td>
            <td>{{ $item->texte }}</td>
            <td>{{ $item->navUn }}</td>
            <td>{{ $item->navDeux }}</td>
            <td>{{ $item->navTrois }}</td>
            <td>{{ $item->navQuatre }}</td>
            <td>
                <a href="{{route('editLogoHeader', $item->id)}}"><button class="btn btn-outline-info m-1">Modifier logo header</button></a>
                <a href="{{route('editNav', $item->id)}}"><button class="btn btn-outline-success m-1">Modifier nav</button></a>
                <a href="{{route('editTexte', $item->id)}}"><button class="btn btn-outline-warning m-1">Modifier texte</button></a>
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>
  
    <div class="my-5"><a href="{{route('addCarousel')}}"><button class="btn btn-outline-primary m-1">Ajoutez une image pour le carousel</button></a></div>
   

  <table class="table table-bordered table-hover shadow">
    <thead>
    <tr>
        <th>ID</th>
        <th>Image Carousel</th>
        <th>Actions: Edit</th>
    </tr>
    </thead>
    <tbody>
    @foreach($carousel as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td><img src="{{ 'storage/'.$item->image }}" width="200px" alt=""></td>
            <td>
                <a href="{{route('editCarousel', $item->id)}}"><button class="btn btn-outline-danger m-1">Modifier</button></a>
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>

@stop
  