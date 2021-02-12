<?php

namespace Tests\Unit\Models;

use App\Models\Battle;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BattleFieldTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function make_sure_battle_field_is_setup()
    {
        $battle = Battle::factory()->create();
        $this->createBattleField($battle);

        $this->assertCount(72, $battle->fresh()->battleFields);
    }
}
