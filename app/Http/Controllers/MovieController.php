<?php

namespace App\Http\Controllers;

use App\Models\movie;
use App\Models\actor;
use App\Models\theatre;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        //
        $movies=movie::where('id',$req->id)->get();
        $cast=movie::find($req->id);
        return view("view_movie_detail")->with(['movies'=>$movies,'cast'=>$cast->actors]);
        // return Movie::latest()->get();
    }

    public function viewmovietheatre(Request $req){
        $affected=movie::find($req->id);
        return view("book")->with('affected' , $affected->theatres);
    }

    public function view()
    {
        //
        $movie=movie::paginate(10);
        return view("home")->with('movie',$movie);
        // return Movie::latest()->get();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("insert_movie");
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

        $imageName = $request->file('image')->getClientOriginalName();
//        .'.'.$request->image->extension();

        $request->image->move(public_path('img'), $imageName);
        $movie=new movie();
        $movie->name=$request->name;
        $movie->description=$request->desc;
        $movie->director=$request->director;
        $movie->rate=$request->rate;
        $movie->image=$imageName;
        $movie->save();
        return back()->with('msg','Movie Inserted Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(movie $movie)
    {
        //
    }
}
