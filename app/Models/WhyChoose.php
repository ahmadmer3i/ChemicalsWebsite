<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static find(int $int)
 */
class WhyChoose extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function why_choose_list(): HasMany
    {
        return $this->hasMany(WhyChooseList::class, 'why_id');
    }
}
