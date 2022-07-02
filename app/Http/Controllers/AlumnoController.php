<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function index(){
        $alumnos = Alumno::all();

        return view('alumnos.index',compact('alumnos'));

    }

    public function create(){

        return view('alumnos.create');

    }

    public function store(Request $request)
    {
        $alumno = new Alumno();
        $alumno->cod_estudiante = $request->codigo;
        $alumno->dni = $request->dni;
        $alumno->nombres =  $request->name;
        $alumno->apellidos = $request->apellidos;
        $alumno->save();

        return redirect()->route('alumnos.index');
    }
    public function view($cod_estudiante){
            $codigo = Alumno::find($cod_estudiante);
            return view('alumnos.edit',['alumno'=>$codigo]);
    }
    public function viewdelete($cod_estudiante){
        $codigo = Alumno::find($cod_estudiante);
        return view('alumnos.delete',['alumno'=>$codigo]);
}
    public function edit(Request $request)
    {
        $alumno = Alumno::find($request->cod_estudiante);
        $alumno->dni = $request->dni;
        $alumno->nombres =  $request->name;
        $alumno->apellidos = $request->apellidos;
        $alumno->save();
        
        return redirect()->route('alumnos.index');
    }

    public function destroy($cod_estudiante){
        $alumno = Alumno::find($cod_estudiante);
        $alumno->delete();
        return redirect()->route('alumnos.index');
    }
}
