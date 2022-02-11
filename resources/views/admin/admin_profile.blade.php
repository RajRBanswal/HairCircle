@extends('admin.desing.sidebar')

@section('content')

<link rel="stylesheet" href="./css/app.css">
<script src="{{ asset('/main/main.js') }}"></script>

<div>
    <h2>All Members</spam>
    </h2>
</div>
<hr>
<div>
    <form class="" method="GET" action="{{ url('/profile') }}">
        @csrf

        <div class="row">
            <div class="col-10">

                <input class="form-control" style="font-size: 15px" type="search" name="search"
                    placeholder="Search........" aria-label="Search">
            </div>
            <div class="col-2">
                <button class="btn btn-primary btn-lg w-50" type="submit" name="search">Search</button>
            </div>

        </div>

    </form>
</div>

@endsection