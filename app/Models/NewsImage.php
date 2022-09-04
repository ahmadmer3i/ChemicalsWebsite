<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static find($id)
 */
class NewsImage extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function main_news(): BelongsTo
    {
        return $this->belongsTo(News::class, 'news_id');
    }
}
