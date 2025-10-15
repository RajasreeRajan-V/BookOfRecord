<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApplicationFormRequest extends FormRequest
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
            'full_name' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'dob' => 'required|date',
            'gender' => 'required|in:Male,Female,Other',
            'email' => 'required|email|max:255',
            'occupation' => 'nullable|string|max:255',
            'address' => 'required|string|max:2000',
            'description' => 'required|string|max:3000',
            'evidence_files' => 'nullable|array',
            'evidence_files.*' => 'file|mimes:jpg,jpeg,png,pdf,mp4,avi,mov|max:51200', 
            'google_drive_link' => 'nullable|url',
            'terms' => 'required|accepted',
        ];
    }
}
