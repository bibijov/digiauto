<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateKorisnikRequest extends FormRequest
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
        $method=$this->method();
        if($method=='PUT'){
        return [
            'ime'=>['required'],
            'uloga'=>['required', Rule::in(['globaladmin','admin','instruktor','student','profesor'])],
            'email'=>['required','email'],
            // 'profilnaURL'=>['required'],


        ];}
        else{
            return [
                'ime'=>['sometimes','required'],
                'uloga'=>['sometimes','required', Rule::in(['globaladmin','admin','instruktor','student','profesor'])],
                'email'=>['sometimes','required','email'],
                // 'profilnaURL'=>['required'],
    
    
            ];
        }
    }
}
