@extends('desing.sidebar')

@section('content')

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<link rel="stylesheet" href="./css/app.css">
<script src="{{ asset('/main/main.js') }}"></script>

<div>
    <h2>Details Of KYC
    </h2>
</div>

<hr>

<div>
    <div>
    
        @if(Session::has('msg'))
            @if(Session::get('msg') == 'Kyc updated successfully')
            <div class="alert alert-success">
                <ul>
                                                        
                        <li>{{ Session::get('msg') }}</li>
                                                        
                </ul>
            </div>
            @else
            <div class="alert alert-danger">
                <ul>
                                                        
                        <li>{{ Session::get('msg') }}</li>
                                                        
                </ul>
            </div>
            @endif
        @endif
    </div>
    @foreach($Bank as $info)
    <div class="row">
        <div class="col-md-6 h4">
            <div class="row">
                <B class="col">Bank Name </B>
                <p class="col">: </p><span class="col">{{ $info->bank }}</span>
            </div>
            <div class="row">
                <B class="col">Account Number </B>
                <p class="col">: </p><span class="col">{{ $info->account_no }}</span>
            </div>
            <div class="row">
                <B class="col">Account Type </B>
                <p class="col">: </p><span class="col">{{ $info->account_type }}</span>
            </div>
            <div class="row">
                <B class="col">Branch Name </B>
                <p class="col">: </p><span class="col">{{ $info->branch_name }}</span>
            </div>
            <div class="row">
                <B class="col">IFSC Code </B>
                <p class="col">: </p><span class="col">{{ $info->ifsc }}</span>
            </div>
            <div class="row">
                <B class="col">Document Id </B>
                <p class="col">: </p><span class="col">{{ $info->panno }}</span>
            </div>
            <form method="post" action="/kyc_info/{{ $info->id }}">
                @csrf
                <div class="row mt-5">
                    <div class="col">
                        <select name="opt_action" class="form-select form-select-lg" aria-label=".form-select-lg example" id="selectBox" onchange="changeFunc();">
                            <option selected>Select Action</option>
                            <option value="Allow" class="h3">Allow</option>
                            <option value="Deny" class="h3" id="show">Deny</option>
                            <option value="Pending" class="h3">Pending</option>
                        </select>
                        
                        <div class="mt-3">
                            <textarea class="form-control" placeholder="Deny comment here" name="text" style="font-size:15px; display: none" id="textboxes"></textarea>
                            
                            </div>
                    </div>
                        
                        
                        
                    <div class="col">
                        <button type="submit" class="btn btn-primary  w-75 py-2"
                            style="font-size: 13px;">Submit</button>
                    </div>
                </div>
            </form>
        </div>
      
    </div>
    
    
    <div class="row mt-5">
        <div class="col-md-6">
            <p class="h2">Document Image</p>
            <hr>
                <div class="">
                    <img src="{{asset('/storage/bank/' . $info->image) }}" class="img-fluid img-responsive mx-5" alt="" width="500px" height="300px" />
                </div>
            
        
        </div>
        <div class="col-md-6">
              
            <p class="h2">Pass Book Image</p>
            <hr>
                <div class="">
                <img src="{{asset('/storage/bank/passbook/' . $info->pass_book) }}" class="img-fluid img-responsive mx-5" alt="" width="500px" height="300px" />
            
        </div>
        </div>
        
    </div>
    
     <a href="/kyc" class="btn btn-danger" type="button">Back</a>
    @endforeach
</div>



<script>
function changeFunc() {
            var selectBox = document.getElementById("selectBox");
            var selectedValue = selectBox.options[selectBox.selectedIndex].value;
             if (selectedValue == "Deny") {
                $('#textboxes').show();
            } else {
                $('#textboxes').hide();
            }
        }

</script>

@endsection