@extends('layouts.login')
@section('title',"Insert")
@section('page_content')

<form method="post" enctype="multipart/form-data" action="{{route('member.store')}}">
        @csrf
        <div class="form-group">
            <label for="d_branch">username</label>
            <input type="text" class="form-control form-control-sm" name="name" placeholder="Enter UserName">
        </div>
        <div class="form-group">
            <label for="d_branch">password</label>
            <input type="password" class="form-control form-control-sm" name="password" placeholder="Enter password">
        </div>
        <div class="form-group">
            <label for="d_branch">address</label>
            <input type="text" class="form-control form-control-sm" name="address" placeholder="Enter Address">
        </div>
        <div class="form-group">
            <label for="d_branch">city</label>
            <input type="text" class="form-control form-control-sm" name="city" placeholder="Enter City">
        </div>
        <div class="form-group">
            <label for="d_branch">DOB</label>
            <input type="date" class="form-control form-control-sm" name="dob" placeholder="Enter Date Of Birth">
        </div>
        <div class="form-group">
            <label for="d_branch">Contact Number</label>
            <input type="number" class="form-control form-control-sm" name="number" placeholder="Enter Contact Number">
        </div>

        <input type="submit" name="btnIns" value="Insert Data">
    </form>
    {{session('msg','')}}

@endsection
