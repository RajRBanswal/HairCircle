@extends('desing.sidebar')

@section('content')

<div>
<p class="h3">Payments </p>
</div>
<hr>

@if(Session::get('msg') == 'Payment Confirm  successfully')
    <div class="alert alert-success w-50">
        <ul>

            <li class="h4">{{ Session::get('msg') }}</li>

        </ul>
    </div>
    
    @else
    <div class="alert alert-danger w-50">
        <ul>

            <li class="h4">{{ Session::get('msg') }}</li>

        </ul>
    </div>
    
    @endif
    
<div>
    
    <form action="/payment_allow/allow/{{ $payment->id }}" method="post" class="form-group">
        @csrf
        <lable class="h3">Enter Reference Id : </lable>
        <input type="text" name="rfid" class="form-control w-50" required>
        <a href="/payment" type="button" class="btn-lg btn btn-danger" name="">Back</a>
        <button type="submit" class="btn-lg btn btn-primary m-3" name="" >Confirm </button>
        
    </form>
    
</div>
  








@endsection