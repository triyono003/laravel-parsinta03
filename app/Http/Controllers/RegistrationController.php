<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
   public function create()
   {
     return view('auth.register',['title' => 'register']);
   }
   
   public function store(Request $request)
   {
     $request->validate([
       'username' => ['required','unique:users','alpha_num','min:3','max:25'],
       'name' => ['required','string','min:3'],
       'email' => ['required','email','unique:users'],
       'password' => ['required','min:8'],
     ]);
     
     User::create([
        'username' => $request->username,
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
      ]);
      
      session()->flash('success','thank you,you are now registered');
     return redirect('/');
   }
}
