<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'estado';

    // Nombre de la clave primaria
    protected $primaryKey = 'Id_Estado';

    // Clave primaria autoincremental
    public $incrementing = true;

    // Tipo de la clave primaria
    protected $keyType = 'int';

    // Desactivar timestamps automáticos
    public $timestamps = false;

    // Campos que se pueden asignar en masa
    protected $fillable = [
        'Disponibilidad',
    ];

    // Relación con la entidad Libro
    public function libros()
    {
        return $this->hasMany(Libro::class, 'Estado', 'Id_Estado');
    }

    // Relación con la entidad Ejemplar
    public function ejemplares()
    {
        return $this->hasMany(Ejemplar::class, 'Estado_Ejemplar', 'Id_Estado');
    }
}
