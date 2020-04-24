@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-3"><h2 class="">Base de données pour la section Blog</h2></div>

{{-- <a href="{{route('ajoutArticle')}}"><button class="btn btn-outline-info m-1">Ajouter un article</button></a> --}}

<table class="table table-bordered table-hover shadow">
    <thead>
    <tr>
        <th>ID</th>
        <th>Photo</th>
        <th>Titre</th>
        <th>Description</th>
        <th>Créateur de l'article</th>
        <th>Catégorie de l'article</th>
        <th>Tag de l'article</th>
        <th>Actions: Edit</th>
    </tr>
    </thead>
    <tbody>
    @foreach($article as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td><img src="{{ 'storage/'.$item->photo }}" width="60%" alt=""></td>
            <td>{{ $item->titre }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->user->name }}</td>
            <td>{{ $item->categorie->section }}</td>
            <td>@foreach ($item->tags as $tag)
                {{ $tag->tag }}
            @endforeach</td>
           
            <td>
                <a href="{{route('editArticle', $item->id)}}"><button class="btn btn-outline-info m-1">Modifier l'article</button></a>
                {{-- <a href="{{route('showArticle', $item->id)}}"><button class="btn btn-outline-info m-1">Show l'article</button></a> --}}
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>
   

@stop
  