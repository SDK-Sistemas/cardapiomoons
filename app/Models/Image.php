<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function banner()
    {
        return $this->hasOne(Banner::class, 'foreign_key', 'local_key');
    }

    public function pratos()
    {
        return $this->belongsToMany(Prato::class);
    }
}
