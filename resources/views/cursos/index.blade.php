@extends('layouts.plantilla')

@section('title', 'cursos')



@section('content')
    <h1>bienvenido a la pagina principal de cursos</h1>
    <ul>
        @foreach ($cursos as $curso)
        <li>{{$curso}}</li>
    </ul>
    @endsection