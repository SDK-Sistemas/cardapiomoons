<?php

namespace App\Models;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Banner extends Model
{
    use HasFactory;

    protected $appends = ['title', 'subtitle', 'description'];

    protected $with = ['translations'];

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function translations()
    {
        return $this->morphMany(Translation::class, 'translationable');
    }

    public function getTitleAttribute()
    {
        return $this->curr_translation()->title;
    }

    public function getSubtitleAttribute()
    {
        return $this->curr_translation()->subtitle;
    }

    public function getDescriptionAttribute()
    {
        return $this->curr_translation()->description;
    }

    private function curr_translation()
    {
        $trans = $this->translations()
            ->where('locale', App::currentLocale())
            ->first();

        $trans = $trans
            ? $trans->translation
            : $this->translations()->first()->translation;

        return $trans;
    }
}
