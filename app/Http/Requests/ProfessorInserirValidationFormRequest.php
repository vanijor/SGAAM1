<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfessorInserirValidationFormRequest extends FormRequest
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
            'nome'       => 'required|string',
            'rg'         => 'required|numeric',
            'cpf'        => 'required|unique:professors,cpf|numeric|cpf',
            'cep'        => 'required|numeric',
            'rua'        => 'required|string',
            'numero'     => 'required|numeric',
            'bairro'     => 'required|string',
            'cidade'     => 'required|string',
            'estado'     => 'required|alpha',
            'nascimento' => 'required|date',
            'telefone'   => 'required|numeric',
            'email'      => 'required|email',
            'modalidade' => 'required|numeric'
        ];
    }
}
