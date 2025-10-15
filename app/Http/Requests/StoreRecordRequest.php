<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecordRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'record_no' => 'required|string|unique:records,record_no',
            'category_id' => 'required|exists:categories,id',
            'details' => 'nullable|string',
            'years' => 'required|regex:/^\d{4}$/', // Only 4 digits allowed, e.g., 2024
            // dd($this->years),

            'providers' => 'nullable|string|max:255',
        ];

    }
}
