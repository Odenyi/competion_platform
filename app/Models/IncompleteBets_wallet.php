<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncompleteBets_wallet extends Model
{
    use HasFactory;
    protected $table = 'incompletebets_wallet';
    protected $fillable =[
        'competition_id',
        'user_id',
        'bet_type',
        'status',
        'stake',
        'amount'

        
    ];
    public function incompletecompetition()
    {
        return $this->belongsTo(IncompleteBets::class,'competition_id','id');
    }
   
}
