<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class LoginController extends Controller
{
    // affiche login
     public function login()
    {
        return view('login');
    }   


    // verificqtion donnes poster
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $email = $request->input('email');
        $password = $request->input('password');


        /*$user = User::where('email',$email)->first();
        if(!$user){
            return redirect()->route('login')->withErrors(['Email inconnue'])->withInput();
        }

        if(!Hash::check($password, $user->password)){
            return redirect()->route('login')->withErrors(['Mot de passe incorrect'])->withInput();
        }
        
        Auth::login($user);*/

        if(Auth::attempt(["email" => $email, "password" => $password])) {
            $request->session()->regenerate();
            return redirect()->route('profil');
        }

        return redirect("login")->withErrors(['Email inconnue'])->withInput(); 
       
    }

    public function profil(){

        return view('profil');
    }

    public function logout(){

        Auth::logout();
        return redirect()->route('login')->with('success','Vous êtes deconnecté, A Bientôt');
    }
}
