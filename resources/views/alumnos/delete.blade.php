@extends('layouts.plantilla')
@section('title','Eliminar Alumno')
@section('content')
    <h1> En esta página podras eliminar un Alumno</h1>
    
        <label for="">
            Cod. Estudiante:{{$alumno->cod_estudiante}}<br/>
            
        </label>
        <br/>
        <label for="">
            DNI:{{$alumno->dni}}<br/>
            
        </label>
        <br/>
        <br/>
        <label for="">
            Nombres:{{$alumno->nombres}}<br/>
            
        </label>
        <br/>
        <label for="">
            Apellidos:{{$alumno->apellidos}}<br/> 
        </label>
        <br/>
    <form action="{{route('alumnos.destroy',$alumno->cod_estudiante)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection