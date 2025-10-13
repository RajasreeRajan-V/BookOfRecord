<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAboutUsRequest extends FormRequest
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
            'title' => 'required|string',
            'desc' => 'required|string',
            'img1'   => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'img2'   => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'tag1'   => 'required|string',
            'tag2'   => 'required|string',
            'tag3'   => 'required|string',
            'tag4'   => 'required|string',
        ];
    }
}
