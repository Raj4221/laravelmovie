
@extends('layouts.app')
@section('content')

@foreach ($actor as $pro)
<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-horizontal" style="display: flex;flex: 1 1 auto;">
                    <div class="img-square-wrapper">
                        <img class="" src="/img/avatar_2x.png" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{$pro->name}}</h4>
                        BIO: <span class="card-text">{{$pro->bio}}</span>    <br>
                        BIRTHDAY: <span class="card-text">{{$pro->dob}}</span>
                        <div class="float-right h-75 mt-5">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>
    <h1 class="mt-3">POPULAR MOVIES</h1>
    <div class="row mt-5"> 
    @foreach ($movie as $pro)
                             
                          <div class="col-3">
                             <div class="card img-fluid" style="width:200px">
                                 <img class="card-img-top" src="/img/{{$pro->image}}" alt="Card image" style="width:100%">
                                 
                                 <h4 class="card-title"><b>{{$pro->name}}</b></h4>
                                
                             </div>
                        </div>
                         @endforeach
                         </div>
</div>
@endforeach

@endsection