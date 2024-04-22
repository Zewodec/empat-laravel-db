<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    public function index()
    {
        $passengers = Passenger::all();
        return view('passengers.index', compact('passengers'));
    }

    public function show($id)
    {
        $passenger = Passenger::findOrFail($id);
        return view('passengers.show', compact('passenger'));
    }
}
