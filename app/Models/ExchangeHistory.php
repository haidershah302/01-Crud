<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExchangeHistory extends Model
{
    protected $fillable = [
        'user_id',
        'amount',
        'coins_before',
        'coins_after',
        'diamonds_before',
        'diamonds_after',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
