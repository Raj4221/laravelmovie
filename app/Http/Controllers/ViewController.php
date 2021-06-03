<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    //It is use to view ticket deatils:
    public function view(Request $req){
        $affected = DB::table('theatres')
            ->join('bookings', 'bookings.t_id', '=', 'theatres.t_id')
            ->join('movies', 'movies.id', '=', 'theatres.m_id')
            ->select('movies.image','movies.name','theatres.t_id','theatres.t_city','theatres.t_name','bookings.time','bookings.seatno','bookings.totalperson','bookings.date')
            ->where(['bookings.member_id'=>$req->id])
            ->get();
        return view("ticket")->with('affected' , $affected);
    }



    //It is use To view Movies:
    public function viewmovie(Request $req){
        $affected = DB::table('movies')
            ->get();
        return view("view_movie")->with('affected',$affected);
    }


    public function viewtheatre(Request $req){
        $affected = DB::table('theatres')
            ->get();
        return view("view_theatre")->with('affected',$affected);
    }

    //It is use To delete theatre:
    public function theatredelete(Request $req){
        $delete = DB::table('theatres')->where('t_id', $req->id)->delete();
        return back();
    }


    //It is use To delete actor:
    public function actordelete(Request $req){
        $delete = DB::table('actors')->where('a_id', $req->id)->delete();
        return back();
    }


    //view actor
    public function viewactordetail(Request $req){
        $actor = DB::table('actors')
        ->where(['a_id' => $req->id])
        ->get();
        $movie=DB::table('actors')
        ->join('movies', 'movies.id', '=', 'actors.movie_id')
        ->select('movies.image','movies.name')
        ->where(['actors.a_id' => $req->id])
        ->get();
        return view("viewactordetail")->with(['actor' => $actor,  'movie' => $movie]);
    }


    //It is use to update theatre:
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



    //It is use to update actor:
    public function adminactordetail(Request $req){
        $affected = DB::table('actors')
            ->where(['a_id' => $req->id])
            ->get();
        return view("admin_update_actor")->with('affected',$affected);
    }
    public function updateactordetail(Request $req){
        $affected = DB::table('actors')
        ->where('a_id', $req->a_id)
        ->update(['name'=>$req->name,'bio'=>$req->bio,'dob'=>$req->dob]);
        return back()->with('msg','actor Updated Sucessfully');
    }

    //used for search
    public function searchmovie(Request $req){
        $search=$req->search;
        $movie = DB::table('movies')
        ->join('theatres', 'theatres.m_id', '=', 'movies.id')
        ->select('movies.image','movies.name','movies.director','movies.id')
            ->where('movies.name', 'LIKE', "%{$search}%")
            ->orwhere('theatres.t_name', 'LIKE', "%{$search}%")
            ->orwhere('theatres.t_city', 'LIKE', "%{$search}%")
            ->distinct("movies.name")
            ->get();
        return view("home")->with('movie',$movie);
    }



    //use for seat:
    public function seat(Request $req){
        $date=date('Y-m-d', time());
        $book = DB::table('bookings')
            ->where(['t_id' => $req->id])
            ->where(['date' => $date])
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
