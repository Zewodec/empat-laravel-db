<?php

namespace Database\Seeders;

use App\Models\Passenger;
use App\Models\Reservation;
use App\Models\Route;
use App\Models\Schedule;
use App\Models\Station;
use App\Models\Ticket;
use App\Models\Train;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Route::factory()->count(30)->create();
        Train::factory()->count(30)->create();
        Station::factory()->count(30)->create();
        Passenger::factory()->count(30)->create();

        Reservation::factory()->count(30)->create();
        Ticket::factory()->count(30)->create();
        Schedule::factory()->count(30)->create();
    }
}
