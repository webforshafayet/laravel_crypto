<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class withdraw_funds extends Model
{
    protected $fillables =[
        'user_id',
        'wallet_address',
        'amount',   
    ];

   
    
}
