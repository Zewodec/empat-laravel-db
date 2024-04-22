<?php

namespace Database\Factories;

use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{

    protected $model = Schedule::class;

    public function definition()
    {
        return [
            'train_id' => $this->faker->numberBetween(1, 30),
            'station_id' => $this->faker->numberBetween(1, 30),
            'time_arrive' => $this->faker->dateTimeBetween('now', '+1 week'),
            'time_departure' => $this->faker->dateTimeBetween('now', '+1 day'),
        ];
    }
}
