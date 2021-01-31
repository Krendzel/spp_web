<?php

namespace Database\Factories;

use App\Models\GroupEcomOrders;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupEcomOrdersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GroupEcomOrders::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order' => strtoupper(substr($this->faker->md5, 0,10)),
            'delivery_type' => $this->faker->randomElement(array('DHL', 'InPost', 'DSV')),
            'numsup' => $this->faker->numberBetween(100000,200000),
            'tracking_number' => $this->faker->numberBetween(15000000000, 15999999999),
//            'groupecom_id'=> $this->faker->numberBetween(1,10)
            'groupecom_id'=> 1


        ];
    }
}
