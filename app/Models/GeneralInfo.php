<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static find(int $int)
 */
class GeneralInfo extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function general_info_card(): HasMany
    {
        return $this->hasMany(GeneralInfoCard::class, 'info_id');
    }
}
