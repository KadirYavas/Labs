@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-3"><h2 class="">Base de données pour la section Discover</h2></div>

<table class="table table-bordered table-hover shadow">
    <thead>
    <tr>
        <th>ID</th>
        <th>Texte de gauche</th>
        <th>Texte de droite</th>
        <th>Vidéo</th>
        <th>Actions: Edit</th>
    </tr>
    </thead>
    <tbody>
    @foreach($discover as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->textGauche }}</td>
            <td>{{ $item->textDroite }}</td>
            <td><a href="{{ $item->video }}">Lien de la vidéo</a></td>
            <td class="d-flex">
                <a href="{{route('editTexteVideo', $item->id)}}"><button class="btn btn-outline-primary m-1">Modifier le texte & vidéo</button></a>
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>
  
    {{-- <div class="my-5"><a href="{{route('addCarousel')}}"><button class="btn btn-outline-primary m-1">Ajoutez une image pour le carousel</button></a></div> --}}
   

@stop
  