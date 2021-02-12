<?php

namespace Database\Seeders;

use App\Models\Soldier;
use Illuminate\Database\Seeder;

class SoldierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $powers = [
            'spy' => [
                '5-star-general',
                '4-star-general',
                '3-star-general',
                '2-star-general',
                '1-star-general',
                'colonel',
                'lt-colonel',
                'major',
                'captain',
                '1st-lieutenant',
                '2nd-lieutenant',
                'sergeant',
                'flag',
            ],
            '5-star-general' => [
                '4-star-general',
                '3-star-general',
                '2-star-general',
                '1-star-general',
                'colonel',
                'lt-colonel',
                'major',
                'captain',
                '1st-lieutenant',
                '2nd-lieutenant',
                'sergeant',
                'private',
                'flag',
            ],
            '4-star-general' => [
                '3-star-general',
                '2-star-general',
                '1-star-general',
                'colonel',
                'lt-colonel',
                'major',
                'captain',
                '1st-lieutenant',
                '2nd-lieutenant',
                'sergeant',
                'private',
                'flag',
            ],
            '3-star-general' => [
                '2-star-general',
                '1-star-general',
                'colonel',
                'lt-colonel',
                'major',
                'captain',
                '1st-lieutenant',
                '2nd-lieutenant',
                'sergeant',
                'private',
                'flag',
            ],
            '2-star-general' => [
                '1-star-general',
                'colonel',
                'lt-colonel',
                'major',
                'captain',
                '1st-lieutenant',
                '2nd-lieutenant',
                'sergeant',
                'private',
                'flag',
            ],
            '1-star-general' => [
                'colonel',
                'lt-colonel',
                'major',
                'captain',
                '1st-lieutenant',
                '2nd-lieutenant',
                'sergeant',
                'private',
                'flag',
            ],
            'colonel' => [
                'lt-colonel',
                'major',
                'captain',
                '1st-lieutenant',
                '2nd-lieutenant',
                'sergeant',
                'private',
                'flag',
            ],
            'lt-colonel' => [
                'major',
                'captain',
                '1st-lieutenant',
                '2nd-lieutenant',
                'sergeant',
                'private',
                'flag',
            ],
            'major' => [
                'captain',
                '1st-lieutenant',
                '2nd-lieutenant',
                'sergeant',
                'private',
                'flag',
            ],
            'captain' => [
                '1st-lieutenant',
                '2nd-lieutenant',
                'sergeant',
                'private',
                'flag',
            ],
            '1st-lieutenant' => [
                '2nd-lieutenant',
                'sergeant',
                'private',
                'flag',
            ],
            '2nd-lieutenant' => [
                'sergeant',
                'private',
                'flag',
            ],
            'sergeant' => [
                'private',
                'flag',
            ],
            'private' => [
                'spy',
                'flag',
            ],
            'flag' => [
                'flag',
            ],
        ];

        $soldiers = [
            [
                'name' => 'Spy',
                'slug' => 'spy',
                'quantity' => 2,
                'powers' => $powers['spy'],
            ],
            [
                'name' => '5-Star General',
                'slug' => '5-star-general',
                'quantity' => 1,
                'powers' => $powers['5-star-general'],
            ],
            [
                'name' => '4-Star General',
                'slug' => '4-star-general',
                'quantity' => 1,
                'powers' => $powers['4-star-general'],
            ],
            [
                'name' => '3-Star General',
                'slug' => '3-star-general',
                'quantity' => 1,
                'powers' => $powers['3-star-general'],
            ],
            [
                'name' => '2-Star General',
                'slug' => '2-star-general',
                'quantity' => 1,
                'powers' => $powers['2-star-general'],
            ],
            [
                'name' => '1-Star General',
                'slug' => '1-star-general',
                'quantity' => 1,
                'powers' => $powers['1-star-general'],
            ],
            [
                'name' => 'Colonel',
                'slug' => 'colonel',
                'quantity' => 1,
                'powers' => $powers['colonel'],
            ],
            [
                'name' => 'Lt. Colonel',
                'slug' => 'lt-colonel',
                'quantity' => 1,
                'powers' => $powers['lt-colonel'],
            ],
            [
                'name' => 'Major',
                'slug' => 'major',
                'quantity' => 1,
                'powers' => $powers['major'],
            ],
            [
                'name' => 'Captain',
                'slug' => 'captain',
                'quantity' => 1,
                'powers' => $powers['captain'],
            ],
            [
                'name' => '1st Lieutenant',
                'slug' => '1st-lieutenant',
                'quantity' => 1,
                'powers' => $powers['1st-lieutenant'],
            ],
            [
                'name' => '2nd Lieutenant',
                'slug' => '2nd-lieutenant',
                'quantity' => 1,
                'powers' => $powers['2nd-lieutenant'],
            ],
            [
                'name' => 'Sergeant',
                'slug' => 'sergeant',
                'quantity' => 1,
                'powers' => $powers['sergeant'],
            ],
            [
                'name' => 'Private',
                'slug' => 'private',
                'quantity' => 6,
                'powers' => $powers['private'],
            ],
            [
                'name' => 'Flag',
                'slug' => 'flag',
                'quantity' => 1,
                'powers' => $powers['flag'],
            ],
        ];

        $troops = collect($soldiers)->map(function ($soldier) {
            return [
                'name' => $soldier['name'],
                'slug' => $soldier['slug'],
                'quantity' => $soldier['quantity'],
                'powers' => json_encode($soldier['powers']),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        });

        Soldier::insert($troops->toArray());
    }
}
