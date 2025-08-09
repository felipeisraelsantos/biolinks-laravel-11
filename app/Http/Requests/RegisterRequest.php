<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Undocumented class
 *
 * @property-read string $name
 * @property-read string $email
 * @property-read string $password
 *
 * @author Felipe Israel <felipe.portes@superlogica.com>
 */
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email|confirmed',
            'password' => 'required',
        ];
    }

    public function tryToRegister()
    {
        dd($this);
    }
}
