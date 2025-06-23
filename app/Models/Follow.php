<?php

namespace App\Models;

use App\Observers\FollowObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[ObservedBy(FollowObserver::class)]
class Follow extends Model
{
    /** @use HasFactory<\Database\Factories\FollowFactory> */
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function followed() : BelongsTo {
        return $this->belongsTo(User::class, 'followed_user_id');
    }
}
