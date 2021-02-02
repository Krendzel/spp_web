<?php

namespace Database\Factories;

use App\Models\LoginCreator;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoginCreatorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LoginCreator::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        $firstname = $this->faker->firstName;
        $lastname = $this->faker->lastName;

        return [
            'first_name' => $firstname,
            'last_name' => $lastname,
            'login' => strtoupper('R'.substr($firstname, 0,1).substr($lastname, 0, 8)),
            'password' => strtoupper(substr($this->faker->md5,0,10)),
            'type' => $this->faker->numberBetween(1,2)
        ];
    }
}
