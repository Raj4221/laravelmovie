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
                            <h3 class="card-title">INSERT MOVIE</h3>
                        </div>
                        @if(count($errors) >0)
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif


                        @if (session()->has('message'))
                            <p class="alert-default-success">{{session('message')}}</p>
                        @endif

                            <form method="post" enctype="multipart/form-data" action="{{route('movie.store')}}">
                                @csrf
                                <div class="card-body">
                                <div class="form-group">
                                    <label for="d_branch">Movie name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="d_branch">Description</label>
                                    <input type="text" class="form-control" name="desc" placeholder="Enter Description">
                                </div>
                                <div class="form-group">
                                    <label for="d_branch">Director</label>
                                    <input type="text" class="form-control" name="director" placeholder="Enter Directoe">
                                </div>
                                <div class="form-group">
                                    <label for="d_branch">rate</label>
                                    <input type="number" class="form-control" name="rate" placeholder="Enter Rate">
                                </div>
                                <div class="form-group">
                                    <label for="d_branch">image</label>
                                    <input type="file" class="form-control" name="image" placeholder="option 1">
                                </div>
                                

                                <input type="submit" name="btnIns" value="Insert Data" onclick="insert()">
                                </div>
                            </form>
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
