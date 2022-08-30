<?php

namespace App\Models;

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
}
