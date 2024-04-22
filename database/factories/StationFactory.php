<?php

namespace Database\Factories;

use App\Models\Station;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Station>
 */
class StationFactory extends Factory
{

    protected $model = Station::class;

    public function definition()
    {
        return [
            'name' => $this->faker->city,
            'geo_location' => $this->faker->latitude . ',' . $this->faker->longitude,
        ];
    }
}
