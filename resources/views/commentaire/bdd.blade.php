@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-3"><h2 class="">Base de données pour les commentaires</h2></div>

{{-- <a href="{{route('ajoutArticle')}}"><button class="btn btn-outline-info m-1">Ajouter un article</button></a> --}}

<table class="table table-bordered table-hover shadow">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Sujet</th>
        <th>Message</th>
    </tr>
    </thead>
    <tbody>
    @foreach($commentaire as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nom }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->sujet }}</td>
            <td>{{ $item->message }}</td>
        </tr>
    @endforeach
    </tbody>
  </table>
   

@stop
  