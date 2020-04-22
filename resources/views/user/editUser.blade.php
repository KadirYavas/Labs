@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center mb-4">
    <h2>Editez un user</h2>
</div>

<form action="{{route('updateUser', $user->id)}}" method="post">
@csrf

<input class="w-50 m-3 form-control @error('name') is-invalid @enderror" value="{{$user->name}}" type="text" name="name" id="" disabled>
@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="w-75 m-3 form-control @error('email') is-invalid @enderror" value="{{$user->email}}" type="text" name="email" id="" disabled>
@error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<input class="w-75 m-3 form-control @error('password') is-invalid @enderror" value="{{$user->password}}" type="text" name="password" id="" disabled>
@error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<img src="{{'storage/'.$user->photo}}" width="100px" alt="">

<select class="form-control" name="role" id="">
    <option value="">Choisissez un role</option>
    @foreach ($roles as $item)
        @if ($item->role != 'Visiteur' && $item->role != 'Admin' && $item->role != 'CEO')   
            <option value="{{$item->id}}">{{$item->role}}</option>
        @endif
    @endforeach
</select>
</div>

<div class="text-center m-4"><button class="btn btn-danger" type="submit">Editez le user</button></div>

</form>

@stop
