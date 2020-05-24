<?php

namespace App\Http\Controllers;
use App\Account;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class formController extends Controller

{
   function indexPage() {
      $users = Account::inRandomOrder()->get();
      return view('users', [
        'users' => $users  
      ]);

    }
    public function create(Request $req) {
      $validationData = $req->validate([
        'name' => 'required|min:2',
        'surname' => 'required',
        'email' => 'required',
        'password' => 'required|min:8',
        'photo' => 'required',
        'year_of_birth' => 'required'
      ]);
 Account::create($validationData);
return redirect('/indexPage');
      $filePath = $req->file('photo')->store('photo');
      return view((array_merge($req->all(
        [
          'photo' => $filePath
      ]
    ))));
      return dd($validationData); 
  }
}