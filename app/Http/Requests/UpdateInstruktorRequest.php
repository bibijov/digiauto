<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInstruktorRequest extends FormRequest
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
            'auto'=>['required'],
            'brojtelefona'=>['required'],


        ];}
        else{
            return [
                'ime'=>['sometimes','required'],
                'auto'=>['sometimes','required'],
                'brojtelefona'=>['sometimes','required'],
            ];
        }
    }
}
