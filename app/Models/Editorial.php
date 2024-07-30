<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'editorial';

    // Nombre de la clave primaria
    protected $primaryKey = 'Cod_Editorial';

    // Clave primaria autoincremental
    public $incrementing = true;

    // Tipo de la clave primaria
    protected $keyType = 'int';

    // Desactivar timestamps automáticos
    public $timestamps = false;

    // Campos que se pueden asignar en masa
    protected $fillable = [
        'NombreEditorial',
        'Descripcion',
    ];

    // Relación con la entidad Libro
    public function libros()
    {
        return $this->hasMany(Libro::class, 'Cod_Editorial', 'Cod_Editorial');
    }
}

