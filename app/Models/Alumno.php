<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $table = "alumnos";
    protected $primarykey = "id";
    protected $fillable = ['nombre_ape', 'edad', 'telefono', 'direccion'];
    protected $hidden = ['id'];

    public function cursos() {
        return $this->belongsToMany(Curso::class);
    }
}
