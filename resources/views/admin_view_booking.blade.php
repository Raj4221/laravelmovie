@extends('layouts.master')
@section('title',"Insert")
@section('page_content')
@if($bookings->count() > 0)
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
                                        <th scope='col'>Theatre_id</th>
                                        <th scope='col'>Member_id</th>
                                        <th scope='col'>Seatno</th>
                                        <th scope='col'>Time</th>
                                        <th scope='col'>Total Person</th>
                                        <th scope='col'>Date</th>
                                    </tr>
                                    </thead>

                                    @foreach ($bookings as $booking)
                                        <tr>
                                            <td>{{$booking->t_id}}</td>
                                            <td>{{$booking->member_id}}</td>
                                            <td>{{$booking->seatno}}</td>
                                            <td>{{$booking->time}}</td>
                                            <td>{{$booking->totalperson}}</td>
                                            <td>{{$booking->date}}</td>
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

<center><h4 class="mt-5"><b>Oops!</b>, no bokking found.</h4><center>

@endif

@endsection
