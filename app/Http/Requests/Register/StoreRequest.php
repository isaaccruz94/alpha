<?php

namespace App\Http\Requests\Register;

use Illuminate\Foundation\Http\FormRequest;
use PhpParser\Node\Expr\Cast\Array_;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function authorize():Bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules():Array
    {
        return [
            'name'     => 'required|string|unique:users|max:30',
            'email'    => 'required|string|email|unique:users',
            'password' => 'required|confirmed|min:5'
        ];
    }

    public function messages():Array
    {
        return [
            'name.required'      => 'El nombre de usuario es requerido',
            'name.unique'        => 'El nombre de usuario ya está en uso',
            'name.max'           => 'El nombre de usuario no debe tener más de 30 caracteres',
            'email.required'     => 'El correo electrónico es requerido',
            'email.email'        => 'Ingrese un correo electrónico válido',
            'email.unique'       => 'El correo electrónico ya está en uso',
            'password.confirmed' => 'Las contraseñas no coinciden',
            'password.required'  => 'La contraseña es requerida',
            'password.min'       => 'la contraseña debe tener al menos 5 caracteres'
        ];
    }
}
