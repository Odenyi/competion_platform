<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $fillable =[
    'user_id',
    'transaction_info',
    'Previous_balance',
    'transaction_type',
    'amount',
    'available_balance'
    ];
}
