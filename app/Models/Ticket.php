<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = ['reservation_id', 'price', 'seat_class'];

    public function reservation()
    {
        return $this->belongsTo('App\Reservation');
    }
}
