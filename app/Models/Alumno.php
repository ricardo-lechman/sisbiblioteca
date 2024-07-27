<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Alumno extends Authenticatable
{
    use HasFactory;

    // Tabla asociada a este modelo
    protected $table = 'alumno';

    // Clave primaria de la tabla
    protected $primaryKey = 'Dni_Alumno';

    // Indica si la clave primaria es autoincremental
    public $incrementing = false;

    // Tipo de clave primaria
    protected $keyType = 'int';

    // Indica si el modelo debe gestionar marcas de tiempo (created_at, updated_at)
    public $timestamps = false;

    // Los atributos que se pueden asignar en masa
    protected $fillable = [
        'User', 
        'Password', 
        'Direccion', 
        'Telefono', 
        'Email'
    ];

    // Los atributos que deben ser ocultos para los arreglos
    protected $hidden = [
        'Password',
    ];

    // Método para encriptar la contraseña antes de guardarla en la base de datos
    public function setPasswordAttribute($value)
    {
        $this->attributes['Password'] = bcrypt($value);
    }

    // Puedes agregar relaciones aquí si las necesitas
    // Ejemplo: Un alumno puede tener muchos préstamos
    public function prestamos()
    {
        return $this->hasMany(Prestamo::class, 'Dni_Alumno', 'Dni_Alumno');
    }
}
