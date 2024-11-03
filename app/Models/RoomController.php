<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Inertia\Inertia;

class RoomController extends Model
{
    public function myRoomView()
    {
        return Inertia::render('Room/myRoom');
    }
}
