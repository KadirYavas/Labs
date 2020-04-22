@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-3"><h2 class="">Base de données pour les titres</h2></div>


<table class="table table-bordered table-hover shadow">
    <thead>
    <tr>
        <th>ID</th>
        <th>Titre Discover</th>
        <th>Titre Client</th>
        <th>Titre Service</th>
        <th>Titre Team</th>
        <th>Titre Contact</th>
        <th>Titre Ready</th>
        <th>Titre Newsletter</th>
    </tr>
    </thead>
    <tbody>
    @foreach($titres as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->titreDiscover }}</td>
            <td>{{ $item->titreClient }}</td>
            <td>{{ $item->titreService }}</td>
            <td>{{ $item->titreTeam }}</td>
            <td>{{ $item->titreContact }}</td>
            <td>{{ $item->titreReady }}</td>
            <td>{{ $item->titreNewsletter }}</td>
            <td>
                <a href="{{route('editTitre', $item->id)}}"><button class="btn btn-outline-success m-1">Modifier</button></a>
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>

@stop