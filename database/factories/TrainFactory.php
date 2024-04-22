<?php

namespace Database\Factories;

use App\Models\Train;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{

    protected $model = Train::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company . ' Train',
            'route_id' => $this->faker->numberBetween(1, 30),
        ];
    }
}
