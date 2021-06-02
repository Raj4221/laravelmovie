@extends('layouts.home')
@section('content')

@if($movie->count() > 0)
<div class="container">

<div class="row">
    @foreach ($movie as $pro)

        <div class="col-4 mt-4">
            <div class="card profile-card-5">
                <div class="card-img-block">
                    <a href="view_movie_detail/{{$pro->id}}" style="text-decoration:none;"><img class="card-img-top" src="img/{{$pro->image}}" alt="Card image cap" style="height:460px;"></a>
                </div>
                    <div class="card-body row pt-0">
                        <div class="float-left col-8">
                            <a href="view_movie_detail/{{$pro->id}}" style="text-decoration:none;"><h3>{{$pro->name}}</h3></a>
                            <p><b>Director Name:</b>{{$pro->director}}</p>
                        </div>
                        <div class="col-4">
                            <a href="book/{{$pro->id}}" class="btn btn-success float-right"><i class="fa fa-ticket" style="font-size:48px"></i></a>
                        </div>
                    </div>

            </div>
        </div>
    @endforeach
    </div>
 
</div>
   @else
        <section>                           
            <center><h4 class="mt-5"><b>Oops!</b>, no movie found.</h4><center>
        </section>                                       
    @endif   
@endsection
