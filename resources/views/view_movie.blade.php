@extends('layouts.master')
@section('title',"Insert")
@section('page_content')
    
@if($affected->count() > 0)
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
  
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">

                    <!-- /.box -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">VIEW MOVIES</h3>
                        </div>
                        @if(count($errors) >0)
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif


                        @if (session()->has('message'))
                            <p class="alert-default-success">{{session('message')}}</p>
                        @endif


                        <center><h1>Records</h1></center><br>
                            <div class='container-fluid'>
                                <table class='table table-bordered' style='margin-left: auto;margin-right: auto;width: 90%;'>
                                    <thead class='table-Primary'>
                                    <tr>
                                        <th scope='col'>Id</th>
                                        <th scope='col'>name</th>
                                        <th scope='col'>Image</th>
                                        <th scope='col'>Descrition</th>
                                        <th scope='col'>director</th>
                                        <th scope='col'>rate</th>
                                        <th scope='col'>Insert Screens</th>
                                        <th scope='col'>Insert Cast</th>
                                    </tr>
                                    </thead>

                                    @foreach ($affected as $pro)
                                        <tr>
                                            <td class="id">{{$pro->id}}</td>
                                            <td>{{$pro->name}}</td>
                                            <td><img src="img/{{$pro->image}}" width="100px" height="150px"></td>
                                            <td>{{$pro->description}}</td>
                                            <td>{{$pro->director}}</td>
                                            <td>{{$pro->rate}}</td>
                                            <td>
                                            <a href="{{route('theatre.create',['id' => $pro->id])}}" class="btn btn-success" style="text-decoration:none;">ADD THEATRE</a>
                                            </td>
                                            <td>
                                                <a href="{{route('actor.create',['id' => $pro->id])}}" class="btn btn-success" style="text-decoration:none;">ADD ACTOR</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>


    </div>


</div>
<!-- /.col-->
</div>
<!-- ./row -->
</section> 
<!-- /.content -->
</div>


@else
                                   
    <center><h4 class="mt-5"><b>Oops!</b>, no movie found.</h4><center>
                                               
@endif 
@endsection