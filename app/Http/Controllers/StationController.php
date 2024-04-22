<?php

namespace App\Http\Controllers;

use App\Models\Station;
use Illuminate\Http\Request;

class StationController extends Controller
{
    public function index()
    {
        $stations = Station::all();
        return view('stations.index', compact('stations'));
    }

    public function show($id)
    {
        $station = Station::findOrFail($id);
        return view('stations.show', compact('station'));
    }
}
