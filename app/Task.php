<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $dates = ['due_date'];


     public function user()
    {
        return $this->belongsTo('App\User');
    }

    
}
