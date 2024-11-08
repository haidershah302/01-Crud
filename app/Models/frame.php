<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class frame extends Model
{
    protected $table = 'frames';

    protected $fillable = [
        'name',
        'price',
        'description',
        'category',
        'status',
        'bdr_box',
        'src',
        'size'
    ];
}
