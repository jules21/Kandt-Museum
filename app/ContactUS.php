<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUS extends Model
{

    protected $table = 'contact_us';
    protected $fillable = ['name', 'email', 'message'];
}
