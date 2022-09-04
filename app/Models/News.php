<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static find($id)
 * @method static paginate(int $int)
 * @method static latest()
 */
class News extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function news_images(): HasMany
    {
        return $this->hasMany(NewsImage::class, 'news_id');
    }
}
