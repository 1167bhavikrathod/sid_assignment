<?php
use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');
// Route::redirect('/welcome', 'redirect');
Route::view('/welcome', 'welcome');
Route::view('/home', 'home');
Route::view('/redirect','redirect');
Route::view('/','welcome');
Route::view('/login', 'welome');
Route::view('/register', 'welome');
Route::get('/', [Usercontroller::class, 'index']);

// Route::get('/home/{name}', function ($name) {
//     return view('home',['name'=>$name]);
// });



