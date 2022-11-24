<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecrutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/register',[RegisterController::class,'create'])->name('rpg.register');

Route::post('/register',[RegisterController::class,'store'])->name('rpg.store');

Route::resource('/users', UserController::class);
Route::resource('/characters', CharacterController::class);
Route::resource('/groups', GroupController::class);

Route::match(['get', 'post'], 'recrut', [RecrutController::class, 'recrut']);

Route::get('/home', function() {
    return view('home');
});