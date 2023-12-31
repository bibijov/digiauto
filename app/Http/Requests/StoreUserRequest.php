<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'ime'=>['required'],
            'uloga'=>['required', Rule::in(['globaladmin','admin','instruktor','student','profesor'])],
            'email'=>['required','email'],
            'password'=>['required'],
            // 'profilnaURL'=>['required'],
        ];
    }
}
