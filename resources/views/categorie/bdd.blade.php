@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-3"><h2 class="">Base de données pour les catégories</h2></div>

{{-- <a href="{{route('ajoutArticle')}}"><button class="btn btn-outline-info m-1">Ajouter un article</button></a> --}}

<table class="table table-bordered table-hover shadow">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom de la catégorie</th>
        <th>Nom des articles</th>
        <th>Actions: Edit</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categorie as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->section }}</td>
            
            <td>
                <ul>
                    @foreach ($item->articles as $article)
                        <li style="list-style: none;">{{$article->titre}}</li>
                    @endforeach
                </ul>
            </td>
            <td>
                <a href="{{route('editCategorie', $item->id)}}"><button class="btn btn-outline-success m-1">Editez la categorie</button></a>
                <a href="{{route('destroyCategorie', $item->id)}}"><button class="btn btn-outline-danger m-1">Supprimer la categorie</button></a>
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>
   

@stop
  