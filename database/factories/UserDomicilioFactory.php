<?php

namespace Database\Factories;

use App\Models\UserDomicilio;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserDomicilioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserDomicilio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->unique()->numberBetween(1, 100),
            'domicilio' => $this->faker->address(),
            'numero_exterior' => $this->faker->randomNumber(),
            'colonia' => $this->faker->name(),
            'cp' => $this->faker->randomNumber(),
            'ciudad' => $this->faker->city(),
        ];
    }
}
