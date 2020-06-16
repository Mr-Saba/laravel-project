<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class movieController extends Controller
{
    function movieList() {
        $movie = Movie::inRandomOrder()->get();
        return view('movieList', [
          'movieList' => $movie  
        ]);
  
      }
    public function addMovies(Request $req) {
        $validationData = $req->validate([
            'name' => 'required',
            'language' => 'required',
            'summary' => 'required',
            'production_year' => 'required|size:4',
            'duration' => 'required',
            'genre' => 'required',
            'imdb' => 'required|max:10'
          ]);
          $info = $req->all();
          Movie::create($validationData, $info);
          return redirect('/movieList');
    }
} 
