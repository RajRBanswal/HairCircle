<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Hair Transplant</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
<!-- <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&family=Open+Sans+Condensed:wght@300&family=Roboto&display=swap" rel="stylesheet">
 <!-- <link href="css/login.css" rel="stylesheet"> -->
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

@include('mainnav')

<div class="container">
      <br/>
       <center><h5 class="modal-title" id="exampleModalLongTitle" style="font-weight: bold;color: white;">CUSTOMER REGISTRATION</h5></center> 
      <br/>        
    
      <div class="modal-body bg-light" style="border-radius:10px; " >
	  <form method="post" action="{{ url('/register') }}" class="basicform" enctype="multipart/form-data">
     @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Name</label><span class="required" style="color: red;">*</span>
      <input type="text" class="form-control" id="inputEmail4" name="name" placeholder="Enter Your Name">
    </div>
    <div class="form-group col-md-4">
      <label for="dob">Date Of Birth</label><span class="required" style="color: red;">*</span>
      <input type="date" class="form-control"  placeholder="Enter Date Of Birth" name="dob" id="dob">
    </div>
    <div class="form-group col-md-2">
      <label for="age">Total Age</label>
      <input type="text" class="form-control" name="age" id="age">
    </div>
  </div>


  <div class="form-row">
    <div class="form-group col-md-6">
    <div>
      <label for="gender">Sex</label><span class="required" style="color: red;">*</span>
    </div>
    <div class="form-control"> 
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

  <div class="form-group col-md-6">
  <div>
  <label for="gender">Marital Status</label><span class="required" style="color: red;">*</span>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="unmarried" name="marital_status" class="custom-control-input" value="Unmarried">
  <label class="custom-control-label" for="unmarried">Unmarried</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="married" name="marital_status" class="custom-control-input" value="Married">
  <label class="custom-control-label" for="married">Married</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="Divorced" name="marital_status" class="custom-control-input" value="Divorced">
  <label class="custom-control-label" for="Divorced">Divorced</label>
</div>
  </div>

  </div>
 
   <div  class="form-row" id="otherAnswer" style="display:none;">
   <div class="form-group col-md-6">
    <label for="exampleFormControlSelect1">Children</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Yes</option>
      <option>No</option>
      <!-- <option>3</option>
      <option>4</option>
      <option>5</option> -->
    </select>
  </div>

  <div class="form-group col-md-6" >
  <label for="Date of Anniversary">Date of Anniversary</label>
  <input type="date" class="form-control" palceholder="Date Of Anniversary"/>
  </div>
  </div>

  <div class="form-group " id="divorcedans" style="display:none;">
  <label for="children">Children</label>
    <select class="form-control" id="children">
      <option>Yes</option>
      <option>No</option>
      <!-- <option>3</option>
      <option>4</option>
      <option>5</option> -->
    </select>
  </div>
  <div class="form-row">
   
  <div class="form-group col-md-6">
    <label for="religion">Religion</label><span class="required" style="color: red;">*</span>
    <input type="text" class="form-control" id="religion" name="religion" placeholder="Religion">
  </div>

  <div class="form-group col-md-6">
    <label for="Medicine Preference">Medicine Preference</label><span class="required" style="color: red;">*</span>
	<input type="text" name="medi_pref" class="form-control">
  </div>
  </div>

  <div class="form-row">
	   
	   <div class="form-group col-md-6">
	   <label for="Profession">Profession</label><span class="required" style="color: red;">*</span>
      <input type="text" name="prof" class="form-control">
	   </div>
     <div class="form-group col-md-6">
  <label for="Reference">Reference :</label><span class="required" style="color: red;">*</span>
<div class="custom-control">
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="Friends" value="Friends" name="reference[]">
  <label class="form-check-label" for="Friends">Friends</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="Websites" value="Websites" name="reference[]">
  <label class="form-check-label" for="Websites">Websites</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="Advertisements" value="Advertisements" name="reference[]">
  <label class="form-check-label" for="Advertisements">Advertisements</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="Other" value="Other" name="reference[]">
  <label class="form-check-label" for="Other">Other</label>
</div>
</div>
  </div>

	   <!-- <div class="form-group col-md-6">
	   <label for="Purposeofvisit">Purpose of visit</label><span class="required" style="color: red;">*</span>
      <select id="Purposeofvisit" class="form-control" name="purpofvisit">
        <option selected>Choose...</option>
        <option value="Baldness">Baldness</option>
        <option value="Hair Thinning">Hair Thinning</option>
        <option value="Excessive Hair Growth">Excessive Hair Growth</option>
        <option value="Hair Transplant">Hair Transplant</option>
        <option value="Graying of hairs">Graying of hairs</option>
        <option value="Skin Problem">Skin Problem</option>
        <option value="Other">Other</option>
      </select>
	   </div> -->
	</div>



	

	<div class="form-row">
  
 
  <div class="form-group col-md-6">
  <label for="weight">Weight in Kg</label><span class="required" style="color: red;">*</span>
	<input type="number" class="form-control" placeholder="Weight in Kg" name="wik">
  </div>
  <div class="form-group col-md-6"><label for="height">Height in Cm</label><span class="required" style="color: red;">*</span>
	<input type="number" class="form-control" placeholder="Height in Cm" name="hic"></div>


<!--   <div class="form-group col-md-4">
  
  <label for="other">Other</label><span class="required" style="color: red;">*</span>
	<input type="text" class="form-control" placeholder="Other" name="other">
  </div> -->

  </div>
<div class="row">
  <div class="form-group col-md-6">
      <label for="inputCity">Postal Address</label><span class="required" style="color: red;">*</span>
      <textarea type="text" class="form-control" name="address"></textarea>
    </div>
       <!-- <label for="Contact Details"> Contact Details</label> -->
   
    <div class="form-group col-md-3">
      <label for="city">City</label><span class="required" style="color: red;">*</span>
      <input type="text" class="form-control" name="city" placeholder="City Name">
    </div>



    <div class="form-group col-md-3">
      <label for="inputZip">Pin code</label><span class="required" style="color: red;">*</span>
      <input type="text" class="form-control" name="pin" id="inputZip" placeholder="Pin code">
    </div>
</div>
  

 
  <div class="form-row">
       <!-- <label for="Contact Details"> Contact Details</label> -->
   
    <div class="form-group col-md-6">
      <label for="Mobile No">Mobile No</label><span class="required" style="color: red;">*</span>
      <input type="number" class="form-control" name="mobile_no" placeholder="Mobile No">
    </div>


    <div class="form-group col-md-6">
      <label for="email">Email</label><span class="required" style="color: red;">*</span>
      <input type="email" class="form-control" name="email" placeholder="Email Id">
    </div>
   
    
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="Password">Password</label><span class="required" style="color: red;">*</span>
      <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
 
</div>
  <div class="form-group mt-4">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" name="checkme">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>

 <div class="form-group col-md-12" >
  <center><button type="submit" style="width: 200px;" class="btn btn-outline-primary" ><strong>Submit</strong></button></center>
</div>
  
</form>
</div>
</div>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrapbundle.js"></script>
<script src="js/main.js"></script> -->

<script type="text/javascript">
   $(document).ready(function () {
            $("#dob").change(function () {
                var start_date = new Date($("#dob").val());
                var date = new Date();
                var end_date = new Date(start_date);
               end_date.setFullYear(date.getFullYear()-start_date.getFullYear());
                $("#age").val(end_date.getFullYear());
            });
        })
</script>

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
    <script type="text/javascript">
      const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#password');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
    </script>
</body>
   
</html>