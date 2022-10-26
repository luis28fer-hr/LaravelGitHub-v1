<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadPelicula_form extends FormRequest
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
            'txtnombre' => 'required|max:30',
            'txtfecha' => 'required|date',
            'txtproductor' => 'required|max:150',
            'txtdescripcion' => 'required|max:600'
        ];
    }
}
