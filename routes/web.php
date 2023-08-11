<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

/*
use App\Http\Middleware;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
*/
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. <Thes></Thes>e
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware('auth')->group(function()
{
  Route::get('/',[HomeController::class,'index']);
  Route::get('/about',[HomeController::class,'about']);
  Route::get('/contacts',[HomeController::class,'contacts']);
  Route::get('/profile',[HomeController::class,'profile']);
  Route::get('/tasks',[HomeController::class,'tasks']);
  Route::get('/users',[HomeController::class,'users']);
  
  Route::get('/tasks',[TaskController::class,'index']);
  Route::get('/users',[UserController::class,'index']);
  
  Route::post('logout',LogoutController::class)->name('logout');
});
  
  Route::post('/tasks',[TaskController::class,'create']);
  Route::get('/tasks/{id}/edit',[TaskController::class,'edit']);
  Route::put('/tasks/{id}',[TaskController::class,'update']);
  
  Route::delete('/tasks/{id}',[TaskController::class,'destroy']);
  
  Route::get('/users/{user}',[UserController::class,'home']);

Route::middleware('guest')->group(function()
{
  Route::get('/auth/register',[RegistrationController::class,'create']);
  Route::post('/auth/register',[RegistrationController::class,'store']);
  
  Route::get('/auth/login',[LoginController::class,'create'])->name('login');
  Route::post('/auth/login',[LoginController::class,'store'])->name('login');
  
});