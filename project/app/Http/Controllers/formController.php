<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Storage;

class formController extends Controller

{

   function indexPage() {
      $users = Account::inRandomOrder()->get();
      return view('users', [
        'users' => $users  
      ]);

    }
    public function create(Request $req) {
      //  $password = Hash::make('password');
      $validationData = $req->validate([
        'name' => 'required|min:2',
        'surname' => 'required',
        'email' => 'required',
        'password' => 'required|min:8',
        'photo' => 'required',
        'year_of_birth' => 'required'
      ]);
      $path = $req->file('photo')->store('photos');
 Account::create([$validationData,
 'name' => $req->get('name'),
 'surname' => $req->get('surname'),
 'email' => $req->get('email'),
 'password' => Hash::make($req->get('password')),
 'photo' => $path,
 'year_of_birth' => $req->get('year_of_birth'),
 ]);
return redirect('/indexPage');
  }

  public function login(Request $request) {
    
    if(Auth::attempt($request->except('_token'))) {
    return redirect('/addMovies');
  }
  else {
    return '<h1>invalid credentials</h1>';
  }
}

public function logout() {
  Auth::logout();
  return redirect(route('/home'));
}
}