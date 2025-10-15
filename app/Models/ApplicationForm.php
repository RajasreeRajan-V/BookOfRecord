<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationForm extends Model
{
    /** @use HasFactory<\Database\Factories\ApplicationFormFactory> */
    use HasFactory;
    protected $fillable = [
    'full_name', 'mobile', 'dob', 'gender', 'email',
    'occupation', 'address', 'description',
    'evidence_files', 'google_drive_link', 'terms',
    ];
protected $casts = [
    'evidence_files' => 'array',
    'terms' => 'boolean',
    ];
}
