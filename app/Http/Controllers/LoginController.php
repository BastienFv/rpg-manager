<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class LoginController extends Controller
{
    // affiche login
     public function login()
    {
        return view('login');
    }   


    // verificqtion donnes poster
    public function authenticate(Request $request, User $user)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $email=$request->input('email');
        $password=$request->input('password');
        $user = User::where('email',$email)->first();
        if(!$user){
            return redirect()->route('login')->withErrors(['Email inconnue'])->withInput();
        }
        if(Hash::check($password, $user->password)){
       //    if (!password_verify($password, $user->password)) {
                return redirect()->route('login')->withErrors(['Mot de passe incorrect'])->withInput();
            }
            session(['user'=> $user]);
            //dd($user);
            return redirect()->route('profil');
 
      
    }

    public function profil(){

        return view('profil');
    }

    public function logout(){

        session()->forget('user');
        return redirect()->route('login')->with('success','vous êtes deconecté');
    }
}
