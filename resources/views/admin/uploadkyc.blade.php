<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Evergoal</title>
  
  </head>
  <body>
  @include('navbar')
    <div class="container">
          <div class="row">
              <div class="offset-2"></div>
              <div class="col-md-8">
                  <center>	<img  src="{{asset('/img/Evergoal Circle Logo.png')}}"   alt="" style="height: 6rem;"></center>
                    <h1 class="text-center cname"><span style="color:#00284d;">Welcome to </span></h1><img  src="{{asset('/img/logo123.png')}}" class="img-fluid">

              </div>
          </div>
          <hr>
    @if(!empty($result))
    
          @if($result->status == 'request')
          
                                 

          
         
            <div class="row justify-content-center ">
               <div class="card shadow-lg p-3 m-5 bg-body rounded" style="width: 18rem; border-redius:5px;">
                   <img src="img/cicon.png" class="img-fluid rounded mx-auto d-block" alt="Responsive image" width="100" height="100">
                  <div class="card-body">
                    <h4 class="card-title text-center">Congratulations</h4>
                   
                    <p class="card-text text-center">You have successfully completed the KYC process from your end. We will verify the details submitted and activate your account in 2-3 working days.</p>
                  </div>
                  
                  <div class="d-flex justify-content-center">
                      
                      <div class="spinner-border" role="status">
                        <span class="visually-hidden"></span>
                      </div>
                    </div>
                </div>
                </div>
                
               
          @elseif($result->status == 'Allow')
          
             <div class="row justify-content-center ">
                 <div class="col-md-10">
                 <h3>kyc Verification Approved</h3>
                 
                
                    
                <img src="img/kyc.png" class="img-fluid p-3">
                </div>
                      
          
          @elseif($result->status == 'Deny')
            
            <div class="row justify-content-center ">
                <div class="col-10">
               <div class="card shadow-lg p-3 m-5 bg-body rounded" style="width: 18rem; border-redius:5px;">
                   <img src="img/ricon.png" class="img-fluid rounded mx-auto d-block" alt="Responsive image" width="100" height="100">
                  <div class="card-body">
                    <h4 class="card-title text-center">KYC Request Rejected</h4>
                   
                    <p class="card-text text-center text-danger">   
                        kyc request has been rejected because of <strong>" {{$result->text}} "</strong> Please Try Again....</p>
                        
                        <img src="img/reject.jpg" class="img-fluid" alt="Responsive image" >
                  </div>
                  
                  <div class="d-flex justify-content-center">
                      
                      <div>
                        <a href="/kyc_again" class="btn btn-dark">Go To Kyc Form</a>
                      </div>
                    </div>
                </div>
                </div>
                </div>
                      
          @elseif($result->status == 'Pending')
          
                      <div class="row justify-content-center ">
               <div class="card shadow-lg p-3 m-5 bg-body rounded" style="width: 18rem; border-redius:5px;">
                  
                  <div class="card-body">
                    <h4 class="card-title text-center">KYC Pending</h4>
                   
                    <p class="card-text text-center">You Are KYC Request Has Been Pending........</p>
                  </div>
                  
                  <div class="d-flex justify-content-center">
                      
                      <div class="spinner-border" role="status">
                        <span class="visually-hidden"></span>
                      </div>
                    </div>
                </div>
                </div>
          
          @else
          
        <main class="my-form">
            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                            <div class="card mt-5 border_color card_border">
                                <div class="card-header bg_red card_header text-white">
                                                                    
                                  @foreach($user as $users)
                                  {{$users->name}}
                                  @endforeach
           
                                    ({{session()->get('id')}})<br> Update Your Bank and Pancard Details.</div>
                                <div class="card-body">
                                    

                                    <!--<form action="{{url('/')}}" method="POST" enctype="multipart/form-data">-->
                                        <form class="mt-2" action="{{url('/upload_kyc_details')}}" method="post" enctype='multipart/form-data'>
                                     @csrf
                                        <div class="form-group row">
                                            <label for="account_type" class="col-md-4 col-form-label text-md-right">Account type:</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    
                                                    <select name="account_type" class="form-control card_border" id="account_type">
                                                      <option selected>--CHOOSE ACCOUNT TYPE--</option>
                                                      <option value="current">Current </option>
                                                      <option value="saving">Saving</option>
                                                    
                                                    </select>

                                                        @if($errors->has('account_type'))
                                                            <div class="error alert alert-danger">{{$errors->first('account_type')}} </div>
                                                         @endif
                                                  </div>
                                            </div>
                                        </div>
        
                                        <div class="form-group row">
                                            <label for="account_no" class="col-md-4 col-form-label text-md-right">Account No:</label>
                                            <div class="col-md-6">
                                                <input type="text" id="account_no" class="form-control card_border" name="account_no" onclick="sort_bank()" >
                                                @if($errors->has('account_no'))
                                                            <div class="error alert alert-danger">{{$errors->first('account_no')}} </div>
                                                 @endif
                                            </div>
                                        </div>
        
                                        <div class="form-group row">
                                            <label for="bank" class="col-md-4 col-form-label text-md-right">Bank</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    
                                                    <select name="bank" class="form-control card_border" id="bank" ">
                                                      <option >--Choose Your Bank name--</option>
                                                      <option value="SBI">State Bank of India </option>
                                                      <option value="baroda">Bank of Baroda </option>
                                                      <option value="india">Bank of India </option>
                                                      <option value="maha">Bank of Maharashtra</option>
                                                      <option value="canara">Canara Bank</option>
                                                      <option value="india">Central Bank of India</option>
                                                      <option value="indian">Indian Bank</option>
                                                      <option value="overseas">Indian Overseas Bank</option>
                                                      <option value="sind">Punjab and Sind Bank</option>
                                                      <option value="uco">UCO Bank</option>
                                                      <option value="union">Union Bank of India </option>
                                                      <option value="allahabad">Allahabad Bank</option>
                                                      <option value="Andhra">Andhra Bank</option>
                                                        <option value="Axis">Axis Bank</option>
                                                        <option value="Icici">Icici Bank</option>
                                                        <option value="Kotak">Kotak mahindra Bank</option>
                                                        <option value="Syndicate">Syndicate Bank</option>
                                                        <option value="UCO">UCO Bank</option>
                                                        <option value="Vijaya">Vijaya Bank</option>
                                                        <option value="Yes">Yes Bank</option>
                                                        <option value="Idfc">Idfc Bank</option>
                                                        <option value="Hdfc">Hdfc Bank</option>
                                                        <option value="Oriental">Oriental Bank of commerce</option>
                                                        <option value="Maharashtr">Maharashtr gramin Bank</option>
                                                        <option value="IDBI">IDBI Bank</option>
                                                        <option value="Fino">Fino payments Bank</option>
                                                        <option value="Federal">Federal Bank</option>
                                                        <option value="United">United Bank of india</option>
                                                        <option value="Indian">Indian Bank</option>
                                                        <option value="Dena">Dena Bank</option>
                                                        <option value="Punjab">Punjab gramin Bank</option>
                                                        <option value="South">South Indian Bank</option>
                                                        <option value="Baroda">Baroda gujrat gramin Bank.</option>
                                                    
                                                    </select>
                                                  </div>
                                                  @if($errors->has('bank'))
                                                            <div class="error alert alert-danger">{{$errors->first('bank')}} </div>
                                                    @endif
                                            </div>
                                        </div>
        
                                        <div class="form-group row">
                                            <label for="branch_name" class="col-md-4 col-form-label text-md-right">Branch Name:</label>
                                            <div class="col-md-6">
                                                <input type="text" id="branch_name" name="branch_name" class="form-control card_border">
                                                @if($errors->has('branch_name'))
                                                            <div class="error alert alert-danger">{{$errors->first('branch_name')}} </div>
                                                 @endif
                                            </div>
                                        </div>
        
                                        <div class="form-group row">
                                            <label for="present_address" class="col-md-4 col-form-label text-md-right">IFSC CODE:</label>
                                            <div class="col-md-6">
                                                <input type="text" id="ifsc" name="ifsc" class="form-control card_border">
                                                @if($errors->has('ifsc'))
                                                            <div class="error alert alert-danger">{{$errors->first('ifsc')}} </div>
                                                 @endif
                                            </div>
                                        </div>
        
                                        <!--<div class="form-group row">-->
                                        <!--    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Is Pan:</label>-->
                                        <!--    <div class="col-md-6 mt-1">-->
                                        <!--        <div class="form-check form-check-inline">-->
                                        <!--            <input class="form-check-input card_border" type="radio" name="pan" id="inlineRadio1" value="Yes"  onclick="radioBtn()" >-->
                                        <!--            <label class="form-check-label" for="inlineRadio1">Yes</label>-->
                                        <!--          </div>-->
                                        <!--          <div class="form-check form-check-inline">-->
                                        <!--            <input class="form-check-input card_border" type="radio" name="pan" id="inlineRadio2" value="No" onclick="radioBtn1()">-->
                                        <!--            <label class="form-check-label" for="inlineRadio2">No</label>-->
                                        <!--          </div>-->

                                        <!--          @if($errors->has('pan'))-->
                                        <!--                    <div class="error alert alert-danger">{{$errors->first('pan')}} </div>-->
                                        <!--         @endif-->
                                        <!--    </div>-->
                                        <!--</div>-->
        
                                         <div   id="pannodiv" class="form-group row Yes box" >
                                            <label class="col-md-4 col-form-label text-md-right  ">PAN Card No:</label>
                                            <div class="col-md-6">
                                                <input type="text" id="panno" name="panno" class="form-control card_border">
                                                      @if($errors->has('panno'))
                                                            <div class="error alert alert-danger">{{$errors->first('panno')}} </div>
                                                 @endif
                                                
                                               </div>
                                                
                                            </div>
                            <!--add inpute Image option --------------------------------------------------------------------- @tilesh -->
                            
                                        <div class="form-group row" >
                                            <label class="col-md-4 col-form-label text-md-right  ">PAN Card Image :</label>
                                            <div class="col-md-6">
                                                    <input type="file" name="image" id="image" class="form-control" style="font-size: 15px;"
                                                    required>
                                                 
                                                
                                               </div>
                                                
                                            </div>

                                            <div class="form-group row" >
                                            <label class="col-md-4 col-form-label text-md-right  ">Bank Pass Book Image :</label>
                                            <div class="col-md-6">
                                                    <input type="file" name="passbook" id="passbook" class="form-control" style="font-size: 15px;"
                                                    required>
                                                 
                                                
                                               </div>
                                                
                                            </div>                                        
        
                                            <div class="col-md-4 offset-md-4">
                                                <button type="submit" class="btn text-white card_border allbtn btn-block">
                                               
                                               Submit
                                                </button>
                                            </div>

                                            @if(Session::has('message'))
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        
                                                            <li>{{ Session::get('message') }}</li>
                                                        
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>

                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        
        </main>
        
    @endif
    @else
    
                <main class="my-form">
            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                            <div class="card mt-5 border_color card_border">
                                <div class="card-header bg_red card_header text-white">
                                                                    
                                  @foreach($user as $users)
                                  {{$users->name}}
                                  @endforeach
           
                                    ({{session()->get('id')}})<br> Update Your Bank and Pancard Details.</div>
                                <div class="card-body">
                                    

                                    <!--<form action="{{url('/')}}" method="POST" enctype="multipart/form-data">-->
                                        <form class="mt-2" action="{{url('/upload_kyc_details')}}" method="post" enctype='multipart/form-data'>
                                     @csrf
                                        <div class="form-group row">
                                            <label for="account_type" class="col-md-4 col-form-label text-md-right">Account type:</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    
                                                    <select name="account_type" class="form-control card_border" id="account_type">
                                                      <option selected>--CHOOSE ACCOUNT TYPE--</option>
                                                      <option value="current">Current </option>
                                                      <option value="saving">Saving</option>
                                                    
                                                    </select>

                                                        @if($errors->has('account_type'))
                                                            <div class="error alert alert-danger">{{$errors->first('account_type')}} </div>
                                                         @endif
                                                  </div>
                                            </div>
                                        </div>
        
                                        <div class="form-group row">
                                            <label for="account_no" class="col-md-4 col-form-label text-md-right">Account No:</label>
                                            <div class="col-md-6">
                                                <input type="text" id="account_no" class="form-control card_border" name="account_no" onclick="sort_bank()" >
                                                @if($errors->has('account_no'))
                                                            <div class="error alert alert-danger">{{$errors->first('account_no')}} </div>
                                                 @endif
                                            </div>
                                        </div>
        
                                        <div class="form-group row">
                                            <label for="bank" class="col-md-4 col-form-label text-md-right">Bank</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    
                                                    <select name="bank" class="form-control card_border" id="bank" ">
                                                      <option >--Choose Your Bank name--</option>
                                                      <option value="SBI">State Bank of India </option>
                                                      <option value="baroda">Bank of Baroda </option>
                                                      <option value="india">Bank of India </option>
                                                      <option value="maha">Bank of Maharashtra</option>
                                                      <option value="canara">Canara Bank</option>
                                                      <option value="india">Central Bank of India</option>
                                                      <option value="indian">Indian Bank</option>
                                                      <option value="overseas">Indian Overseas Bank</option>
                                                      <option value="sind">Punjab and Sind Bank</option>
                                                      <option value="uco">UCO Bank</option>
                                                      <option value="union">Union Bank of India </option>
                                                      <option value="allahabad">Allahabad Bank</option>
                                                      <option value="Andhra">Andhra Bank</option>
                                                        <option value="Axis">Axis Bank</option>
                                                        <option value="Icici">Icici Bank</option>
                                                        <option value="Kotak">Kotak mahindra Bank</option>
                                                        <option value="Syndicate">Syndicate Bank</option>
                                                        <option value="UCO">UCO Bank</option>
                                                        <option value="Vijaya">Vijaya Bank</option>
                                                        <option value="Yes">Yes Bank</option>
                                                        <option value="Idfc">Idfc Bank</option>
                                                        <option value="Hdfc">Hdfc Bank</option>
                                                        <option value="Oriental">Oriental Bank of commerce</option>
                                                        <option value="Maharashtr">Maharashtr gramin Bank</option>
                                                        <option value="IDBI">IDBI Bank</option>
                                                        <option value="Fino">Fino payments Bank</option>
                                                        <option value="Federal">Federal Bank</option>
                                                        <option value="United">United Bank of india</option>
                                                        <option value="Indian">Indian Bank</option>
                                                        <option value="Dena">Dena Bank</option>
                                                        <option value="Punjab">Punjab gramin Bank</option>
                                                        <option value="South">South Indian Bank</option>
                                                        <option value="Baroda">Baroda gujrat gramin Bank.</option>
                                                    
                                                    </select>
                                                  </div>
                                                  @if($errors->has('bank'))
                                                            <div class="error alert alert-danger">{{$errors->first('bank')}} </div>
                                                    @endif
                                            </div>
                                        </div>
        
                                        <div class="form-group row">
                                            <label for="branch_name" class="col-md-4 col-form-label text-md-right">Branch Name:</label>
                                            <div class="col-md-6">
                                                <input type="text" id="branch_name" name="branch_name" class="form-control card_border">
                                                @if($errors->has('branch_name'))
                                                            <div class="error alert alert-danger">{{$errors->first('branch_name')}} </div>
                                                 @endif
                                            </div>
                                        </div>
        
                                        <div class="form-group row">
                                            <label for="present_address" class="col-md-4 col-form-label text-md-right">IFSC CODE:</label>
                                            <div class="col-md-6">
                                                <input type="text" id="ifsc" name="ifsc" class="form-control card_border">
                                                @if($errors->has('ifsc'))
                                                            <div class="error alert alert-danger">{{$errors->first('ifsc')}} </div>
                                                 @endif
                                            </div>
                                        </div>
        
                                        <!--<div class="form-group row">-->
                                        <!--    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Is Pan:</label>-->
                                        <!--    <div class="col-md-6 mt-1">-->
                                        <!--        <div class="form-check form-check-inline">-->
                                        <!--            <input class="form-check-input card_border" type="radio" name="pan" id="inlineRadio1" value="Yes"  onclick="radioBtn()" >-->
                                        <!--            <label class="form-check-label" for="inlineRadio1">Yes</label>-->
                                        <!--          </div>-->
                                        <!--          <div class="form-check form-check-inline">-->
                                        <!--            <input class="form-check-input card_border" type="radio" name="pan" id="inlineRadio2" value="No" onclick="radioBtn1()">-->
                                        <!--            <label class="form-check-label" for="inlineRadio2">No</label>-->
                                        <!--          </div>-->

                                        <!--          @if($errors->has('pan'))-->
                                        <!--                    <div class="error alert alert-danger">{{$errors->first('pan')}} </div>-->
                                        <!--         @endif-->
                                        <!--    </div>-->
                                        <!--</div>-->
        
                                         <div   id="pannodiv" class="form-group row Yes box" >
                                            <label class="col-md-4 col-form-label text-md-right  ">PAN Card No:</label>
                                            <div class="col-md-6">
                                                <input type="text" id="panno" name="panno" class="form-control card_border">
                                                      @if($errors->has('panno'))
                                                            <div class="error alert alert-danger">{{$errors->first('panno')}} </div>
                                                 @endif
                                                
                                               </div>
                                                
                                            </div>
                            <!--add inpute Image option --------------------------------------------------------------------- @tilesh -->
                            
                                        <div class="form-group row" >
                                            <label class="col-md-4 col-form-label text-md-right  ">PAN Card Image :</label>
                                            <div class="col-md-6">
                                                    <input type="file" name="image" id="image" class="form-control" style="font-size: 15px;"
                                                    required>
                                                 
                                                
                                               </div>
                                                
                                            </div>

                                            <div class="form-group row" >
                                            <label class="col-md-4 col-form-label text-md-right  ">Bank Pass Book Image :</label>
                                            <div class="col-md-6">
                                                    <input type="file" name="passbook" id="passbook" class="form-control" style="font-size: 15px;"
                                                    required>
                                                 
                                                
                                               </div>
                                                
                                            </div>                                        
        
                                            <div class="col-md-4 offset-md-4">
                                                <button type="submit" class="btn text-white card_border allbtn btn-block">
                                               
                                               Submit
                                                </button>
                                            </div>

                                            @if(Session::has('message'))
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        
                                                            <li>{{ Session::get('message') }}</li>
                                                        
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>

                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        
        </main>
    
    
    
    
    @endif
       @include('footer')

        </div>
    </div>


        










    <!-- Optional JavaScript; choose one of the two! -->
    
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
    

// $(document).ready(function() {
//     $("#pannodiv").hide();
// });
//     function radioBtn() {
//  $("#pannodiv").show();
// }
//     function radioBtn1() {
//  $("#pannodiv").hide();
// }

        
        $('#bank').on('change', function () {
             var options = $("#bank option");
             var selectVal = $("#bank option:selected").val();
             //alert(selectVal);
             options.detach().sort(function(a, b) {
                var at = $(a).text();
                var bt = $(b).text();
                return (at > bt) ? 1 : ((at < bt) ? -1 : 0);
            });
            options.appendTo("#bank");
            $('#bank').val(selectVal);
        });

        function sort_bank() {
            var options = $("#bank option");
             var selectVal = $("#bank option:selected").val();
             //alert(selectVal);
             options.detach().sort(function(a, b) {
                var at = $(a).text();
                var bt = $(b).text();
                return (at > bt) ? 1 : ((at < bt) ? -1 : 0);
            });
            options.appendTo("#bank");
            $('#bank').val(selectVal);
        }


</script>


    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>