@extends('layouts.home')
@section('content')

<div class="container">

<div class="row">
    @foreach ($movie as $pro)

        <div class="col-4 mt-4">
            <div class="card profile-card-5">
                <div class="card-img-block">
                    <a href="view_movie_detail/{{$pro->id}}" style="text-decoration:none;"><img class="card-img-top" src="img/{{$pro->image}}" alt="Card image cap" style="height:460px;"></a>
                </div>
                    <div class="card-body float-left pt-0">
                        <div class="float-left">
                            <a href="view_movie_detail/{{$pro->id}}" style="text-decoration:none;"><h3>{{$pro->name}}</h3></a>
                            <p><b>Director Name:</b>{{$pro->director}}</p>
                        </div>
                        <div class="float-right mt-3">
                            <a href="book/{{$pro->id}}" class="btn btn-success"><i class="fa fa-ticket" style="font-size:48px"></i></a>
                        </div>
                    </div>

            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
