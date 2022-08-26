<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static find($id)
 */
class AfricanCountry extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function global_precence(): BelongsTo
    {
        return $this->belongsTo(GlobalPrecence::class);
    }
}
