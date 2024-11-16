<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Psy\Output\Theme;

class Room extends Model
{
    protected $guarded = [];

    public static function boot(): void
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uid = (string) Str::uuid();
        });
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function theme(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Theme::class)->withPivot('status');
    }

}
