<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HolaController;
use App\Http\Controllers\AlumnoController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hola',[HolaController::class, 'index'] )->name('hola');

Route::get('/alumno', [AlumnoController::class, 'index'])->name('alumnos.index');

Route::get('/alumno/create', [AlumnoController::class, 'create'])->name('alumnos.create');

Route::post('/alumno/store', [AlumnoController::class, 'store'])->name('alumnos.store');

Route::post('/alumno/edit', [AlumnoController::class, 'edit'])->name('alumnos.edit');

Route::delete('/alumno/destroy/{cod_estudiante}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');


Route::get('/alumno/view/{cod_estudiante}', [AlumnoController::class, 'view'])->name('alumnos.view');

Route::get('/alumno/viewdelete/{cod_estudiante}', [AlumnoController::class, 'viewdelete'])->name('alumnos.viewdelete');
