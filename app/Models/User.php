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
    protected $fillable = [
        'google_id',
        'facebook_id',
        'name',
        'phone',
        'signature',
        'gender',
        'country',
        'dob',
        'role',
        'avatar',
        'coins',
        'diamonds',
        'email',
        'password',
    ];

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


    protected array $dates = ['dob'];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->coins = 0;
            $model->diamonds = 10000;
        });
    }

    public function exchange_history(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ExchangeHistory::class);
    }

    public function room()
    {
        return $this->hasOne(Room::class);
    }

    public function themes()
    {
        return $this->hasMany(Theme::class);
    }

    public function frame()
    {
        return $this->hasOne(Frame::class);
    }
}
