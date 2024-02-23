<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Carrera;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Habilitar la vista 
        return view('alumnos.index'); // En ruta alumnos, busca vista.index
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Habilitar la vista de alumnos.create 
        // Hzbilitar en el SELECT  los nombres de la carreras 
        return view('alumnos.create', ['carreras' => Carrera::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Aqui se recuperan los datos del formulario 

        // Antes de guardar, laravel tiene reglas de validación para le formulario 
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        //
    }
}
