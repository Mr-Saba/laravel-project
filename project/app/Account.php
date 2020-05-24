<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public $fillable = [
        'name', 
        'surname',
        'email', 
        'password',
        'photo',
        'year_of_birth'
      ];
}
