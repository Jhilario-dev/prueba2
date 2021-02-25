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
            <input type="text" name="name" value="{{old('name',$curso->nombre)}}">
        </label>
        
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion',$curso->descripcion)}}</textarea>
        </label>
        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            categoria:
            <br>
            <input type="text" name="categoria" value="{{old( 'categoria', $curso->categoria)}}">
        </label>
        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>

        <button type="submit">actualizar formulario</button>
    </form>
@endsection