<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bets extends Model
{
    use HasFactory;
    protected $table = 'bets';
    protected $fillable =[
        'user_id',
        'game_id',
        'team_name',
        'bet_type',
        'odds'
    ];
}
