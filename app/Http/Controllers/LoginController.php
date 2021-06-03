<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function logout(Request $req){
        $req->session()->flush();
        return redirect("/");
    }

}
