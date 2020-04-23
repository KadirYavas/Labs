@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-3"><h2 class="">Base de données pour la section Blog</h2></div>

<table class="table table-bordered table-hover shadow">
    <thead>
    <tr>
        <th>ID</th>
        <th>Photo</th>
        <th>Titre</th>
        <th>Description</th>
        <th>Créateur de l'article</th>
        <th>Catégorie de l'article</th>
        <th>Actions: Edit</th>
    </tr>
    </thead>
    <tbody>
    @foreach($article as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->photo }}</td>
            <td>{{ $item->titre }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->users_id }}</td>
            <td>{{ $item->categories_id }}</td>
            <td>
                {{-- <a href="{{route('editContact', $item->id)}}"><button class="btn btn-outline-info m-1">Modifier le contact</button></a> --}}
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>
   

@stop
  