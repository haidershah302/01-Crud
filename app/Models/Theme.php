<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'price',
        'background',
        'thumbnail',
        'color',
        'text_color',
        'icons_color'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room()
    {
        $this->belongsTo(Room::class);
    }
}
