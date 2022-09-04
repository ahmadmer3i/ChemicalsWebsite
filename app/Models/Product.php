<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static find(int $int)
 */
class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function product_category(): HasMany
    {
        return $this->hasMany(ProductCategory::class, 'product_id');
    }
}
