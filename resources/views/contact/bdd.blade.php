@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-3"><h2 class="">Base de données pour la section Contact</h2></div>

<table class="table table-bordered table-hover shadow">
    <thead>
    <tr>
        <th>ID</th>
        <th>Description</th>
        <th>Pays & Ville</th>
        <th>Adresse</th>
        <th>Numéro</th>
        <th>Email</th>
        <th>Actions: Edit</th>
    </tr>
    </thead>
    <tbody>
    @foreach($contact as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->paysville }}</td>
            <td>{{ $item->adresse }}</td>
            <td>{{ $item->numero }}</td>
            <td>{{ $item->email }}</td>
            <td>
                <a href="{{route('editContact', $item->id)}}"><button class="btn btn-outline-info m-1">Modifier le contact</button></a>
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>
   

@stop
  