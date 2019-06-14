<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artifact extends Model
{
    //
    protected $guarded = ['id'];

    public function artifactCategory()
    {
        return $this->belongsTo('App\ArtifactCategory', 'category_id');
    }
}
