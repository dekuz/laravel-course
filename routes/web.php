<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hello', 'App\Http\Controllers\HelloController@index'); //ambil path dari hellocontroller
// Route::get('hello', [HelloController::class,'index']); //http://127.0.0.1:8000/hello - ambil path dari hellocontroller
// Route::post('hello', [HelloController::class,'create']); //http://127.0.0.1:8000/hello - ambil path dari hellocontroller
// Route::get('world', [HelloController::class,'world_message']); // http://127.0.0.1:8000/world


Route::resource('posts',PostController::class);