@extends('layouts.plantilla')

@section('title', 'cursos')



@section('content')
    <h1>bienvenido a la pagina principal de cursos</h1>
    <a href="{{route('cursos.create')}}">Crear cursos</a>
    <ul>
        @foreach ($cursos as $curso)
        <li>
           <a href="{{route('cursos.show', $curso->id)}}">{{$curso->nombre}}</a> 
        </li>
        @endForeach
    </ul>


    {{$cursos ->links()}}
@endsection