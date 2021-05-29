<?php

namespace App\Http\Controllers;
use App\Models\booking;
use App\Models\theatre;
use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id=session()->get('user');
        $user=User::find($id);
        return view('ticket')->with('bookings',$user->bookings);
    }
}
