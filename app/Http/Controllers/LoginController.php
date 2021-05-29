<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;  

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login(Request $req){
        $affected = DB::table('members')->get();
       
            if($req->username=="admin" and $req->password=="admin")
            {
                $req->session()->put("admin",$req->username);
                return redirect("/insert");
            }
            foreach($affected as $member){
            if($req->username==$member->username and $req->password==$member->password){
                $req->session()->put("user",$member->id);
                $req->session()->put("name",$member->username);
                return redirect("/home");
            }
        }
        return back()->with('msg','Pleae enter valid user name and password');
    }
    public function logout(Request $req){
        $req->session()->flush();
        return redirect("/");
    }
    
}
