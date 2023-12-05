@extends('layouts.plantilla')

@section('title', 'Confirmar Borrado')

@section('content')
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <form action="{{route('alumnos.borrar', $alumno)}}" method="post">
        @csrf
    
        @method('delete')
        <h1>¿Estás seguro de que quieres eliminar este alumno? "{{$alumno->nombre_ape}}"</h1>
        <a href="{{route('alumnos.detalle', $alumno)}}"><button name="cancelar" type="button">Cancelar</button></a>
        <button name="confirmar" type="submit">Confirmar</button>
    </form>
@endsection