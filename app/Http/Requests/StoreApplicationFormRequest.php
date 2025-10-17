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
        'full_name' => 'required|string|max:255|regex:/^[A-Za-z\s]+$/', // Added string, max:255, and regex
        'mobile' => 'required|digits:10', // Changed to enforce exactly 10 digits
        'dob' => 'required|date', // Added date
        'gender' => 'required|in:Male,Female,Other', // Added string and in check
        'email' => 'required|email|max:255', // Added email and max:255
        'occupation' => 'nullable|string|max:255', // Added max:255
        'address' => 'required|string|max:2000', // Added string and max:2000
        'description' => 'required|string|max:3000', // Added string and max:3000
        'evidence_files' => 'nullable|array',
        'evidence_files.*' => 'file|mimes:jpg,jpeg,png,pdf,mp4,avi,mov|max:51200', // Added mimes and max (50MB)
        'google_drive_link' => 'nullable|url',
        'terms' => 'required|accepted', // Changed to accepted
    ];
    }
     public function messages(): array
    {
        return [
            'full_name.required' => 'Please enter your full name.',
            'full_name.regex' => 'Full name can only contain letters and spaces.',
            'mobile.required' => 'Mobile number is required.',
            'mobile.digits' => 'Mobile number must be exactly 10 digits.',
            'dob.required' => 'Please select your date of birth.',
            'gender.required' => 'Please select your gender.',
            'email.required' => 'Email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'address.required' => 'Please enter your permanent address.',
            'description.required' => 'Please describe your record attempt.',
            'evidence_files.*.mimes' => 'Only JPG, PNG, PDF, MP4, AVI, or MOV files are allowed.',
            'evidence_files.*.max' => 'Each file must be less than 50MB.',
            'terms.accepted' => 'You must agree to the terms and conditions.',
        ];
    }
}
