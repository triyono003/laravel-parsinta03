<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class TaskController extends Controller
{
   public function index()
   {
       /* $tasks = DB::table('tasks')->orderBy('id','desc')->get();
        */
        return view('tasks.index',[
          "tasks" => Task::orderBy('id','desc')->get(),
          "title" => "tasks",
        ]);
   }

   public function create(Request $request)
   { /*
     DB::table('tasks')->insert([
       "list" => $request->list,
      ]);
      */
      $request->validate([
        'list' => ['required','string','min:3'],
       ]);
      Task::create($request->all());
      return back();
   }
   public function edit($id)
   {
     $task = Task::find($id);
     return view('tasks.edit',["task" => $task]);
   }
   
   public function update(Request $request,$id)
   {
      $request->validate([
        'list' => ['required','string','min:3'],
       ]);
     Task::find($id)->update([
         "list" => $request->list,
      ]);
      return redirect('tasks');
   }
   
   public function destroy($id)
   {
      Task::find($id)->delete();
      return back();
   }
}
