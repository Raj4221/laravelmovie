@extends('layouts.app')
@section('content')

<div class="container">
<form action="{{route('booking.store')}}" method="post">
@csrf
        <input type="hidden" class="form-control form-control-sm" name="m_id" value="{{request()->route()->id}}">
        <div class="row">
            <div class="col-6">
                <div class="float-left">
                    <select id="t_city" name="t_city" placeholder="SELECT THEATRE:" class="btn btn-secondary" required>
                        <option value="select" disabled>SELECT TEATRE:</option>
                        @foreach ($affected as $theatre)
                            <option value="{{$theatre->t_name}},{{$theatre->t_city}}">{{$theatre->t_name}},{{$theatre->t_city}}</option>
                        @endforeach
                    </select>
                </div>
               </div> 
               <div class="col-6">
                <select name="time" id="time" class="btn btn-secondary float-right">
                    <option class="btn btn-primary" value="9:00AM">9:00 AM</option>
                    <option class="btn btn-primary" value="12:00PM">12:00 PM</option>
                    <option class="btn btn-primary" value="3:00PM">3:00 PM</option>
                    <option class="btn btn-primary" value="6:00PM">6:00 PM</option>
                </select> 
            </div>
        </div>
            <div class="form-row mt-3">
                <div class="col">
                    Enter Names:<br>
                    <input type="text" class="form-control" placeholder="enter names" required>
                </div>
                <div class="col">
                    Enter Total Person:<br>
                    <input type="text" class="form-control" name="check" id="check" placeholder="enter total person" required>
                </div>
            </div>
               <br>  
            
      
        <div class="row mt-5">
        <div class="col-3">
        <h1>R</h1>
            @for ($n = 1; $n < 11; $n++)
                <div>
                    @for($j=1;$j<8;$j++)
                            @if(in_array('R'.$j.$n, $seat))
                                <input type="checkbox" name="item[]" value="R{{$j}}{{$n}}" disabled> 
                            @else
                        <input type="checkbox" name="item[]" value="R{{$j}}{{$n}}" >
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
                    @if(in_array('S'.$j.$n, $seat))
                        <input type="checkbox" name="item[]" value="S{{$j}}{{$n}}" disabled/> 
                    @else
                        <input type="checkbox" name="item[]" value="S{{$j}}{{$n}}" >
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
                    @if(in_array('T'.$j.$n, $seat))
                        <input type="checkbox" name="item[]" value="T{{$j}}{{$n}}" disabled/> 
                    @else
                        <input type="checkbox" name="item[]" value="T{{$j}}{{$n}}" >
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
       
            
                
            <button class="btn btn-warning float-right mt-5">Booking Confirm</button>
           </div>
       </div>
        
        </form>

</div>
@endsection