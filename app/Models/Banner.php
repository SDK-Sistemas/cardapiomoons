<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property mixed translations
 * @method static create()
 */
class Banner extends Model
{
    use HasFactory;

    protected object $currTrans;
    protected $guarded = [];
    protected $appends = ['title', 'tagline', 'text'];

    protected $with = ['image', 'translations'];

    /**
     * Perform any actions required after the model boots.
     *
     * @return void
     */
    protected static function boot(): void
    {
        Parent::boot();
        static::retrieved(function ($banner) {
            $banner->currTrans = $banner->getCurrTrans();
        });
    }

    /**
     * @return BelongsTo
     */
    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }

    /**
     * @return MorphMany
     */
    public function translations(): MorphMany
    {
        return $this->morphMany(Translation::class, 'translationable');
    }

    /**
     * @return string
     * @noinspection PhpMethodNamingConventionInspection
     */
    public function getTitleAttribute(): string
    {
        return $this->currTrans->title ?? '';
    }

    /**
     * @return string
     * @noinspection PhpMethodNamingConventionInspection
     */
    public function getTaglineAttribute(): string
    {
        return $this->currTrans->tagline ?? '';
    }

    /**
     * @return string
     * @noinspection PhpMethodNamingConventionInspection
     */
    public function getTextAttribute(): string
    {
        return $this->currTrans->text ?? '';
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
