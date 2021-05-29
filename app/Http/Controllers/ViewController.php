<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;  
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function view(Request $req){
        $affected = DB::table('theatres')
            ->join('bookings', 'bookings.t_id', '=', 'theatres.t_id')
            ->join('movies', 'movies.id', '=', 'theatres.m_id')
            ->select('movies.image','movies.name','theatres.t_id','theatres.t_city','theatres.t_name','bookings.time','bookings.seatno','bookings.totalperson','bookings.date')
            ->where(['bookings.u_id'=>$req->id])
            ->get();
        return view("ticket")->with('affected' , $affected);
    }
    public function viewmovie(Request $req){
        $affected = DB::table('movies')
            ->get();
        return view("view_movie")->with('affected',$affected);
    }
    public function viewmoviedetail(Request $req){
        $affected = DB::table('movies')
        ->where(['movies.id' => $req->id])
        ->get();
        $cast = DB::table('actors')
        ->where(['m_id' => $req->id])
        ->get();
        return view("view_movie_detail")->with(['affected' => $affected,  'cast' => $cast]);
    }
    public function viewtheatre(Request $req){
        $affected = DB::table('theatres')
            ->get();
        return view("view_theatre")->with('affected',$affected);
    }
    public function theatredelete(Request $req){
        $delete = DB::table('theatres')->where('t_id', $req->id)->delete();
        return back();
    }
    public function actordelete(Request $req){
        $delete = DB::table('actors')->where('a_id', $req->id)->delete();
        return back();
    }
    public function viewactordetail(Request $req){
        $actor = DB::table('actors')
        ->where(['a_id' => $req->id])
        ->get();
        $movie=DB::table('actors')
        ->join('movies', 'movies.id', '=', 'actors.m_id')
        ->select('movies.image','movies.name')
        ->where(['actors.a_id' => $req->id])
        ->get();
        return view("viewactordetail")->with(['actor' => $actor,  'movie' => $movie]);
    }
    public function viewtheatredetail(Request $req){
        $affected = DB::table('theatres')
            ->where(['t_id' => $req->id])
            ->get();
        return view("update_theatre")->with('affected',$affected);
    }
    public function updatetheatredetail(Request $req){
        $affected = DB::table('theatres')
        ->where('t_id', $req->t_id)
        ->update(['t_name'=>$req->name,'t_city'=>$req->city,'rate'=>$req->rate]);
        return back()->with('msg','Theatre Updated Sucessfully');
    }
    public function viewmovietheatre(Request $req){
        $affected = DB::table('theatres')
            ->where(['m_id' => $req->id])
            ->get();
        // $book = DB::table('bookings')
        //     ->where(['m_id' => $req->id])
        //     ->get();
        // $seat = array();
        // for($i =0;$i < count($book);$i++){
        //     $s=array();
        //     $s=explode(",", $book[$i]->seatno);
        //     $seat = array_merge($seat, $s); 
           
        // }
        return view("book")->with('affected' , $affected);
    }
    public function searchmovie(Request $req){
        $search=$req->search;
        $movie = DB::table('movies')
        ->join('theatres', 'theatres.m_id', '=', 'movies.id')
        ->select('movies.image','movies.name','movies.director','movies.id')
            ->where('name', 'LIKE', "%{$search}%")
            ->orwhere('theatres.t_name', 'LIKE', "%{$search}%")
            ->orwhere('theatres.t_city', 'LIKE', "%{$search}%")
            ->distinct("movies.name")
            ->get();
        return view("home")->with('movie',$movie);
    }
    public function seat(Request $req){
        $book = DB::table('bookings')
            ->where(['t_id' => $req->id])
            ->get();
        $seat = array();
        for($i =0;$i < count($book);$i++){
            $s=array();
            $s=explode(",", $book[$i]->seatno);
            $seat = array_merge($seat, $s); 
           
        }
        return view("seat")->with('seat' , $seat);
    }
}
