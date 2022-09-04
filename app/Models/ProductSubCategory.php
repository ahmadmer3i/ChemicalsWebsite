<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static find($id)
 */
class ProductSubCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function product_category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    public function product_subcategory_list(): HasMany
    {
        return $this->hasMany(ProductSubCategoryList::class, 'subcategory_id');
    }
}
