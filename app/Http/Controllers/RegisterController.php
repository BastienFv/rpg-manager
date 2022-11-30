<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function create(){
        $register=[];
        return view('register')
        ->with([
            'register' => $register]);
    }

    public function store(UserRequest $request,User $user)
    {

        $user = new User();
        $user->pseudo = $request->input('pseudo');
        $user->lastname = $request->input('lastname');
        $user->firstname = $request->input('firstname');
        $user->email = $request->input('email');
        $user->password =Hash::make($request->input('password'));
        $user->save();
        Auth::login($user);

        return redirect()
            ->route('login')
            ->with('success', 'ok');
    }


}
