@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<table class="table table-bordered table-hover shadow">
    <thead>
    <tr>
        <th>ID</th>
        <th>Logo</th>
        <th>Texte</th>
        <th>Nav Un</th>
        <th>Nav Deux</th>
        <th>Nav Trois</th>
        <th>Nav Quatre</th>
        <th>Edit Logo Header</th>
        <th>Edit Nav</th>
        <th>Edit Texte</th>
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
                <a href="{{route('editLogoHeader', $item->id)}}"><button class="btn btn-outline-info m-1">Modifier</button></a>
            </td>
            <td>
                <a href="{{route('editNav', $item->id)}}"><button class="btn btn-outline-info m-1">Modifier</button></a>
            </td>
            <td>
                <a href="{{route('editTexte', $item->id)}}"><button class="btn btn-outline-info m-1">Modifier</button></a>
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>
  <table class="table table-bordered table-hover shadow">
    <thead>
    <tr>
        <th>ID</th>
        <th>Image Carousel</th>
        <th>Edit Carousel</th>
    </tr>
    </thead>
    <tbody>
    @foreach($carousel as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td><img src="{{ 'img/'.$item->image }}" width="200px" alt=""></td>
            <td>
                <a href="{{route('editCarousel', $item->id)}}"><button class="btn btn-outline-info m-1">Modifier</button></a>
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>

@stop
  