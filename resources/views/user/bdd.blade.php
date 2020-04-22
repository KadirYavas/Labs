@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-3"><h2 class="">Base de données pour les users</h2></div>


<table class="table table-bordered table-hover shadow">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Role</th>
        <th>Photo</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $item)
    @if ($item->role->role == 'Visiteur')
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->password }}</td>
            <td>{{ $item->role->role }}</td>
            <td><img src="{{ 'storage/'.$item->photo }}" width="80px" alt=""></td>
            <td>
                <a href="{{route('editUser', $item->id)}}"><button class="btn btn-outline-success m-1">Modifier</button></a>
            </td>
        </tr>
    @endif
        
    @endforeach
    </tbody>
  </table>

@stop