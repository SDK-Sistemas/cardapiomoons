<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Categoria;
use App\Models\Translation;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property mixed translations
 */
class Prato extends Model
{
    use HasFactory;

    protected object $currTrans;

    protected $appends = ['title', 'subtitle', 'description'];

    protected $with = ['translations', 'images'];

    /**
     * Perform any actions required after the model boots.
     *
     * @return void
     */
    protected static function boot(): void
    {
        Parent::boot();
        static::retrieved(function ($prato) {
            $prato->currTrans = $prato->getCurrTrans();
        });
    }

    /**
     * @return BelongsToMany
     */
    public function images(): BelongsToMany
    {
        return $this->belongsToMany(Image::class);
    }

    /**
     * @return BelongsTo
     */
    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    /**
     * @return MorphMany
     */
    public function translations(): MorphMany
    {
        return $this->morphMany(Translation::class, 'translationable');
    }

    /**
     * @param $value
     * @return string
     * @noinspection PhpMethodNamingConventionInspection
     */
    public function getPriceAttribute($value): string
    {
        return number_format($value, 2, ',', '.');
    }

    /**
     * @return string
     * @noinspection PhpMethodNamingConventionInspection
     */
    public function getNameAttribute(): string
    {
        return $this->currTrans->name ?? '';
    }

    /**
     * @return string
     * @noinspection PhpMethodNamingConventionInspection
     */
    public function getDescriptionAttribute(): string
    {
        return $this->currTrans->description ?? '';
    }

    /**
     *  Set the current translation the model will use
     */
    private function getCurrTrans()
    {
        $trans = $this->translations
            ->where('locale', App::currentLocale())
            ->first();

        return $trans->translation ?? $this->translations->first()->translation;
    }
}
