<?php

namespace Database\Factories;

use App\Models\Soldier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SoldierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Soldier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'quantity' => 1,
            'powers' => json_encode(['flag']),
        ];
    }
}
