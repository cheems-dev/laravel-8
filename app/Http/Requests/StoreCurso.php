<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'categoria' => 'required',
        ];
    }

    /**
     * Get person
     */
    public function attributes()
    {
        return [
            'name' => 'nombre del curso'
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'debe ingresar una descripcion del curso',
            'categoria.required' => 'debe ingresar una categoria al curso'
        ];
    }
}
