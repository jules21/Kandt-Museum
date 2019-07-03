<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $fillable = [
        'id',
'customer_id',
'user_id',
'product',
'amount',
'currency',
'status'
    ];
}
