<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SabaController extends Controller
{
    public function indexPage() {
        $pageTitle = "Home Page";
        return view('home', [
            'title' => $pageTitle,
            'content' => "lorem ipsum",
             'items' => [1, 2, 3]
        ]);
    }

public function showMovie($id) {
  return $id;
}
}