<?php

namespace Tests;

use App\Models\BattleField;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function createBattleField($battle)
    {
        for ($i = 1; $i <= 72; $i++) {
            $battle->battleFields()->create([
                'square_number' => $i,
            ]);
        }
    }
}
