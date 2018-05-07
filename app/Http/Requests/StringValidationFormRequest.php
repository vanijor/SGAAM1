<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StringValidationFormRequest extends FormRequest
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
            'cargo'      => 'required|alpha',
            'nome'       => 'required|alpha',
            'rg'         => 'required|numeric|min:9|max:9',
            'cpf'        => 'required|numeric|min:11|max:11',
            'cep'        => 'required|numeric|min:8|max:8',
            'rua'        => 'required|alpha',
            'numero'     => 'required|numeric',
            'bairro'     => 'required|alpha',
            'cidade'     => 'required|alpha',
            'estado'     => 'required|alpha|min:2|max:2',
            'nascimento' => 'required|date',
            'telefone'   => 'required|numeric',
            'email'      => 'required|email',
            'cargo'      => 'required',
            'user'       => 'required',
            'admissao'   => 'required|date',
            'demissao'   => 'required|date',
        ];
    }
}
