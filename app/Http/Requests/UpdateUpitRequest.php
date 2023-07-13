<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUpitRequest extends FormRequest
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
            'korisnik_id'=>['required'],
            'autoskola_id'=>['required'],
            'vreme'=>['required'],
            'datum'=>['required'],
            'stanje'=>['required'],


        ];}
        else{
            return [
                'korisnik_id'=>['sometimes','required'],
                'autoskola_id'=>['sometimes','required'],
                'vreme'=>['sometimes','required'],
                'datum'=>['sometimes','required'],
                'stanje'=>['sometimes','required'],
    
    
            ];
        }
    }
}
