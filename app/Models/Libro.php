<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'libro';

    // Nombre de la clave primaria
    protected $primaryKey = 'Cod_Libro';

    // Clave primaria autoincremental
    public $incrementing = true;

    // Tipo de la clave primaria
    protected $keyType = 'int';

    // Desactivar timestamps automáticos
    public $timestamps = false;

    // Campos que se pueden asignar en masa
    protected $fillable = [
        'Titulo',
        'Autor',
        'Editorial',
        'Edicion',
        'Idioma',
        'Estado',
        'Descripcion',
        'CantPaginas',
        'CopiasDisp',
    ];

    // Relación con la entidad Autor
    public function autor()
    {
        return $this->belongsTo(Autor::class, 'Cod_Autor', 'Cod_Autor');
    }

    // Relación con la entidad Editorial
    public function editorial()
    {
        return $this->belongsTo(Editorial::class, 'Cod_Editorial', 'Cod_Editorial');
    }

    // Relación con la entidad Categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'Cod_Categoria', 'Cod_Categoria');
    }
}
