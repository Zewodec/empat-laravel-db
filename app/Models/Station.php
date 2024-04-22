<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'geo_location'];

    public function schedules()
    {
        return $this->hasMany('App\Schedule');
    }
}
