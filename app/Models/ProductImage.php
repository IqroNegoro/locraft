<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductImage extends Model
{
    /** @use HasFactory<\Database\Factories\ProductImageFactory> */
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function product() : BelongsTo {
        return $this->belongsTo(Product::class);
    }

    public function image() : Attribute {
        return Attribute::make(
            get: fn($value) => $value ? asset('storage/images/products/' . $value) : ''
        );
    }
}
