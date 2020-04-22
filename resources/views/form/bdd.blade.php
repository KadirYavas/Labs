@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-3"><h2 class="">Base de données pour le formulaire</h2></div>

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
    @foreach($form as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nom }}</td>
            <td>{{ $item->email }}</td>
            <td>{{$item->sujet}}</td>
            <td>{{$item->message}}</td>
        </tr>
    @endforeach
    </tbody>
  </table>


@stop
  