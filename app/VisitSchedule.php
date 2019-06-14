<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitSchedule extends Model
{
    //
    protected $guarded = ['id'];

    public function visits()
    {
        return $this->hasMany('App\Visit');
    }
}
