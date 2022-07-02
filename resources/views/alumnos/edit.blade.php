@extends('layouts.plantilla')
@section('title','Editar Alumno')
@section('content')
    <h1> En esta página Se editara los datos de un Alumno</h1>
    <form action="{{route('alumnos.edit')}}" method="POST">
        @csrf
        <label for="">
            CODIGO:
        <input type="hidden" name="cod_estudiante" value = "{{$alumno->cod_estudiante}}">
        {{$alumno->cod_estudiante}}
        </label>
        </br>
        <label for="">
            DNI:<br/>
            <input type="text" name="dni" placeholder= "{{$alumno->dni}}"> 
        </label>
        <br/>
        <br/>
        <label for="">
            Nombres:<br/>
            <input type="text" name="name" placeholder = "{{$alumno->nombres}}">
        </label>
        <br/>
        <label for="">
            Apellidos:<br/>
            <input type="text" name="apellidos" placeholder = "{{$alumno->apellidos}}" >
        </label>
       
        <button type="submit">Enviar formulario</button>
    </form>
    <a href="{{route('alumnos.index')}}" >REGRESAR A LA LISTA</a></br>
    <a href="{{route('alumnos.viewdelete',$alumno->cod_estudiante)}}">ELIMINAR REGISTRO</a>
@endsection