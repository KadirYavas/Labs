@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-3"><h2 class="">Base de données pour la section Testimonial</h2></div>

<a href="{{route('addTestimonial')}}"><button class="btn btn-outline-primary m-1">Ajouter un testimonial</button></a>

<table class="table table-bordered table-hover shadow">
    <thead>
    <tr>
        <th>ID</th>
        <th>Prénom Nom</th>
        <th>Fonction</th>
        <th>Texte</th>
        <th>Image</th>
        <th>Actions: Edit</th>
    </tr>
    </thead>
    <tbody>
    @foreach($testimonial as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->prenom }} {{ $item->nom }}</td>
            <td>{{$item->fonction}}</td>
            <td>{{$item->texte}}</td>
            <td><img src="{{'storage/'.$item->image}}" width="60px" alt=""></td>
            <td class="d-flex">
                <a href="{{route('editTestimonial', $item->id)}}"><button class="btn btn-outline-primary m-1">Modifier le testimonial</button></a>
                <a href="{{route('destroyTestimonial', $item->id)}}"><button class="btn btn-outline-danger m-1">Delete le testimonial</button></a>
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>


@stop
  