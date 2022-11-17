<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncompleteBets extends Model
{
    use HasFactory;
    protected $table = 'incompletebets';
    protected $fillable =[
        'id',
        'home_team',
        'away_team',
        'odd',
        'start_time',
        'end_time',
        
        
    ];
    
    public function incompleteCompetition()
    {
        return $this->hasMany(IncompleteBets_wallet::class);
    }
}
