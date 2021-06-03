@extends('layouts.app')
@section('content')
<section>
    @if($affected->count() > 0)
        <div class="container">
        @foreach ($affected as $pro)
            <div class="card mb-3" style="overflow: hidden;height:340px;width:65%;margin-left:auto;margin-right:auto;">
                <div class="row">

                        <div class="col-4">
                            <img src="/img/{{$pro->image}}" class="card-img" alt="...">
                        </div>

                        <div class="col-8">
                            <div class="card-body">
                                <div class="float-left">
                                        <p>book by {{session()->get('name')}}</p>
                                        <h4><b>{{$pro->name}}</b></h4>
                                        <p>THEATRE NAME : <b>{{$pro->t_name}}, {{$pro->t_city}}</b></p>
                                        <p>TIME : <b>{{$pro->time}}</b></p>
                                        <p>SEAT NO : {{$pro->seatno}}</p>
                                        <p>TOTAL PERSON : {{$pro->totalperson}}</p>
                                        <p class="card-text"><small class="text-muted">{{$pro->date}}</small></p>
                                        <button class="btn btn-dark">Download</button>
                                </div>
                                <div class="float-right">
                                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
        @else

            <center><h4 class="mt-5"><b>Oops!</b>, no ticket found.</h4><center>

        @endif
            </section>
@endsection
