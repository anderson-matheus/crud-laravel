<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'name' => 'required|min:3|max:255',
            'lastname' => 'required|min:3|max:255',
            'username' => 'required|min:3|max:255|unique:users,username,' . $this->user_id,
            'email' => 'required|email|max:255|unique:users,email,' . $this->user_id,
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'Digite o id do usuário',
            'user_id.exists' => 'O usuário não existe',
            'name.required' => 'Digite um nome',
            'name.min' => 'Digite um nome com no mínimo 3 caracteres',
            'name.max' => 'Digite um nome com no máximo 255 caracteres',
            'lastname.required' => 'Digite um sobrenome',
            'lastname.min' => 'Digite um sobrenome com no mínimo 3 caracteres',
            'lastname.max' => 'Digite um sobrenome com no máximo 255 caracteres',
            'username.required' => 'Digite um username',
            'username.min' => 'Digite um username com no mínimo 3 caracteres',
            'username.max' => 'Digite um username com no máximo 255 caracteres',
            'username.unique' => 'Já existe um username assim, escolha outro',
            'email.required' => 'Digite um e-mail',
            'email.email' => 'Digite um e-mail válido',
            'email.max' => 'Digite um e-mail com no máximo 255 caracteres',
            'email.unique' => 'Já existe um e-mail assim, escolha outro',
        ];
    }
}
