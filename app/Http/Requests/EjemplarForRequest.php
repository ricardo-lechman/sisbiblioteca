<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EjemplarForRequest extends FormRequest
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
            'Id_Ejemplar' => 'required|string|max:10', 
            'Numero_Ejemplar' => 'required|string|max:20',
            'Estado_Ejemplar' => 'required|string|max:50',
        ];
    }
}
