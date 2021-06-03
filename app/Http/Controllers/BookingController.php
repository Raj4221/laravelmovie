<?php

namespace App\Http\Controllers;

use App\Models\booking;
use Illuminate\Http\Request;


class BookingController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bookings=Booking::latest()->get();
        return view("admin_view_booking")->with('bookings',$bookings);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $items=$request->input('item');
        $seatno=implode(",",$items);
        $date = date('Y-m-d', time());
        $booking=new booking();
        $booking->t_id=$request->t_id;
        $booking->member_id=session()->get('user');
        $booking->time="6:00 PM";
        $booking->totalperson=$request->check;
        $booking->seatno=$seatno;
        $booking->date=$date;
        $booking->save();
        return redirect('/ticket/'.session()->get('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(booking $booking)
    {
        //
    }
}
