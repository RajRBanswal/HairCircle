@extends('admin.desing.sidebar')

@section('content')
@php
    $i=0;
@endphp
@foreach($Bank as $k)
@php
    $i++;
@endphp
@endforeach
<script src="{{ asset('/main/main.js') }}"></script>
<div>
    <h2>Account KYC</h2>
    <button type="button" class="btn btn-primary btn-lg">
        Notifications <span class="badge bg-danger text-white">@php echo $i; @endphp</span>
    </button>
    <hr>
</div>

<!-- <div>
    <form class="form" method="post" action="#">
        <label for="" class="control-label h3">From :</label>
        <input type="date" class="form-control form-control-lg w-50" id="" aria-describedby="">

        <label for="" class="control-label h3">To :</label>
        <input type="date" class="form-control form-control-lg w-50" id="" aria-describedby="">

    </form>


</div> -->


<table class="table table-hover mt-5" style="font-size: 15px;">
    <thead>
        <tr>
            <th scope="col">Profile Photo</th>
            <th scope="col">User ID</th>
            
            <th scope="col">PAN Number</th>
            <th scope="col">Account No</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
    @foreach($Bank as $kyc)
        <tr>
            <th><img src="/img/avatar.jpeg" class="rounded-circle" style="border: 2px solid black;" alt="Cinque Terre"
                    width="40" height="40"></th>
            <td>
                <!-- User Name -->
                <div></div>
                <div><small>Id : {{ $kyc->id }}</small></div>
            </td>
        
            <td>
                <div>{{ $kyc->panno }}</div>
            <!-- <button class="btn btn-primary btn-lg" name="open">Open</button> -->
            </td>
            <td>{{ $kyc->account_no }}</td>
            <td class="">
                <!-- <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Select Action</option>
                    <option value="Allow" class="text-success">Allow</option>
                    <option value="deny" class="text-danger">Deny</option>
                    <option value="Pending" class="text-info">Pending</option>
                </select>
                <div>
                    <button type="button" class="btn btn-primary  w-50">Action</button>
                </div> -->
                <a href="/kyc/kyc_info/{{ $kyc->id }}" type="button" class="btn btn-primary  w-50">Open</a>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>
</div>













































<!-- <div class="h5">
<form class="form-group">
<div class="mb-3">
      <label for="Select" class="form-label">Select You Are Bank</label>
      <select id="Select" class="form-select form-control form-control-lg">
        <option>Select Bank</option>
        <option>D</option>
        <option>D</option>
        <option>D</option>
        <option>D</option>  
      </select>
    </div>

    <div class="mb-3"> 
    <label fo="" class="form-label">Account Number</label>
    <input type="number" class="form-control form-control-lg" id="" aria-describedby="">
    
  </div>

  <div class="mb-3">
      <label for="Select" class="form-label">Account Type</label>
      <select id="Select" class="form-select form-control form-control-lg">
        <option>Select Type</option>
        <option>Saving</option>
        <option>Current</option>

      </select>
    </div>

  <div class="mb-3"> 
    <label fo="" class="form-label">Branch Name</label>
    <input type="text" class="form-control form-control-lg" id="" aria-describedby="">
    
  </div>

  <div class="mb-3"> 
    <label fo="" class="form-label">IFSC Code</label>
    <input type="text" class="form-control form-control-lg" id="" aria-describedby="">
    
  </div>
  <div class="mb-3">
      <label for="Select" class="form-label">Id Prof</label>
      <select id="mySelect" class="form-select form-control form-control-lg" onchange="myid();">
        <option>Select Id</option> 
        <option value="PAN">PAN No</option>
        <option value="Addhar">Addhar No</option>
        <option value="Voting">Voting No</option>


      </select>
    </div>

    <div class="mb-3"> 
    <label fo="" class="form-label">Id Number</label>
    <input type="text" class="form-control form-control-lg" id="" aria-describedby="">
    
  </div>
  <div class="mb-3">
  <label for="formFile" class="form-label" id="idname"> </label>
  <input class="form-control form-control-lg" type="file" id="formFile">
</div>

  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
</form>
</div> -->
@endsection