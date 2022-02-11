<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>EVERGOAL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">
     
      
    <style>
        .btn-circle{
            border-radius: 60px;
        }
    </style>
</head>

<body>
@include('navbar')
<!-- Main Content -->
<div class="mb-5">
    <form action="{{url('/withdraw_amount')}}" method="post">
    @csrf
    <div class="container"> <!--  Container -->
      <div class="row">
              <div class="offset-2"></div>
              <div class="col-md-8">
                  <center>	<img  src="{{asset('/img/Evergoal Circle Logo.png')}}"   alt="" style="height: 6rem;"></center>
                    <h1 class="text-center cname"><span style="color:#00284d;">Welcome to </span></h1><img  src="{{asset('/img/logo123.png')}}" class="img-fluid">

              </div>
          </div>
          <hr>
        <div class="row  "> <!--  Container -->
        
        <div class="offset-3"></div>
            <div class="col-lg-6"> <!--  col -->
            <h6 class="text-danger text-center">To withdrawl grant amount you required minimum ₹ 500/-</h6>
                <div class="card mt-2 border_color card_border" style=""><!--  card -->
					<div class="card-header bg_red card_header">
						<h5 class="card-title text-center text-white">Withdraw Funds</h5>
					</div>
                    <div class="card-body"> <!--  card body -->
                        
                        @if (Session::has('success')) 
                               <div class="text-success mb-2">* <h4>{{Session::get('success')}}</h4> </div>
                        @endif
                        <h6 class="card-subtitle mb-2 text-muted">How much would you like to withdraw?</h6>
                        <div class="input-group mb-3"> <!--  input-group -->
                            <div class="input-group-prepend">
                                <span class="input-group-text">₹</span>
                            </div>
                            <input type="number" name="amount" class="form-control" aria-label="Amount (to the nearest dollar)">
                           
                        </div>    <!--  input-group -->
                        @if ($errors->has('amount')) 
                               <div class="text-danger mb-2">* {{$errors->first('amount')}} </div>
                        @endif
                        @if (Session::has('user_count')) 
                               <div class="text-danger mb-2">* {{Session::get('user_count')}} </div>
                        @endif
                        @if (Session::has('total_amount')) 
                               <div class="text-danger mb-2">* {{Session::get('total_amount')}} </div>
                        @endif
                        @if (Session::has('amount_error')) 
                               <div class="text-danger mb-2">* {{Session::get('amount_error')}} </div>
                        @endif
                        <ul class="list-group list-group-flush"> <!--  list group -->
                            <!--<li class="list-group-item"> -->
                           
                              <div class="card">
                                    <div class="card-body">
                                         <div class="row">  <!--  row -->
                             @foreach ($last_user_with_amt as $user_amt)
                             
                                @if ($user_amt->paid_status=="unpaid")
                                    <div class="col-9">
                                       Last Request for Withdraw Amount
                                    </div>
                                    <div class="col-3">
                                        ₹ {{$user_amt->request_amount}}
                                    </div>
                                @else
                                    <div class="col-9">
                                      Request For Withdraw  ₹ {{$user_amt->request_amount}} Successfully.
                                    </div>
                                
                                @endif
                            @endforeach 
                                    <div class="col-11 text-muted">
                                     <!--This is the  amount that you want to withdraw -->
                                    </div>
                                        
                                    </div>
                                </div>
                                </div><!--  row -->
                            <!--</li>-->

                                 <div class="card mt-2">
                                    <div class="card-body">
                                         <div class="row">  <!--  row -->
                             
                                    <div class="col-9">
                                        Available to withdraw
                                    </div>
                                    <div class="col-3">
                                        @if($amount)
                                        @if($amount->total_amount>=50 and $direct_user>=2)
                                         ₹ {{$amount->total_amount}}
                                        @else
                                         ₹ 0
                                        @endif
                                        @endif
                                    </div>
                                    <div class="col-11 text-muted">
                                     This is the total amount that you have to withdraw
                                    </div>
                                        
                                    </div>
                                </div>
                                </div>

                            <!--<li class="list-group-item"> -->
                            <div class="card mt-3">
                                <div class="card-body">
                                    
                                <div class="row">  <!--  row -->
                                    <div class="col-9">
                                       Total Amount
                                    </div>
                                    <div class="col-3">
                                         ₹  @if($amount) {{$amount->total_amount}}
                                         
                                         @else 0
                                         @endif
                                    </div>
                                    <div class="col-10 text-muted">
                                     This is the total amount in your wallet 
                                    </div>
                                </div><!--  row -->
                                </div>
                                </div>
                            <!--</li>-->
                        </ul>  <!--  list group -->
                    </div>  <!--  card body -->
                        <div class="row justify-content-center mb-4">
                            <div class="col-8 ">
                                <button type="submit" class="btn allbtn btn-lg mb-2 btn-block btn-circle ">Withdraw Request</button>
                            </div>
                        </div>
                </div> <!--  card -->
            </div><!--  col -->
        </div><!--  row -->
    </div> <!--  Container -->

    </form>
<!-- Close Main Content -->
</div>

    <div>
        
    </div>
    
@include('footer')




<!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>

</html>