<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $fillable = [
      'name',
      'language',
      'summary',
      'production_year',
      'duration', 
      'genre',
      'imdb', 
      'author',
      'published',
    ];
    public function author() {
      return $this->belongsTo('App\User');
    }
}
