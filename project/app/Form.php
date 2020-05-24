<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    public $fillable = [
        'name', 
        'surname',
        'email', 
        'password'
      ];
}
