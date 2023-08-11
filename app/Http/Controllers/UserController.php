<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
      return view('users.index',[
          "users" => User::orderBy('id','desc')->get(),
          "title" => "users",
       ]);
    }
    
    public function home(User $user)
    {
      return view('users.home',[
          "user" => $user,
          "title" => "home user",
       ]);
    }
}
