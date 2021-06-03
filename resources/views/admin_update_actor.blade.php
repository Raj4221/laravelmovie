@extends('layouts.master')
@section('title',"Insert")
@section('page_content')

<div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">

                    <!-- /.box -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">UPDATE ACTOR</h3>
                        </div>
                        @if(count($errors) >0)
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif


                        @if (session()->has('message'))
                            <p class="alert-default-success">{{session('message')}}</p>
                        @endif

                                            @foreach($affected as $actor)
                                            <form method="post" action="/update_actor/{{$actor->a_id}}">
                                            @csrf
                                            <div class="form-group">
                                            <label for="d_branch">Actor_id</label>
                                            <input type="text" class="form-control form-control-sm" name="a_id" value="{{$actor->a_id}}" readonly>
                                            </div>
                                            <div class="form-group">
                                            <label for="d_branch">name</label>
                                            <input type="text" class="form-control form-control-sm" name="name" value="{{$actor->name}}" placeholder="Enter Name">
                                            </div>
                                            <div class="form-group">
                                            <label for="d_branch">Bio</label>
                                            <input type="text" class="form-control form-control-sm" name="bio" value="{{$actor->bio}}" placeholder="Enter bio">
                                            </div>
                                            <div class="form-group">
                                            <label for="d_branch">Birth Date</label>
                                            <input type="text" class="form-control form-control-sm" name="dob" value="{{$actor->dob}}" placeholder="Enter date">
                                            </div>

                                            <input type="submit" name="btnIns" value="Update Data">
                                            </form>
                                            @endforeach

                                            {{session('msg','')}}




                                            </div>


</div>
<!-- /.col-->
</div>
<!-- ./row -->
</section>
<!-- /.content -->
</div>
@endsection
