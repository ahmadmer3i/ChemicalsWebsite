<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static find(int $int)
 */
class GlobalPrecence extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function africa_country(): HasMany
    {
        return $this->hasMany(AfricanCountry::class, 'global_id');
    }

    public function asia_country(): HasMany
    {
        return $this->hasMany(AsiaCountry::class, 'global_id');
    }
}
