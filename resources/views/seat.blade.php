@extends('layouts.app')
@section('content')
{{session()->get('m_id')}}
<section>
<div class="container mt-4">
<form action="{{route('booking.store')}}" method="post">
        @csrf
        <input type="hidden" class="form-control form-control-sm" name="t_id" value="{{request()->route()->id}}">

        <!-- <div class="form-row">
                        <select name="time" id="time" class="btn btn-secondary w-25">
                            <option class="btn btn-primary" value="9:00AM">9:00 AM</option>
                            <option class="btn btn-primary" value="12:00PM">12:00 PM</option>
                            <option class="btn btn-primary" value="3:00PM">3:00 PM</option>
                            <option class="btn btn-primary" value="6:00PM">6:00 PM</option>
                        </select>
        </div> -->

        <div class="form-row mt-3">
                        <div class="col">
                            Enter Names:<br>
                            <input type="text" class="form-control" id="name" placeholder="enter names" required>
                        </div>
                        <div class="col">
                            Enter Total Person:<br>
                            <input type="text" class="form-control" name="check" id="check" placeholder="enter total person" required>
                        </div>
        </div>
                    <br>
            <div class="seat">
                <div class="row mt-5">
                <div class="col-3">
                <h1>R</h1>
                    @for ($n = 1; $n < 11; $n++)
                        <div>
                            @for($j=1;$j<8;$j++)
                                    @if(in_array('R'.$n.$j, $seat))
                                        <input type="checkbox" name="item[]" value="R{{$n}}{{$j}}" disabled>
                                    @else
                                <input type="checkbox" name="item[]" value="R{{$n}}{{$j}}" >
                                @endif
                            @endfor
                    </div>
                    @endfor
                </div>
                <div class="col-3">
                <h1>S</h1>
                @for ($n = 1; $n < 8; $n++)
                    <div>
                        @for($j=1;$j<8;$j++)
                            @if(in_array('S'.$n.$j, $seat))
                                <input type="checkbox" name="item[]" value="S{{$n}}{{$j}}" disabled/>
                            @else
                                <input type="checkbox" name="item[]" value="S{{$n}}{{$j}}" >
                            @endif
                        @endfor
                    </div>
                @endfor
                </div>
                <div class="col-3">
                <h1>T</h1>
                @for ($n = 1; $n < 11; $n++)
                    <div>
                        @for($j=1;$j<8;$j++)
                            @if(in_array('T'.$n.$j, $seat))
                                <input type="checkbox" name="item[]" value="T{{$n}}{{$j}}" disabled/>
                            @else
                                <input type="checkbox" name="item[]" value="T{{$n}}{{$j}}" >
                            @endif
                        @endfor
                    </div>
                @endfor
                </div>
                <div class="col-3 mt-4">
                    <h3>Instruction:</h3>
                    <input type="checkbox" name="" disabled/> Reserved seat can not be selected, Its Disabled<br>
                    <input type="checkbox" checked/> Selected seat<br>
                    <input type="checkbox"/> Empty Seat
                </div>

                <div>
                        <span class="float-left mt-5">Selected Seat:</span><span id="seat" class="float-left mt-5"></span>
                        <button class="btn btn-warning float-right mt-5" onclick="book()">Booking Confirm</button>
                </div>
            </div>
            </div>
<form>
</div>
</section>
@endsection
