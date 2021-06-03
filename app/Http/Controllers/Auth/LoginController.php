<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


    public function login(Request $request)
    {


        $input = $request->all();

        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where("email",$request->email)->get();

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {

           if(auth()->user()->is_admin == 1)
           {
               return redirect('/insert');
           }
           elseif(auth()->user()->is_admin == 0)
           {
                $request->session()->put("name",$user[0]->name);
                $request->session()->put("user",$user[0]->id);
                return redirect('/home');
           }
        }
        else
        {
            return redirect('/')->with('error', 'Email of Password are wrong.');
        }

    }
}
