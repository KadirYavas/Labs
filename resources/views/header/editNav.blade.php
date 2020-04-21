@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<form action="{{route('updateNav', $headerNav->id)}}" method="post">
@csrf

<input class="form-control" value="{{$headerNav->navUn}}" type="text" name="navUn" id="">

<input class="form-control" value="{{$headerNav->navDeux}}" type="text" name="navDeux" id="">

<input class="form-control" value="{{$headerNav->navTrois}}" type="text" name="navTrois" id="">

<input class="form-control" value="{{$headerNav->navQuatre}}" type="text" name="navQuatre" id="">

<button class="btn btn-danger" type="submit">Editez le logo</button>

</form>

@stop