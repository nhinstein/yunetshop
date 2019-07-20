<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
  public function store()
  {
      $this->validate(request(), [
          'name' => 'required',
          'email' => 'required|email',
          'password' => 'required'
      ]);

      $user = User::create(request(['name', 'email', 'password']));

      auth()->login($user);

      return redirect()->to('/');
  }
}
