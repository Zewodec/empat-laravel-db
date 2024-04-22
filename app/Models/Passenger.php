<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'contact_info'];

    public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }
}
