<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
   protected $fillable = [  
        'name',
        'description',
        'image',
        'record_no',
        'category_id',
        'details',
        'years',
        'providers',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
