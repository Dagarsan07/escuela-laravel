@extends('layouts.plantilla')

@section('title', $curso->nombre)

@section('content')
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<div class="container mx-auto mt-6">
    <h1>Curso: {{$curso->nombre}}</h1>
    <p>Nivel: {{$curso->nivel}}</p>
    <p>Duración: {{$curso->horasAcademicas}}</p>
    <p>Profesor: {{$curso->profesor->nombreApellido}}</p>
    <br>
    <a href="{{route('cursos.listado')}}" class="font-bold">Volver al listado</a>
</div>
@endsection