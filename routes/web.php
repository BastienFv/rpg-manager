<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LoginController;
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
Route::get('/home',function(){
    
    return view('/home');
});


# recuperqtion formulaire depuis bd
Route::get('/register',[RegisterController::class,'create'])->name('rpg.register');
# poster formulaire vers bd et reenvoier vers page login
Route::post('/register',[RegisterController::class,'store'])->name('rpg.store');

# recuperation formuilaire connexion depuis bd 
Route::get('/login',[LoginController::class,'login'])->name('getlogin');

Route::post('/login',[LoginController::class,'authenticate'])->name('login');


Route::get('/profil',[LoginController::class,'profil'])->name('profil');

Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::resource('/users', UserController::class);
Route::resource('/characters', CharacterController::class);
Route::resource('/groups', GroupController::class);

Route::match(['get', 'post'], 'recrut', [RecrutController::class, 'recrut']);

