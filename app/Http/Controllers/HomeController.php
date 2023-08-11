<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   public function index()
   {
     return view('/home',[
        "title" => "home",
      ]);
   }
   public function about()
   {
    return view('/about',[
        "title" => "about",
      ]);
   }
   
   public function profile()
   {
     return view('/profile',[
        "title" => "profile",
      ]);
   }
   
   public function contacts()
   {
     return view('/contacts',[
        "title" => "contacts",
      ]);
   }
   
   public function tasks()
   {
      return redirect('tasks.index');
   }
   
   public function users()
   {
      return view('users.index');
   }
}
