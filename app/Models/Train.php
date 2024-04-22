<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'route_id'];

    public function route()
    {
        return $this->belongsTo('App\Route');
    }

    public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }

    public function schedule()
    {
        return $this->hasMany('App\Schedule');
    }
}
