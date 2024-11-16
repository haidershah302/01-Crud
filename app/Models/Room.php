<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Room extends Model
{
    protected $guarded = [];

    public static function boot(): void
    {
        parent::boot();
        self::creating(function ($model) {
            $model->ulid = Str::ulid();
        });
    }

    public function themes(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Theme::class)
            ->withPivot('status')
            ->withTimestamps();
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
