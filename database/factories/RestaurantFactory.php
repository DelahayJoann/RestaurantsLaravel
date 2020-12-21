<?php

namespace Database\Factories;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RestaurantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Restaurant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->id,
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'zipCode' => $this->faker->zipCode,
            'town' => $this->faker->town,
            'country' => $this->faker->country,
            'description' => $this->faker->description,
            'review' => $this->faker->review,
        ];
    }
}