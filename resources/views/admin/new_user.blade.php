@extends('admin.desing.sidebar')

@section('content')

<!-- link rel="stylesheet" href="{{asset('css/app.css')}}"> -->

<link rel="stylesheet" href="{{asset('public/css/style.css')}}">
<link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
<script src="main/main.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<div>
    <h2>New Member </h2>
</div>

<hr>


<div class="container">
    @if(Session::has('message'))
    <div class="alert alert-danger w-50">
        <ul>

            <li>{{ Session::get('message') }}</li>

        </ul>
    </div>
    @endif
    <div class="container">
        <form  action="{{url('/new_users')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h3 class="text-justify" ><strong>Personal Detail</strong></h3>
        <div class="form-group">
            <label>Sponser Id:</label>
            <!--<label>{{session()->get('id')}}</label>-->
            <input type="number" class="form-control " placeholder="Sponser Id" name="sponserid"  style="font-size: 15px;">
            <!-- <input type="text" class="form-control"  aria-describedby="emailHelp" name="sponserid" placeholder="Enter Sponser Id" required> -->
        </div>


        <div class="form-group">

            <label>Name*</label>
            <input type="text" class="form-control " placeholder="Enter Name" name="name" required  style="font-size: 15px;">
        </div>

        <div class="form-group ">
            <label>Mobile No.(Cannot be changed later)*</label>
            <input type="text" class="form-control" placeholder="Enter Number" name="mobile" required  style="font-size: 15px;">
        </div>

        <div class="form-group ">
            <label>Email Id</label>
            <input type="email" class="form-control " placeholder="Enter email id" name="email"   style="font-size: 15px;">
            <!--@if($errors->has('email'))-->
            <!--<div class="error alert alert-danger">{{$errors->first('email')}} </div>-->
            <!--@endif-->
        </div>

        <div class="form-group ">
            <label>Password*</label>
            <input type="password" class="form-control " placeholder="" name="password" required  style="font-size: 15px;">
            @if ($errors->has('password'))
            <div class="error alert alert-danger">{{ $errors->first('password') }} </div>
            @endif
        </div>

        <div class="form-group ">
            <label>Confirm Password</label>
            <input type="password" class="form-control " placeholder="" name="password1" required  style="font-size: 15px;">
            @if ($errors->has('password1'))
            <div class="error alert alert-danger ">{{ $errors->first('password1') }}</div>
            @endif
        </div>

         <div class="form-group">
            <label for="pimg">Upload image</label></br>
             <input type="file" id="pimg" name="pimg"  style="font-size: 15px;">
            </div>

        <div class="row mt-5">
            <div class="offset-3"></div>
            <div class="col-md-3"><button type="submit"
                    class="btn btn-primary allbtn btn-block text-white   " style="font-size: 15px;">Submit</button></div>
            <div class="col-md-3"><button type="submit"
                    class="btn btn-danger allbtn btn-block text-white " style="font-size: 15px;">Cancel</button></div>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </form>
    </div>

</div>
<style type="text/css">
    input{
        font-size: 15px;
        size: 15px;
    }
    label{
        font-size: 15px;
    }
</style>
@endsection







