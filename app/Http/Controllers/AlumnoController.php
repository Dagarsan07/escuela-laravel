<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function listado() {
        $alumnos = Alumno::orderby('nombre_ape', 'asc')->paginate(10);
        return view('alumnos.listado', compact('alumnos'));
    }

    public function detalle($id) {
        $alumno = Alumno::find($id);
        return view('alumnos.detalle', compact('alumno'));
    }

    public function crear() {
        return view('alumnos.crear');
    }

    public function guardar(Request $request, Alumno $alumno) {
        $alumno = new Alumno();

        $alumno->nombre_ape = $request->nombre_ape;
        $alumno->edad = $request->edad;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;

        $alumno->save();

        return redirect()->route('alumnos.detalle', $alumno->id);
    }

    public function editar(Alumno $alumno) {
        return view('alumnos.editar', compact('alumno'));
    }

    public function actualizar(Request $request, Alumno $alumno) {
        $alumno->nombre_ape = $request->nombre_ape;
        $alumno->edad = $request->edad;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;

        $alumno->save();

        return redirect()->route('alumnos.detalle', $alumno->id);
    }

    public function confirmar(Alumno $alumno) {
        return view('alumnos.confirmar', compact('alumno'));
    }

    public function borrar(Alumno $alumno) {
        $alumno->delete();

        return redirect()->route('alumnos.listado');
    }
}
