@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-3"><h2 class="">Base de données pour le footer</h2></div>

<table class="table table-bordered table-hover shadow">
    <thead>
    <tr>
        <th>ID</th>
        <th>Texte</th>
        <th>Lien</th>
        <th>Position: <br>True(1) = Droite <br>False(0) = Gauche</th>
        <th>Actions: Edit</th>
    </tr>
    </thead>
    <tbody>
    @foreach($footer as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->texte }}</td>
            <td><a href="{{ $item->lien }}">Lien</a></td>
            <td>{{$item->position}}</td>
            <td class="d-flex">
                <a href="{{route('editFooter', $item->id)}}"><button class="btn btn-outline-primary m-1">Modifier le texte & le lien</button></a>
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>


@stop
  