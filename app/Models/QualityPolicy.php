<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static find(int $int)
 */
class QualityPolicy extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function quality_item(): HasMany
    {
        return $this->hasMany(QualityPolicyItem::class, 'quality_id');
    }
}
