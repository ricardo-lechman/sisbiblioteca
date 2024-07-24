<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrestamoForRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'Cod_Prestamo' => 'required|string|max:10', 
            'Dni_Alumno' => 'required|string|max:20',
            'Cod_Libro' => 'required|string|max:10',
            'Fecha_Prestamo' => 'required|date',
            'Fecha_Devolucion' => 'nullable|date|after_or_equal:Fecha_Prestamo', // La fecha de devolución debe ser posterior o igual a la fecha de préstamo
        ];
    }
}
