<?php

namespace App\Models;

use App\Http\Controllers\CompetitionController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VirtualWallet extends Model
{
    use HasFactory;
    protected $table = 'virtualwallet';
    protected $fillable =[
        'competition_id',
        'user_id',
        'bet_type',
        'amount'

        
    ];
    public function competition()
    {
        return $this->belongsTo(competition::class,'competition_id','id');
    }
}
