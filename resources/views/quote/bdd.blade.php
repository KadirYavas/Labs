@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-3"><h2 class="">Base de données pour les quotes</h2></div>

<table class="table table-bordered table-hover shadow">
    <thead>
    <tr>
        <th>ID</th>
        <th>Description du quote</th>
        <th>Actions: Edit</th>
    </tr>
    </thead>
    <tbody>
    @foreach($quote as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->description }}</td>
            <td class="d-flex">
                <a href="{{route('editQuote', $item->id)}}"><button class="btn btn-outline-info m-1">Modifier le quote</button></a>
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>


@stop
  