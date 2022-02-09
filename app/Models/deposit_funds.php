<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deposit_funds extends Model
{
    use HasFactory;

    // protected $table = 'deposit_funds';

    public function get_withdraw_fund(){
        return $this->hasOne(withdraw_funds::class,'user_id','user_id');
    }

    protected $fillables =[
        'user_id',
        'wallet_address',
        'deposit_amount',
        'image',
        'updated_at',
    ];
}
