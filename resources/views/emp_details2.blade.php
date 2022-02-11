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
<body>
  <div>
@include('mainnav1')
</div>
    <div class="container">
        <br>
        <center><h5 class="modal-title" >EMPLOYEE DETAILS</h5></center> 
        <br>
        <form>
          @csrf
        
         <div class="modal-body bg-light">
          <div style="padding:30px; padding-left: 100px;">
           
            <div class="row">
        <div class="form-group">
          <label>Name : </label><label>{{$check->name}}</label>
        </div>
      </div>
      <div class="row">
        <div class="form-group">
          <label>Gender : </label><label>{{ $check->gender}}</label>
        </div>
      </div>
      <div class="row">
        <div class="form-group">
          <label>Mobile No. : </label><label>{{ $check->mobile_no}}</label>
        </div>
      </div>
      <div class="row">
        <div class="form-group">
          <label>Email : </label><label>{{ $check->email }}</label>
        </div>
      </div>
      <div class="row">
        <div class="form-group">
          <label>Address : </label><label>{{ $check->address }},{{$check->city }},{{ $check->pincode}}</label>
        </div>
      </div>
      <div class="row">
        <div class="form-group">
          <label>Sponsor Link : </label><br><a href="{{url('/sponsor_link',$check->id)}}" style="color:blue;">{{ $check->emps_id}}</a>
        </div>
        
      </div>
      
          </div>

    </div>
   
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