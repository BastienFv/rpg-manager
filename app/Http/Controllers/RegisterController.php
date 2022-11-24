<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        $register=[];
        return view('register')
        ->with([
            'register' => $register]);
    }

    public function store(UserRequest $request)
    {

     
        User::create($request->toArray());
        

        return redirect()
            ->route('rpg.register')
            ->with('success', 'Compte créé');
    }


}
