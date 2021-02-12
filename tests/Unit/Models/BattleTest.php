<?php

namespace Tests\Unit\Models;

use App\Models\Battle;
use App\Models\BattleField;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BattleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_belongs_to_a_user_who_created_a_battle()
    {
        $owner = User::factory()->create();
        $battle = Battle::factory()->create(['owner_id' => $owner->id]);

        $this->assertEquals($owner->name, $battle->owner->name);
        $this->assertInstanceOf(User::class, $battle->owner);
    }

    /** @test */
    public function it_should_have_a_player_one_user()
    {
        $playerOne = User::factory()->create();
        $battle = Battle::factory()->create(['player_one_user_id' => $playerOne->id]);

        $this->assertEquals($playerOne->name, $battle->playerOne->name);
        $this->assertInstanceOf(User::class, $battle->playerOne);
    }

    /** @test */
    public function it_should_have_a_player_two_user()
    {
        $playerTwo = User::factory()->create();
        $battle = Battle::factory()->create(['player_two_user_id' => $playerTwo->id]);

        $this->assertEquals($playerTwo->name, $battle->playerTwo->name);
        $this->assertInstanceOf(User::class, $battle->playerTwo);
    }

    /** @test */
    public function it_has_many_battle_fields()
    {
        $battle = Battle::factory()->create();
        $battleField = BattleField::factory()->create(['battle_id' => $battle->id]);

        $this->assertEquals($battle->id, $battleField->battle_id);
        $this->assertInstanceOf(BattleField::class, $battle->battleFields->first());
    }
}
