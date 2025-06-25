<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $guarded = [
        'id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $appends = [
        'joined'
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed'
        ];
    }

    public function followers()
    {
        return $this->belongsToMany(
            User::class,
            'follows',
            'followed_user_id',
            'user_id'
        );
    }

    public function following()
    {
        return $this->belongsToMany(
            User::class,
            'follows',
            'user_id',
            'followed_user_id'
        );
    }

    public function avatar(): Attribute
    {
        return Attribute::make(
            get: fn($value) => !str_starts_with($value, 'http') ? asset('storage/images/avatar/' . $value) : $value
        );
    }

    public function getJoinedAttribute()
    {
        return \Carbon\Carbon::parse($this->created_at)->translatedFormat('F Y');
    }

    public function getRouteKeyName(): string
    {
        return 'username';
    }
}
