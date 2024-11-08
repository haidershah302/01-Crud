<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomTheme extends Model
{
    protected $table = 'room_themes';
    protected $fillable = ['room_id', 'background', 'thumbnail', 'color', 'textColor'];

    public function room() {
        return $this->belongsTo(Room::class);
    }
}
