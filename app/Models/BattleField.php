<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BattleField extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'square_number',
    ];

    public function battle()
    {
        return $this->belongsTo(Battle::class);
    }
}
