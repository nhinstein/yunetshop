<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

use Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
  public function showRegistrationForm(){
    return view('auth/register');
  }
  public function register()
  {
      $this->validate(request(), [
          'name' => 'required',
          'email' => 'required|email|unique:users',
          'password' => 'required'
      ]);

      $user = User::create(request(['name', 'email', 'password']));
      $user->role ='customer';
      $user->save();

      auth()->login($user);
      Session::put('name',$user->name);
      Session::put('email',$user->email);
      Session::put('login',TRUE);

      return redirect()->to('/');
  }
}
