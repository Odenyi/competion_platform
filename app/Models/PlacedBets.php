<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlacedBets extends Model
{
    use HasFactory;
    protected $table = 'placedbets';
    protected $fillable = [
        'groupbet_id',
        'user_id',
        'game_id',
        'team_name',
        'bet_type',
        'odds'
    ];
 
}
