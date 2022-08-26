<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static find($id)
 */
class GeneralInfoCard extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function general_info(): BelongsTo
    {
        return $this->belongsTo(GeneralInfo::class);
    }
}
