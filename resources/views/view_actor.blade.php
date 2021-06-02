@extends('layouts.master')
@section('title',"Insert")
@section('page_content')
@if($actor->count() > 0)
<div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">

                    <!-- /.box -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">VIEW ACTORS</h3>
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
                                            <th scope='col'>bio</th>
                                            <th scope='col'>date of birth</th>
                                            <th>Upadte</th>
                                            <th scope='col'>remove</th>
                                        </tr>
                                        </thead>

                                        @foreach ($actor as $act)
                                            <tr>
                                                <td>{{$act->movie_id}}</td>
                                                <td>{{$act->name}}</td>
                                                <td>{{$act->bio}}</td>
                                                <td>{{$act->dob}}</td>
                                                <td><a href="#" style="text-decoration:none;">UPDATE</a></td>
                                                <td><a href="/actor_delete/{{$act->a_id}}" style="text-decoration:none;" onclick="delete()">DELETE</a></td>
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

    <center><h4 class="mt-5"><b>Oops!</b>, no actor found.</h4><center>

@endif
@endsection

