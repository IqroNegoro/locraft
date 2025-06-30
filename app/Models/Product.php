<?php

namespace App\Models;

use App\Observers\ProductObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Auth;

#[ObservedBy([ProductObserver::class])]
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

    public function category() : BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function tags() : BelongsToMany {
        return $this->belongsToMany(Tag::class, TagProduct::class);
    }

    public function images() : HasMany {
        return $this->hasMany(ProductImage::class);
    }

    public function likes() : HasMany {
        return $this->hasMany(Like::class);
    }

    public function liked() : HasOne {
        return $this->hasOne(Like::class)->where('user_id', Auth::id());
    }

    public function reviews() : HasMany {
        return $this->hasMany(Review::class);
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
