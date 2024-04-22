<?php

namespace Database\Factories;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{

    protected $model = Ticket::class;

    public function definition()
    {
        return [
            'reservation_id' => $this->faker->numberBetween(1, 30),
            'price' => $this->faker->randomFloat(2, 20, 2000),
            'seat_class' => $this->faker->randomElement(['economy', 'business', 'first']),
        ];
    }
}
