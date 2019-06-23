<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exhibition extends Model
{
    protected $guarded = ['id'];

    public function tickets()
    {
        $this->hasMany('App\Ticket');
    }

}
