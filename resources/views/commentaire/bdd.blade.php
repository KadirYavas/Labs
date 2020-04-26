@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-3"><h2 class="">Base de données pour les commentaires</h2></div>

{{-- <a href="{{route('ajoutArticle')}}"><button class="btn btn-outline-info m-1">Ajouter un article</button></a> --}}

<table class="table table-bordered table-hover shadow">
    <thead>
    <tr>
        <th>ID</th>
        <th>Commentaires</th>
        <th>Titre de l'article appartenant au commentaire</th>
        <th>Nom de l'user ayant laissé le commentaire</th>
    </tr>
    </thead>
    <tbody>
    @foreach($commentaire as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->message }}</td>
            <td>{{ $item->article->titre }}</td>
            <td>{{ $item->user->name }}</td>
        </tr>
    @endforeach
    </tbody>
  </table>
   

@stop
  