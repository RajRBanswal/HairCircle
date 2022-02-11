@extends('desing.sidebar')

@section('content')

<link rel="stylesheet" href="./css/app.css">
<script src="{{ asset('/main/main.js') }}"></script>

<div>
    <h2>Details Of Earnings</spam>
    </h2>
</div>

<hr>

<div class="mt-5">
    <div class="row">
        <div class="col-3">
            <div class="card bg-info p-2 text-center">
                <h2>Daily Earning</h2>
                <h2>Rs.100/-</h2>
            </div>


        </div>
        <div class="col-3">
            <div class="card bg-info p-2 text-center">
                <h2>Weekly Earning</h2>
                <h2>Rs.100/-</h2>
            </div>

        </div>
        <div class="col-3">
            <div class="card bg-info p-2 text-center">
                <h2>Monthly Earning</h2>
                <h2>Rs.100/-</h2>
            </div>

        </div>
        <div class="col-3">
            <div class="card bg-info p-2 text-center">
                <h2>Total Earning</h2>
                <h2>Rs.100/-</h2>
            </div>

        </div>
    </div>
</div>

<div class="mt-5">
    <div class="row">
        <div class="col-4">
            <label for="" class="control-label h2">From :</label>
            <input type="date" class="form-control" style="font-size: 15px">
        </div>
        <div class="col-4">
            <label for="" class="control-label h2">To :</label>
            <input type="date" class="form-control" style="font-size: 15px">
        </div>
        <div class="col-4">
            <label for="" class="control-label h2">Earning :</label>
            <input type="text" class="form-control" style="font-size: 15px" placeholder="0000/-">
        </div>
    </div>

</div>

@endsection