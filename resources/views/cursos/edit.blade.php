@extends('layouts.plantilla')

@section('title', 'cursos edit')



@section('content')
    <h1>en este curso podras editar un cursos</h1>


    <form action="{{route('cursos.update', $curso)}}" method="post">
        
        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{$curso->nombre}}">
        </label>
        <br>
        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5">{{$curso->descripcion}}</textarea>
        </label>
        <br>
        <label>
            categoria:
            <br>
            <input type="text" name="categoria" value="{{$curso->categoria}}">
        </label>
        <br>

        <button type="submit">actualizar formulario</button>
    </form>
@endsection