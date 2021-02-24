@extends('layouts.plantilla')


@section('title', "cursos $curso->nombre")


@section('content')

<h1>bienvenido al curso {{$curso->nombre}}</h1>
<a href="{{route('cursos.index')}}">Volver a cursos</a>
<br>
<a href="{{route('cursos.edit', $curso)}}">editar curso</a>
<p><strong>Categorias: </strong>{{$curso->categoria}}</p>
<p>{{$curso->descripcion}}</p>
@endsection
