<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index()
    {
        $routes = Route::all();
        return view('routes.index', compact('routes'));
    }

    public function show($id)
    {
        $route = Route::findOrFail($id);
        return view('routes.show', compact('route'));
    }
}
