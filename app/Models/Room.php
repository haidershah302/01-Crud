<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\This;
use Psy\Output\Theme;

class Room extends Model
{
    protected $table = 'rooms';
    protected $fillable = ['uid','user_id', 'theme_id', 'room_name', 'gift_interactions', 'allowed_seats'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function theme()
    {
        return $this->hasOne(Theme::class);
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uid = (string) Str::uuid();
        });
    }
}
