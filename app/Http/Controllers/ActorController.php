<?php

namespace App\Http\Controllers;

use App\Models\actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $actor=actor::paginate(10);
        return view("view_actor")->with('actor',$actor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("insert_actor");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $actor=new actor();
        $actor->m_id=$request->m_id;
        $actor->name=$request->name;
        $actor->bio=$request->bio;
        $actor->dob=$request->dob;
        $actor->save();
        return back()->with('msg','Actor Inserted Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function show(actor $actor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function edit(actor $actor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, actor $actor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function destroy(actor $actor)
    {
        //
        $actor->delete();
        return back();
    }
}
