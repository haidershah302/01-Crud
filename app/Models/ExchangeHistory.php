<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExchangeHistory extends Model
{

    protected $table = 'exchange_history';
    protected $guarded = [];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
