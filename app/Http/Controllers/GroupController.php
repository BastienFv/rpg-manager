<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupRequest;
use App\Models\Character;
use App\Models\Group;
use App\Models\Recrut;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('groups.index')
        ->with([
            'groups' => Group::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('groups.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\GroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GroupRequest $request)
    {
        $data = $request->toArray();
        $data['user_id'] =  auth()->user()->id;

        Group::create($data);

        return redirect()->route('groups.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        
        return view('groups.show')->with([
            'group' => $group,
            
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        return view('groups.edit')->with([
            'group' => $group
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\GroupRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GroupRequest $request, Group $group)
    {
        $group->fill($request->toArray());
        $group->save();

        return redirect()->route('groups.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $group->delete();
        
        return redirect()->route('groups.index');
    }
}
