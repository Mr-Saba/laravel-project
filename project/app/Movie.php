<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $fillable = [
      'title', 
      'production_year',
      'poster', 
      'summary',
      'video_url', 
      'published'
    ];
}
