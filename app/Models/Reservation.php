<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = ['train_id', 'passenger_id', 'seat_number', 'reservation_status'];

    public function passenger()
    {
        return $this->hasMany('App\Passenger');
    }

    public function train()
    {
        return $this->belongsToMany('App\Train');
    }

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }
}
