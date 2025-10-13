<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    /** @use HasFactory<\Database\Factories\AboutUsFactory> */
    use HasFactory;
    protected $fillable = [ 
        'title',
        'desc',
        'img1',
        'img2',
        'tag1',
        'tag2',
        'tag3',
        'tag4',
    ];
}
