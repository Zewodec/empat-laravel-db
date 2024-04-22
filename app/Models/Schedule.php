<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = ['train_id', 'station_id', 'time_arrive', 'time_departure'];

    public function train()
    {
        return $this->belongsTo('App\Train');
    }

    public function station()
    {
        return $this->belongsTo('App\Station');
    }
}
