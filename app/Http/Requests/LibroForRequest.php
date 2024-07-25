<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibroForRequest extends FormRequest
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
            'Cod_Libro' => 'required|string|max:10|', 
            'Titulo' => 'required|string|max:256',
            'Autor' => 'required|string|max:256',
            'Editorial' => 'nullable|string|max:256',
            'Edicion' => 'nullable|string|max:256',
            'Idioma' => 'nullable|string|max:256',
            'Estado' => 'required|string|max:256',
            'Descripcion' => 'nullable|string',
            'CantPaginas' => 'required|integer|min:1',
            'CopiasDisp' => 'required|integer|min:0',
        ];
    }
}
