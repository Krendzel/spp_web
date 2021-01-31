<?php

namespace Database\Factories;

use App\Models\GroupEcom;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupEcomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GroupEcom::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_pallet' => $this->faker->numberBetween(1000000, 2000000),
            'type' => $this->faker->numberBetween(1,3),
            'finished_at' => $this->faker->dateTimeThisMonth,
            'status' => $this->faker->numberBetween(1,4)
        ];
    }
}
