<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static find(int $int)
 */
class AboutReliable extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function reliable_item(): HasMany
    {
        return $this->hasMany(AboutReliableItem::class, 'reliable_id');
    }
}
