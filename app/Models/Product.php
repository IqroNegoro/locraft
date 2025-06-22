<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function images() : HasMany {
        return $this->hasMany(ProductImage::class);
    }

    public function likes() : HasMany {
        return $this->hasMany(Like::class);
    }

    public function image() : Attribute {
        return Attribute::make(
            get: fn($value) => $value ? asset('storage/images/products/' . $value) : ''
        );
    }
    
    public function createdAt() : Attribute {
        return Attribute::make(
            get: fn($value) => $value ? \Carbon\Carbon::parse($value)->diffForHumans() : ''
        );
    }
}
