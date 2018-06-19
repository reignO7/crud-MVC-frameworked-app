<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    // protected $fillable = ['firstname', 'middlename', 'lastname', 'course'];
    protected $guarded = [];
}
