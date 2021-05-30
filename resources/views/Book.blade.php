@extends('layouts.app')
@section('content')

<div class="container mt-5">

     <center><h1>AVAILABLE THEATRES</h1></center><br>
            @if($affected->count() > 0)
                                <div class='container-fluid'>
                                    <table class='table table-bordered' style='margin-left: auto;margin-right: auto;width: 90%;'>
                                        <thead class='table-Primary'>
                                        <tr>
                                            <th scope='col'>name</th>
                                            <th scope='col'>city</th>
                                            <th scope='col'>rate</th>
                                            <th scope='col'>SELECT SEAT</th>
                                        </tr>
                                        </thead>
                                        
                                            @foreach ($affected as $theatre)
                                                <tr>
                                                    <td>{{$theatre->t_name}}</td>
                                                    <td>{{$theatre->t_city}}</td>
                                                    <td>{{$theatre->rate}}</td>
                                                    <td><a href="/seat/{{$theatre->t_id}}" class="btn btn-warning" style="text-decoration:none;">SELECT SEAT</a></td>
                                                </tr>
                                            @endforeach
                                                 
                                    </table>
                                </div>
            @else
                                   
                <center><h4 class="mt-5"><b>Oops!</b>, no theatre found.</h4><center>
                                               
            @endif    
</div>
@endsection