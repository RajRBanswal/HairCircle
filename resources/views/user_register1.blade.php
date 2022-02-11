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
 <link href="{{asset('css/login.css')}}" rel="stylesheet">
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
@include('navbar')
<div class="container">
  <br>
       <center><h5 class="modal-title" style="font-weight: bold; color: white;" >USER REGISTRATION</h5></center> 
  <br>
<div class="modal-body bg-light" style="border-radius:10px;  " >
  <form method="post" action="{{ url('/create-user') }}" class="basicform" enctype="multipart/form-data">
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
          <input type="radio" id="customRadioInline1" name="sex" class="custom-control-input" value="Male">
          <label class="custom-control-label" for="customRadioInline1">Male</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
         <input type="radio" id="customRadioInline2" name="sex" class="custom-control-input" value="Female">
         <label class="custom-control-label" for="customRadioInline2">Female</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
         <input type="radio" id="customRadioInline3" name="sex" class="custom-control-input" value="Other">
          <label class="custom-control-label" for="customRadioInline3">Other</label>
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
    <div class="form-group col-md-6">
      <label for="reference">Reference By </label><span class="required" style="color: red;">*</span>
      @foreach($sponser_id as $sponser)
      <div class="row">
        <div class="form-group col-md-6">
          <input type="text" class="form-control" name="ref_name" value="{{$sponser->name}}" readonly>
        </div>
         <div class="form-group col-md-6">
          <input type="text" class="form-control" name="vens_id" value="{{$sponser->vens_id}}" hidden="">
        </div>
         <div class="form-group col-md-6">
          <input type="text" class="form-control" name="id" value="{{$sponser->id}}" hidden="">
        </div>
        <div class="form-group col-md-6">
         <input type="text" class="form-control" name="ref_id" value="{{$sponser->ref_id}}"  hidden="">
        </div>
          <div class="form-group col-md-6">
          <input type="text" class="form-control" name="ref_id1" value="{{$sponser->ref_id1}}" hidden="">
        </div>
        <div class="form-group col-md-6">
         <input type="text" class="form-control" name="ref_id2" value="{{$sponser->ref_id2}}" hidden="">
        </div>
          <div class="form-group col-md-6">
          <input type="text" class="form-control" name="ref_id3" value="{{$sponser->ref_id3}}" hidden="">
        </div>
        <div class="form-group col-md-6">
         <input type="text" class="form-control" name="ref_id4" value="{{$sponser->ref_id4}}" hidden="">
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <div class="form-row" style="margin-top:-50px;">
    <div class="form-group col-md-12">
      <label for=" Address"> Address</label><span class="required" style="color: red;">*</span>
      <textarea type="text" class="form-control" name="address" required></textarea>
    </div>
  </div>

  <div>
    <center><button type="submit" class="btn btn-info" style="width:200px;">Submit</button></center>
  </div>
 <br>

</form>
</div>
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