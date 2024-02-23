@extends('layout/template')

@section('tittle', 'CRUD Alumnos en laravel')

    
@section('contenido')
<main>
    <div class='container py-4'>
      <h2>CRUD Alumnos en Laravel</h2>
      <hr>
      <a href="{{ url('alumnos/create')}}" class="btn btn-primary btn-sm role=button">Nuevo Alumo</a>
    </div>
</main>