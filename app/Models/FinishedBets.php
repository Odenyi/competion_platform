<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinishedBets extends Model
{
    use HasFactory;
    protected $table = 'finished_bets';
    protected $fillable =[
        'id',
        'home_team',
        'away_team',
        'odd',
        'start_time',
        'end_time',
        
        
    ];
    public function closedCompetition()
    {
        return $this->hasMany(FinishedBets_Wallet::class);
    }
    
}
