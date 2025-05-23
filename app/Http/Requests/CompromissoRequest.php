<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompromissoRequest extends FormRequest
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
            "titulo"=> "required | min:3",
            "quando"=> "required",
        ];
    }

    public function messages(): array
    {
        return [
            "titulo.required"=> "Num pode criar compromisso sem titulo",
            "quando.required"=> "quando que vai se isso?",
        ];
    }
}
