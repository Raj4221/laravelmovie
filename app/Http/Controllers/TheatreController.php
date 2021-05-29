<?php

namespace App\Http\Controllers;

use App\Models\theatre;
use Illuminate\Http\Request;

class TheatreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Theatre::latest()->get();
    }
    public function viewtheatre(Request $request)
    {
        //
        
        return Theatre::where('m_id','=',$request->id)->latest()->get();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("insert_theatre");
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
        $theatre=new theatre();
        $theatre->m_id=$request->m_id;
        $theatre->t_name=$request->name;
        $theatre->t_city=$request->city;
        $theatre->rate=$request->rate;
        $theatre->save();
        return back()->with('msg','Theatre Inserted Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\theatre  $theatre
     * @return \Illuminate\Http\Response
     */
    public function show(theatre $theatre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\theatre  $theatre
     * @return \Illuminate\Http\Response
     */
    public function edit(theatre $theatre)
    {
        //
        return view("update_theatre")->with('theatre',$theatre);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\theatre  $theatre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, theatre $theatre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\theatre  $theatre
     * @return \Illuminate\Http\Response
     */
    public function destroy(theatre $theatre)
    {
        //
        $theatre->delete();
        return back();
    }
}
