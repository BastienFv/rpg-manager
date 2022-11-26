<?php

namespace App\Http\Controllers;

use App\Http\Requests\CharacterRequest;
use App\Models\Character;
use Illuminate\Http\Request;
use App\Models\User;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('characters.index')
        ->with([
            'characters' => Character::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (isset(session('user')->id)) {
            view('characters.create');
        }
        return redirect()->route('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\CharacterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CharacterRequest $request)
    {   
        $data = $request->toArray();
        $data['magic'] = random_int(0, 14);
        $data['strength'] = random_int(0, 14);
        $data['agility'] = random_int(0, 14);
        $data['inteligence'] = random_int(0, 14);
        $data['pv'] = random_int(20, 50);
        $data['user_id'] =  session('user')->id;
       

        Character::create($data);
        
        // $character = new Character();
        // $character->fill($data);
        // $character->magic = 0;
        // $character->strength = 0;
        // $character->agility = 0;
        // $character->inteligence = 0;
        // $character->pv = 0;
        // $character->save();
        
        return redirect()->route('characters.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Character $character)
    {
        if (isset(session('user')->id)) {
            view('characters.show')->with([
                'character' => Character::where('user_id', session('user')->id)->get()
            ]);
        }
        return redirect()->route('login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
