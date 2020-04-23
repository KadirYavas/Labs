@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-3"><h2 class="">Base de données pour le newsletter</h2></div>

<table class="table table-bordered table-hover shadow">
    <thead>
    <tr>
        <th>ID</th>
        <th>Email des utilisateurs inscris</th>
    </tr>
    </thead>
    <tbody>
    @foreach($news as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->email }}</td>
        </tr>
    @endforeach
    </tbody>
  </table>


@stop
  