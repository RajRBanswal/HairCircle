@extends('desing.sidebar')

@section('content')

<link rel="stylesheet" href="./css/app.css">
<script src="{{ asset('/main/main.js') }}"></script>

<div>
    <h2>OTP Verification</h2>
    </h2>
</div>

<hr>

<div>
    <form method="post" class="form-group" action="/opt_verify/{{ $num }}">
    @csrf
        <label for="" class="control-label h3">Enter OTP :</label>
        <div class="row">
            <div class="col">
                <input type="hidden" name="send" value="{{ $num }}">
                <input type="number" name="otp" class="form-control w-100" id="number" placeholder="XXXX" required>
            </div>
            <div class="col">
                <button type="submit" name="btn" class="btn btn-info btn-lg p-2 px-3">Verify</button>
            </div>
            
            <h3>Your One Time Password Is : <spam class="text-primary">{{ $num }}</spam></h3>
            
    </form>
</div>
<a href="/change_password" class="btn btn-danger btn-lg" type="button">Back</a>
@endsection