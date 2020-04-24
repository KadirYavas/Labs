@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-3"><h2 class="">Base de données pour les tags</h2></div>

{{-- <a href="{{route('ajoutArticle')}}"><button class="btn btn-outline-info m-1">Ajouter un article</button></a> --}}

<table class="table table-bordered table-hover shadow">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom du tag</th>
        <th>Nom des articles appartenant au tag</th>
        <th>Actions: Edit</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tag as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->tag }}</td>
            
            <td>
                <ul>
                    @foreach ($item->articles as $article)
                        <li style="list-style: none;">{{$article->titre}}</li>
                    @endforeach
                </ul>
            </td>
            <td>
                <a href="{{route('editTag', $item->id)}}"><button class="btn btn-outline-success m-1">Editez le tag</button></a>
                <a href="{{route('destroyTag', $item->id)}}"><button class="btn btn-outline-danger m-1">Supprimer le tag</button></a>
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>
   

@stop
  