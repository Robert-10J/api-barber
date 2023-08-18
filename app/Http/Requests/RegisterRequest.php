<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password as PasswordRules;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [ 
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone_number' => ['required', 'string'],
            'password' => ['required', 'confirmed', PasswordRules::min(8)->letters()->symbols()->numbers()]
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'El Email es Obligatorio',
            'email.email' => 'El Email no es valido',
            'email.unique' => 'El Email ya ha sido registrado',
            'name' => 'El Nombre de Usuario es Obligatorio',
            'phone_number' => 'El Número de Telefeono es Obligatorio',
            'password' => 'El password debe contener al menos 8 caracteres, un simbolo y un número'
        ];
    }
}
