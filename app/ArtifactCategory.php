<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtifactCategory extends Model
{
    //
    protected $guarded = ['id'];
    
    public function artifact()
    {
        return $this->hasMany('App\Artifact');
    }
}
