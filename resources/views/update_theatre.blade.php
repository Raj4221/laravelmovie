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
                            <h3 class="card-title">UPDATE THEATRE</h3>
                        </div>
                        @if(count($errors) >0)
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif


                        @if (session()->has('message'))
                            <p class="alert-default-success">{{session('message')}}</p>
                        @endif

                                            @foreach($affected as $theatre)
                                            <form method="post" action="/update_theatre/{{$theatre->t_id}}">
                                            @csrf
                                            <div class="form-group">
                                            <label for="d_branch">Theatre_id</label>
                                            <input type="text" class="form-control form-control-sm" name="t_id" value="{{$theatre->t_id}}" readonly>
                                            </div>
                                            <div class="form-group">
                                            <label for="d_branch">name</label>
                                            <input type="text" class="form-control form-control-sm" name="name" value="{{$theatre->t_name}}" placeholder="Enter Name">
                                            </div>
                                            <div class="form-group">
                                            <label for="d_branch">city</label>
                                            <input type="text" class="form-control form-control-sm" name="city" value="{{$theatre->t_city}}" placeholder="Enter city">
                                            </div>
                                            <div class="form-group">
                                            <label for="d_branch">rate</label>
                                            <input type="text" class="form-control form-control-sm" name="rate" value="{{$theatre->rate}}" placeholder="Enter rate">
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