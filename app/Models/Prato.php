<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Categoria;
use App\Models\Translation;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prato extends Model
{
    use HasFactory;

    protected $appends = ['title', 'subtitle', 'description'];

    protected $with = ['translations', 'images'];

    public function images()
    {
        return $this->belongsToMany(Image::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }


    public function translations()
    {
        return $this->morphMany(Translation::class, 'translationable');
    }

    public function getPriceAttribute($value)
    {
        return number_format($value, 2, ',', '.');
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
