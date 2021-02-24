@extends('layouts.plantilla')

@section('title', 'cursos create')



@section('content')
    <h1>en este curso podras crear cursos</h1>


    <form action="{{route('cursos.store')}}" method="post">
        
        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5"></textarea>
        </label>
        <br>
        <label>
            categoria:
            <br>
            <input type="text" name="categoria">
        </label>
        <br>

        <button type="submit">enviar formulario</button>
    </form>
@endsection