@extends('admin.desing.sidebar')

@section('content')

<link rel="stylesheet" href="./css/app.css">
<script src="{{ asset('/main/main.js') }}"></script>

<div>
    <h2>Change Password
    </h2>
</div>

<hr>


<div>
@if(Session::has('message'))

    @if( Session::get('message')  == 'Password changed successfully')
    
        <div class="alert alert-success w-50">
        <ul>

            <li>{{ Session::get('message') }}</li>

        </ul>
    </div>
    @else
    
    <div class="alert alert-danger w-50">
        <ul>

            <li>{{ Session::get('message') }}</li>

        </ul>
    </div>
    
    @endif
@endif
    <form method="post" class="form-group" action="{{url('/change_password')}}">
    @csrf
        <label for="" class="control-label h3">Mobile :</label>
        <div class="row">
            <div class="col">
                <input type="text" name="number" class="form-control w-75" placeholder="Mobile" required>
                <small>Only Mobile Are Required</small>

            </div>
            <div class="col">
                <button type="submit" name="btn" class="btn btn-info btn-lg p-2 px-3">Submit</button>
            </div>
    </form>
</div>
<a href="/change_password" class="btn btn-danger btn-lg" type="button">Back</a>
@endsection