<?php

namespace Database\Factories;

use App\Models\Battle;
use App\Models\BattleField;
use App\Models\Soldier;
use Illuminate\Database\Eloquent\Factories\Factory;

class BattleFieldFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BattleField::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'battle_id' => Battle::factory(),
            'soldier_id' => Soldier::factory(),
            'square_number' => rand(1, 72),
        ];
    }
}
