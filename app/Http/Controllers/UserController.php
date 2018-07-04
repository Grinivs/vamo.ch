<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function getSignup() {
      return view('user.signup');
    }

    public function postSignup(Request $request) {
      $this->validate($request, [
        'name' => 'name|required',
        'email' => 'email|required|unique:users',
        'password' => 'required|min:6'
      ]);

      $user = new User([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password'))
      ]);
      $user->save();

      Auth::login($user);

      return redirect()->route('profile');
    }

    public function getSignin() {
      return view('user.signin');
    }

    public function postSignin(Request $request) {
      $this->validate($request, [
        'email' => 'email|required',
        'password' => 'required|min:6'
      ]);

      if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
        return redirect()->back();
      }
      else {
        // code...
      }
      return redirect()->back();
    }

    public function getProfile() {
      return view('profile');
    }

    public function getLogout(){
      Auth::logout();
      return view('home');
    }
}
