<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactSaveRequest extends FormRequest
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
            'nome'  => 'required | min:6',
            'email' => 'required | email',
            'tel'   => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required'  => 'O nome é obrigatório',
            'nome.min'       => 'Preencha seu nome completo',
            'email.email'    => "Informe um email válido",
            'email.required' => 'O email é obrigatório',
            'tel.required'   => 'O telefone é obrigatório',
        ];
    }
}
