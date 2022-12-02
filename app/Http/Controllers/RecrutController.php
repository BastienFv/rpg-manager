<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecrutRequest;
use App\Models\Character;
use App\Models\Group;
use App\Models\Recrut;
use Illuminate\Http\Request;

class RecrutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('recruts.index')->with([
            'recruts' => Recrut::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recruts.create')->with([
            'group' => Group::all(),
            'character' => Character::where('user_id',auth()->user()->id)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\RecrutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RecrutRequest $request)
    {
        $data = $request->toArray();

        Recrut::create($data);

        return redirect()->route('recruts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
