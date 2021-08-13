<?php

namespace App;

use Illuminate\Foundation\Auth\Booking as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Booking extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'location', 'date', 'duration',
    ];
}