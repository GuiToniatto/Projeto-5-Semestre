<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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

    public function messages()
    {
        return [
            '*.required' => 'Campo Obrigatório',
            'passconfirmation.same' => 'Senhas deve ser iguais'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required',
            'name' => 'required',
            'lastname' => 'required',
            'password' => 'required',
            'passconfirmation' => 'required|same:password',
            'agreement' => 'required'
        ];
    }
}
