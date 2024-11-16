<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('room.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
