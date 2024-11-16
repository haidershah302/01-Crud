<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'google_id',
        'facebook_id',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array<int, string>
     */
    protected array $dates = ['dob'];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    public function exchange_history(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ExchangeHistory::class);
    }

    public function room(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Room::class);
    }

    public function frames(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return  $this->belongsToMany(Frame::class)->withPivot(
            'status', 'activated_at'
        );
    }

    public function gifts(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Gift::class);
    }
}
