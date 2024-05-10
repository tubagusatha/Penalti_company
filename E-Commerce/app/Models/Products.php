<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name_products',
        'description_products',
        'starting_price',
        'prices_products',
        'qty',
        'slug',
        'category_id',
        'show_products',
    ];

    
    public function gallery(): HasMany
{
    return $this->hasMany(ProductsGallery::class, 'product_id', 'id');
}

/**
 * Get th carts associated with the Products
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasOne
 */
public function carts(): HasOne
{
    return $this->hasOne(Carts::class, 'product_id', 'id');
}

/**
 * Get the user associated with the Products
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasOne
 */
public function category(): BelongsTo
{
    return $this->belongsTo(Category::class, 'category_id', 'id');
}




/**
 * Get the user that owns the Products
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function transaction_item(): BelongsTo
{
    return $this->belongsTo(TransactionItems::class, 'id', 'product_id');
}

public function scopeSiwa ($query) {
    return $query;
}

public function scopeSelectById($query, $id){
    return $query->where('id', $id);
}
}
