@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<a href="{{route('createService')}}"><button class="btn btn-outline-info m-1">Ajoutez un service</button></a>


<table class="table table-bordered table-hover shadow">
    <thead>
    <tr>
        <th>ID</th>
        <th>Logo</th>
        <th>Titre</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    @foreach($service as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->logo }}</td>
            <td>{{ $item->titre }}</td>
            <td>{{ $item->description }}</td>
            <td>
                <a href="{{route('editService', $item->id)}}"><button class="btn btn-outline-info m-1">Modifier</button></a>
            </td>
            <td>
                <a href="{{route('destroyService', $item->id)}}"><button class="btn btn-outline-info m-1">Supprimer</button></a>
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>

@stop
  