<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class BookUpdateRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'pages' => ['required', 'integer'],
            'year' => ['required', 'integer'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "EHI! Il nome è obblgatorio!",
            'year.integer' => 'Devi inserire un anno valido! Possibilemnte intero!'
        ];
    }
}
