<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    /** @use HasFactory<\Database\Factories\ReviewFactory> */
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function createdAt() : Attribute {
        return Attribute::make(
            get: fn($value) => $value ? \Carbon\Carbon::parse($value)->diffForHumans() : ''
        );
    }
}
