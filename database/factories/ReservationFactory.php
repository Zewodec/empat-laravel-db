<?php

namespace Database\Factories;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    protected $model = Reservation::class;

    public function definition()
    {
        return [
            'train_id' => $this->faker->numberBetween(1, 30),
            'passenger_id' => $this->faker->numberBetween(1, 30),
            'seat_number' => $this->faker->numberBetween(1, 30),
            'reservation_status' => $this->faker->randomElement(['confirmed', 'pending']),
        ];
    }
}
