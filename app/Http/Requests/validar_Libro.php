<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validar_Libro extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'ISNB' => 'required|min:13',
            'txtTitulo' => 'required',
            'txtAutor' => 'required',
            'NumPaginas' => 'required',
            'txtEditorial' => 'required',
            'txtEmail' => 'required'
        ];
    }
}
