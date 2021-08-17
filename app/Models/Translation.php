<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    use HasFactory;

    protected $casts = [
        'translation' => 'object'
    ];

    public function translationable()
    {
        return $this->morphTo();
    }
}
