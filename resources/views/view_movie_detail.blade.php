@extends('layouts.app')
@section('content')

<section class="inner-page">
        <div class="container">
        @foreach ($movies as $pro)
            <div class="card mb-3" style="width: 100%;">
                <div class="row">
                    <div class="col-4">
                         <img src="/img/{{$pro->image}}" class="card-img" alt="...">
                     </div>
                     <div class="col-8">
                        <div class="card-body">
                             <h2 class="card-title"><b>{{$pro->name}}</b></h3>
                             Description: <span class="card-text">{{$pro->description}}</span><br>
                             Diretor: <span class="card-text">{{$pro->director}}</span><br>
                             Time: <span class="card-text">2h 34m.</span><br>
                             Rate: <span class="card-text">{{$pro->rate}}/5</span><br>
                            </div>
                            <h3 class="ml-3">Cast</h3>

                                <div class="row">
                                @foreach ($cast as $pro)
                                    <div class="col-4">
                                    <a href="/viewactordetail/{{$pro->a_id}}"><img src="/img/avatar_2x.png" alt="Admin" class="rounded-circle mt-2" style="width: 150px ;height: 150px"></a>
                                    <h5 class="mt-3"><b>{{$pro->name}}</b></h5>
                                    Bio: <span id="title">{{$pro->bio}}</span><br>
                                    Birth Date: <span id="title">{{$pro->dob}}</span>
                                    </div>
                                @endforeach
                                </div>

                        </div>
                    </div>
                </div>

        @endforeach
        </div>
</section>
@endsection
