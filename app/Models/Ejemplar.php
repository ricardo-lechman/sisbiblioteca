<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejemplar extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'ejemplar';

    // Nombre de la clave primaria
    protected $primaryKey = 'Id_Ejemplar';

    // Clave primaria autoincremental
    public $incrementing = true;

    // Tipo de la clave primaria
    protected $keyType = 'int';

    // Desactivar timestamps automáticos
    public $timestamps = false;

    // Campos que se pueden asignar en masa
    protected $fillable = [
        'Numero_Ejemplar',
        'Estado_Ejemplar',
    ];

    // Relación con la entidad Libro
    public function libro()
    {
        return $this->belongsTo(Libro::class, 'Cod_Libro', 'Cod_Libro');
    }
}

