<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $fillable = [
        'category_id',
        'product_name',
        'product_details',
        'price',
        'quantity_in_stock',
        'needs_licence',
        'manufacturer',
        'caliber',
        'image',
    ];

    protected $casts = [
        'quantity_in_stock' => 'integer',
        'needs_licence' => 'boolean',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName(): string
    {
        return 'identifier';
    }
}
