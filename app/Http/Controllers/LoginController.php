<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{
    public function create()
    {
      return view('auth.login',['title' => 'Login']);
    }
    
    public function store(Request $request)
    {
      $attributes = $request->validate([
          'email' => ['required','email'],
          'password' => ['required'],
       ]);
       
      // select user
      //cara simpel
      /*
      $credentials = [
        'email' => $request->email,
        'password' => $request->password,
      ];
      */
      
      if(Auth::attempt($attributes)){ // $credentials
        return redirect(RouteServiceProvider::HOME)->with('success','your are now logged');
      }
      
      /*
      $user = User::whereEmail($request->email)->first();
      
      if($user){
        if(Hash::check($request->password, $user->password)){
          Auth::login($user);
        }// if check
      }// if
      */
      throw ValidationException::withMessages([
          'email' => 'your email or password is wrong',
       ]);
    }
}
