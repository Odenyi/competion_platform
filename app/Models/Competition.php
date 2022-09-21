<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;
    protected $table = 'competition';
    protected $fillable =[
        'home_team',
        'away_team',
        'odd',
        'start_time',
        'end_time',
        'status'
        
    ];
    public function availableCompetition()
    {
        return $this->hasMany(VirtualWallet::class);
    }
    public function amount() {
        return $this->hasOne(VirtualWallet::class);
    }
}
