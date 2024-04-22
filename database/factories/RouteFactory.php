<?php

namespace Database\Factories;

use App\Models\Route;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Route>
 */
class RouteFactory extends Factory
{

    protected $model = Route::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(2),
        ];
    }
}
