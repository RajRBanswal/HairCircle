<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>EVERGOAL PROJECT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">

</head>

<body style="background-image:url('img/back1.png'); background-repeat: no-repeat;background-size:cover;">
<script type="text/javascript">

//     function load(){
//       location.reload();
//   }
    //   window.onload = load;
</script>

<div class="row">
        <div class="offset-2"></div>
        <div class="col-md-8">
        <div class="card mt-5 mb-5 registform border_color card_border">
					<div class="card-header bg_red card_header">
						<h5 class="card-title text-center text-white">Register From Here...</h5>
					</div>
                <div class="card-body">

                 <!-- onsubmit="validateCaptcha()" -->
                <form method="POST" action="{{url('/popup_payment')}}" enctype="multipart/form-data">
                @csrf
           
             <p class="text-justify"><strong>Personal Detail</strong></p>
              <div class="form-group">
                <label>Sponser Id:</label>
                 <input type="number" class="form-control card_border" placeholder="Enter Sponser Id" name="sponsorid" required>
             </div>
             
         
            <div class="form-group">
                
                <label>Name(As Per Bank Details)*</label>
                <input type="text" class="form-control card_border" placeholder="Enter Name" name="name" required>
                @if($errors->has('name'))
                    <div class="error alert alert-danger">{{$errors->first('name')}} </div>
                @endif
            </div>
           
            <div class="form-group ">
                <label>Mobile No.(Cannot be changed later)*</label>
                <input type="text" class="form-control card_border" placeholder="Enter Number" name="mobile" required> 
                @if($errors->has('mobile'))
                    <div class="error alert alert-danger">{{$errors->first('mobile')}} </div>
                @endif
            </div>

            <div class="form-group ">
               <label>Email Id</label>
                <input type="email" class="form-control card_border" placeholder="Enter email id" name="email" > 
                <!--@if($errors->has('email'))-->
                <!--    <div class="error alert alert-danger">{{$errors->first('email')}} </div>-->
                <!--@endif-->
            </div> 

            <div class="form-group ">
               <label>Password</label>
                <input type="password" class="form-control card_border" placeholder="Password" name="password" required> 
                @if ($errors->has('password')) 
                     <div class="error alert alert-danger">{{ $errors->first('password') }} </div>
                @endif
            </div> 

            <div class="form-group ">
               <label>Confirm Password</label>
                <input type="password" class="form-control card_border" placeholder="Confirm Password" name="password1" required> 
                @if ($errors->has('password1')) 
                     <div class="error alert alert-danger ">{{ $errors->first('password1') }}</div>
                @endif
            </div> 
             
            <p class="text-justify pt-3"><strong>Note:</strong> Please enter mobile number and name carefully. Name and Mobile
             number can not be changed later. For name & mobile number digits correction 
            charges may apply which will be recovered through member's wallet. you do not have to pay in company</p>
           
            <div class="form-group">
            <label for="pimg">Upload image</label></br>
             <input type="file" id="pimg" name="pimg">
            </div>



            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">I Agree With <a href="{{url('/terms')}}">Terms & Conditions</a> & <a href="#">Privacy Policy</a></label>
            </div>
             
    <!--<div id="captcha">
 <button class="btn mt-2 mb-2" id="captcha"></button>
    </div>
   <input type="text" class="form-control" name="captcha" placeholder="Captcha" id="cpatchaTextBox"/> -->
         <div class="row mt-5">
             <div class="offset-3"></div>
             <div class="col-md-3"><button type="submit" class="btn allbtn btn-block text-white card_border mt-1" >Submit</button></div>
             <div class="col-md-3"><button type="submit" class="btn allbtn btn-block text-white card_border mt-1">Cancel</button></div>
         </div> 

                @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                @endif

                @if(Session::has('message'))
                        <div class="alert alert-danger">
                            <ul>
                                
                                    <li>{{ Session::get('message') }}</li>
                                
                            </ul>
                        </div>
                @endif


        </form>
        
                </div>
                </div>

        </div>

    </div>

<!-- Close Main Content -->


<!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>

</html>