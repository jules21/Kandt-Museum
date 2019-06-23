<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        $this->belongsTo('App\User');
    }
    public function exhibition()
    {
        $this->belongsTo('App\Exhibition');
    }

}
