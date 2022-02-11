@extends('desing.sidebar')

@section('content')

<div>
<p class="h3">Payments</p>
</div>
<hr>

@if(Session::get('msg'))
    <div class="alert alert-danger w-50">
        <ul>

            <li class="h4">{{ Session::get('msg') }}</li>

        </ul>
    </div>
    @endif

<div>
    <table class="table table-hover mt-5" style="font-size: 15px;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Mobile</th>
                <th scope="col">Request Amount</th>
                <th scope="col">Date & Time</th>
                <th scope="col">Action</th>



            </tr>
        </thead>
        <tbody>
        @php
        $i=1;
        @endphp
       @foreach($withdraw_requests as $pay)
            <tr>   
                <td scope="col">@php echo $i++  @endphp</td>

                <td>{{ $pay->user_name }}</td>
                <td>{{ $pay->mobile }}</td>
                <td>Rs.{{ $pay->request_amount }}/-</td>
                <td>{{ $pay->created_at }}</td>
                <td class="">
                <a href="/payment/open/{{ $pay->user_id}}" type="button" class="btn btn-primary w-25">Open</a>                
                <a href="/payment/allow/{{$pay->id}}" type="button" class="col btn btn-success w-25">Accept</a>
                <a href="/payment/rejected/{{$pay->id}}" type="button" class="col btn btn-danger w-25">Rejected</a>
                </td>
            </tr>

        @endforeach 

  

        
        </tbody>
    </table>
</div>










@endsection