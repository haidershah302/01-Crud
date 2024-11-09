<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Psy\Output\Theme;

class Room extends Model
{
    protected $fillable = [
        'uid','user_id', 'name', 'seat_quantity',
        'image', 'announcement', 'greetings', 'status',
        'seat_apply_mode', 'tourists_on_mic',
        'tourists_send_text', 'tourists_send_files', 'hidden_room'
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uid = (string) Str::uuid();
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function theme(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Theme::class);
    }

}
