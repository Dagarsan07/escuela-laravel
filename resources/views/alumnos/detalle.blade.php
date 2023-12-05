@extends('layouts.plantilla')

@section('title', 'Detalle')

@section('content')
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <div class="container mx-auto mt-6">
        <h1>Alumno: {{$alumno->nombre_ape}}</h1>
        <p>Edad: {{$alumno->edad}}</p>
        <p>N.º de Teléfono: {{$alumno->telefono}}</p>
        <p>Dirección: {{$alumno->direccion}}</p>
        <a href="{{route('alumnos.editar', $alumno)}}" class="font-bold">Editar Alumno</a>
        <br>
        <a href="{{route('alumnos.confirmar', $alumno)}}" class="font-bold">Borrar Alumno</a>
        <br>
        <a href="{{route('alumnos.listado')}}" class="font-bold">Volver al listado</a>
    </div>
@endsection