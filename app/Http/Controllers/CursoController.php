<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Profesor;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function listado() {
        $cursos = Curso::all();
        return view('cursos.listado', compact('cursos'));
    }

    public function detalle($id) {
        $curso = Curso::find($id);
        return view('cursos.detalle', compact('curso'));
    }
}
