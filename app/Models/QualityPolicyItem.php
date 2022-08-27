<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static find($id)
 */
class QualityPolicyItem extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function quality_policy(): BelongsTo
    {
        return $this->belongsTo(QualityPolicy::class);
    }
}
