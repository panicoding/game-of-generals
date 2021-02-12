<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Battle extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }

    public function playerOne()
    {
        return $this->belongsTo(User::class, 'player_one_user_id', 'id');
    }

    public function playerTwo()
    {
        return $this->belongsTo(User::class, 'player_two_user_id', 'id');
    }

    public function battleFields()
    {
        return $this->hasMany(BattleField::class);
    }
}
