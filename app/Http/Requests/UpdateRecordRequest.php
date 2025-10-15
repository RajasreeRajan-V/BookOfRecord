<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRecordRequest extends FormRequest
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
        'name' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'record_no' => 'nullable|string|unique:records,record_no',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'category_id' => 'nullable|exists:categories,id',
        'details' => 'nullable|string',
        'years' => 'nullable|regex:/^\d{4}$/', 
        'holder_name' => 'required|string|max:255',
        'providers' => 'nullable|string|max:255',
        ];
    }
}
