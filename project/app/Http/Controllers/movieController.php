<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class movieController extends Controller
{
    public function list() {
        return Movie::where('published', 0)->orwhere('production_year', 2018)->get();
    }
    public function create() {
        return Movie::create([
        'title' => 'I am legend',
        'production_year' => 2019,
        'poster' => 'ragaca',
        'summary' => 'something'
        ]);
    }
}
