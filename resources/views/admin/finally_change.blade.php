@extends('desing.sidebar')

@section('content')

<link rel="stylesheet" href="./css/app.css">
<script src="{{ asset('/main/main.js') }}"></script>

<div>
    <h2>Change Password</h2>
    </h2>
</div>

<hr>

<div>
@if(Session::has('message'))
    <div class="alert alert-danger w-50">
        <ul>

            <li>{{ Session::get('message') }}</li>

        </ul>
    </div>
    @endif
    <form method="post" class="form-group" action="/password_update">
    @csrf
        
        <div class="row">
            <div class="col">
            <label for="" class="control-label h3">New Password :</label>
                <input type="password" name="new_pass" class="form-control w-100" id="password" placeholder="New Password" required>
            </div>
            
       
        
            <div class="col">
            <label for="" class="control-label h3">Confirm Password :</label>
                <input type="password" name="com_pass" class="form-control w-100" id="password" placeholder="Confirm Password" required>
            </div>
            <div class="col">
            
                <button type="submit" name="btn" class="mt-5 btn btn-info btn-lg p-2 px-3 w-25">Submit</button>
            </div>
            
            
            
    </form>
</div>
<a href="/change_password" class="btn btn-danger btn-lg" type="button">Back</a>
@endsection