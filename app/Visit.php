<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    //
    protected $guarded = ['id'];

    public function visitSchedule()
    {
        return $this->belongsTo('App\VisitSchedule');
    }
}
