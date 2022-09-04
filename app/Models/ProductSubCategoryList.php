<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static find(mixed $id)
 */
class ProductSubCategoryList extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function product_subcategory(): BelongsTo
    {
        return $this->belongsTo(ProductSubCategory::class);
    }
}
