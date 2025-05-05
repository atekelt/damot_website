<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $casts = [
        'images' => 'array',
        'videos' => 'array',
    ];
    public function user()
        {
            return $this->belongsTo(User::class);
        }
}
