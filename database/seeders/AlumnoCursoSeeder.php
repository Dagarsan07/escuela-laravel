<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoCursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curso1 = Curso::find(1);
        $curso2 = Curso::find(2);
        $curso3 = Curso::find(3);

        $alumno1 = Alumno::find(1);
        $alumno2 = Alumno::find(2);
        $alumno3 = Alumno::find(3);

        $curso1->alumnos()->attach([$alumno1->id, $alumno2->id]);
        $curso2->alumnos()->attach([$alumno1->id, $alumno3->id]);
        $curso3->alumnos()->attach([$alumno1->id, $alumno2->id]);
    }
}
