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
                            <h3 class="card-title">INSERT ACTOR</h3>
                        </div>
                        @if(count($errors) >0)
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif


                        @if (session()->has('message'))
                            <p class="alert-default-success">{{session('message')}}</p>
                        @endif

                                <form method="post" enctype="multipart/form-data" action="{{route('actor.store')}}">
                                        @csrf
                                        <div class="card-body">
                                        <div class="form-group">
                                            <label for="d_branch">Movie_id</label>
                                            <input type="text" class="form-control form-control-sm" name="m_id" value="<?php echo $_REQUEST['id'];?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="d_branch">name</label>
                                            <input type="text" class="form-control form-control-sm" name="name" placeholder="Enter Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="d_branch">Bio</label>
                                            <input type="text" class="form-control form-control-sm" name="bio" placeholder="Enter Bio">
                                        </div>
                                        <div class="form-group">
                                            <label for="d_branch">DOB</label>
                                            <input type="date" class="form-control form-control-sm" name="dob" placeholder="Enter Date Of Birth">
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
