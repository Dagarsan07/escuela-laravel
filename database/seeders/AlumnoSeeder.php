<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alumno = new Alumno();
        $alumno->nombre_ape = 'ReneZZ';
        $alumno->edad = 24;
        $alumno->telefono = "623817283";
        $alumno->direccion = "Autonomia, 21";
        $alumno->save();

        $alumno = new Alumno();
        $alumno->nombre_ape = 'Hwei "El Wey';
        $alumno->edad = 21;
        $alumno->telefono = "333333333";
        $alumno->direccion = "Jonia, 3";
        $alumno->save();

        $alumno = new Alumno();
        $alumno->nombre_ape = 'Jhin "El Maestro"';
        $alumno->edad = 27;
        $alumno->telefono = "444444444";
        $alumno->direccion = "Jonia, 4";
        $alumno->save();
    }
}
