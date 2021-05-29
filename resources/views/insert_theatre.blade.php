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
                            <h3 class="card-title">INSERT THEATRE</h3>
                        </div>
                        @if(count($errors) >0)
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif


                        @if (session()->has('message'))
                            <p class="alert-default-success">{{session('message')}}</p>
                        @endif

                            <form method="post" enctype="multipart/form-data" action="{{route('theatre.store')}}">
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
                                    <label for="d_branch">city</label>
                                    <input type="text" class="form-control form-control-sm" name="city" placeholder="Enter city">
                                </div>
                                <div class="form-group">
                                    <label for="d_branch">rate</label>
                                    <input type="text" class="form-control form-control-sm" name="rate" placeholder="Enter rate">
                                </div>
                            

                                <input type="submit" name="btnIns" value="Insert Data">
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
