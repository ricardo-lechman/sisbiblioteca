<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'prestamo';

    // Nombre de la clave primaria
    protected $primaryKey = 'Cod_Prestamo';

    // Clave primaria autoincremental
    public $incrementing = true;

    // Tipo de la clave primaria
    protected $keyType = 'int';

    // Desactivar timestamps automáticos
    public $timestamps = false;

    // Campos que se pueden asignar en masa
    protected $fillable = [
        'Dni_Alumno',
        'Cod_Libro',
        'Fecha_Prestamo',
        'Fecha_Devolucion',
    ];

    // Relación: un préstamo pertenece a un alumno
    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'Dni_Alumno', 'Dni_Alumno');
    }

    // Relación: un préstamo pertenece a un libro
    public function libro()
    {
        return $this->belongsTo(Libro::class, 'Cod_Libro', 'Cod_Libro');
    }
}

