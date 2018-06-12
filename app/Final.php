<?php

namespace App;
use \App\User;

use Illuminate\Database\Eloquent\Model;

class Final extends Model
{
    public function user()
    {
        $this->belongsTo('App\User', 'id');
    }
}
