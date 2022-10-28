<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinishedBets_Wallet extends Model
{
    use HasFactory;
    protected $table = 'finishedbets_wallet';
    protected $fillable =[
        'competition_id',
        'user_id',
        'bet_type',
        'status',
        'amount'

        
    ];
    public function closedcompetition()
    {
        return $this->belongsTo(FinishedBets::class,'competition_id','id');
    }
}
