@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<div class="container mx-auto mt-6">
    <h1 class="text-3xl text-center">Listado de Cursos</h1>
    <table class="mx-auto mt-4">
        <thead class="text-left">
            <tr>
                <th class="w-1/5">Nombre</th>
                <th class="w-1/5">Nivel</th>
                <th class="w-1/5">Horas Académicas</th>
                <th class="w-1/5">Profesor</th>
                <th class="w-1/5">Alumnos</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
                <tr>
                    <td><a href="{{route('cursos.detalle', $curso->id)}}">{{$curso->nombre}}</a></td>
                    <td>{{$curso->nivel}}</td>
                    <td>{{$curso->horasAcademicas}}</td>
                    <td>{{$curso->profesor->nombreApellido}}</td>
                    <td>LISTADO</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <a href="" class="font-bold">Crear Alumno</a> --}}
</div>
@endsection