@extends('layouts.plantilla')


@section('title', "cursos $curso->nombre")


@section('content')

<h1>bienvenido al curso {{$curso->nombre}}</h1>
@endsection
