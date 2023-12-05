@extends('layouts.plantilla')

@section('title', 'Listado')
    
@section('content')
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <div class="container mx-auto mt-6">
        <h1 class="text-3xl text-center">Listado de Alumnos</h1>
        <table class="mx-auto mt-4">
            <thead class="text-left">
                <tr>
                    <th class="w-1/4">Nombre Completo</th>
                    <th class="w-1/4">Edad</th>
                    <th class="w-1/4">Teléfono</th>
                    <th class="w-1/4">Dirección</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                    <tr>
                        <td><a href="{{route('alumnos.detalle', $alumno->id)}}">{{$alumno->nombre_ape}}</a></td>
                        <td>{{$alumno->edad}}</td>
                        <td>{{$alumno->telefono}}</td>
                        <td>{{$alumno->direccion}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $alumnos->links() }}
        <a href="{{route('alumnos.crear')}}" class="font-bold">Crear Alumno</a>
    </div>
@endsection