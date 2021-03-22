<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = [
        'street', 'construction_date', 'mq', 'rooms', 'price'
    ];
}
