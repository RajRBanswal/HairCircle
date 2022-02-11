<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Hair Transplant</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
<!-- <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&family=Open+Sans+Condensed:wght@300&family=Roboto&display=swap" rel="stylesheet">
 <link href="css/login.css" rel="stylesheet">
 <style>
  label{
  font-family: Open-sans,'sans-serif';
  font-size:18px;
  /* color:#201755; */
  }
  .modal-title{
  font-family: 'Roboto', sans-serif;
  }
 </style>
</head>
<body  style="background: linear-gradient(to  right bottom, blue, pink);">
  <div>
@include('mainnav')
</div>

        <div class="container">
          <br>
       <center><h5 class="modal-title" style="font-weight: bold; color: white;" >VENDOR REGISTRATION</h5></center> 
        <br>
           <div class="modal-body bg-light" style="border-radius:10px;  " >
<form method="post" action="{{ url('/v_register') }}" class="basicform" enctype="multipart/form-data">
     @csrf
        
        
     
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Name</label><span class="required" style="color: red;">*</span>
      <input type="text" class="form-control" id="inputEmail4" name="name" placeholder="Enter Your Name" required="enter name">
    </div>
    <div class="form-group col-md-6">
  <div>
  <label for="gender">Gender</label><span class="required" style="color: red;">*</span>
  </div>
  <div class="form-group"> 
  <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" name="gender" class="custom-control-input" value="Male">
  <label class="custom-control-label" for="customRadioInline1">Male</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline2" name="gender" class="custom-control-input" value="Female">
  <label class="custom-control-label" for="customRadioInline2">Female</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline3" name="gender" class="custom-control-input" value="Other">
  <label class="custom-control-label" for="customRadioInline3">Other</label>
</div>
</div>
  </div>
  </div>
    
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Shop Name">Shop Name</label><span class="required" style="color: red;">*</span>
      <input type="text" class="form-control" name="shop_name" placeholder="Shop Name" required>
    </div>

    <div class="form-group col-md-6">
      <label for="Shop License">Shop License</label><span class="required" style="color: red;">*</span>
      <input type="text" class="form-control" name="s_license" placeholder="Shop Name" required>
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Shop Address">Shop Address</label><span class="required" style="color: red;">*</span>
      <textarea type="text" class="form-control" name="address" required></textarea>
    </div>
   <div class="form-group col-md-6"> 
   <div class="form-row">
      <div class="form-group col-md-6">
      <label for="city" >City</label><span class="required" style="color: red;">*</span>
      <input type="text" class="form-control" name="city" placeholder="City Name" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Pin code</label>
      <input type="text" class="form-control" name="pin" id="inputZip" placeholder="Pin code">
    </div>
   </div>  
    </div>
  </div>
   <div class="form-row">
      <div class="form-group col-md-6">
      <label for="Mobile No">Mobile No</label><span class="required" style="color: red;">*</span>
      <input type="number" class="form-control" name="mobile_no" placeholder="Mobile No" required>
    </div>
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Email Id" required>
    </div>
  </div>
   <div class="form-row">
      <div class="form-group col-md-6">
      <label for="Password">Password</label><span class="required" style="color: red;">*</span>
      <input type="password" class="form-control" name="password"  placeholder="Password" required>
    </div>
    <div class="form-group col-md-6"><span class="required" style="color: red;">*</span>
      <label for="C_Password">Confirm Password</label>
      <input type="password" class="form-control" name="c_password" placeholder="Confirm Password" required>
    </div>
  </div>

 
 <div>
   <center><button type="submit" class="btn-primary" >Submit</button></center>
 </div>
 <br>
  

  

    </form>
        </div>

</body>

<script src="js/jquery.js"></script>
<script src="js/bootstrapbundle.js"></script>
<script src="js/main.js"></script>


  <script>
        $(document).ready(function() {
            $("input[type='radio']").change(function() {
                if ($(this).val() == "married") {
                    $("#otherAnswer").show();
                } else {
                    $("#otherAnswer").hide();
                }

        if ($(this).val() == "Divorced") {
                    $("#divorcedans").show();
                } else {
                    $("#divorcedans").hide();
                }
            });
        });
    </script>
</html>