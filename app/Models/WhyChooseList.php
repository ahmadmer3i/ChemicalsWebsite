<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static find($id)
 */
class WhyChooseList extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function why_choose(): BelongsTo
    {
        return $this->belongsTo(WhyChoose::class);
    }
}
