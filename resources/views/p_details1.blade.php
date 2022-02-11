<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Hair Transplant</title>
<!-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel="stylesheet"> -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
<!-- <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&family=Open+Sans+Condensed:wght@300&family=Roboto&display=swap" rel="stylesheet">
 <!-- <link href="{{asset('css/login.css')}}" rel="stylesheet"> -->
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
@include('nav2')
<br><br>
    <div class="container" style="margin-top: 50px;">    
      <div class="row">
        <div class="form-group col-12">
          <!-- <center><h5 class="modal-title" >PATIENT DETAILS</h5></center> -->
          <center><h4 class="modal-title" style="padding-top: 30px;" >CUSTOMER DETAILS</h4></center>
        </div>
        
        <!-- <div class="form-group col-md-4">
          <center><a href="{{url('/pquestion1')}}" class="btn bg-primary" style="color: white; align-items: right; " type="submit">Goto Hair Analysis Q.</a></center>
        </div> -->
      </div>
       
       <!-- <div class="row ">
         <div class="col-lg-12 col-12"> -->
      
        <!-- <form> -->
          <!-- @csrf -->
            

         <div class="row" style="background: linear-gradient(to  right bottom, lightblue, pink); border-radius: 10px;" >
           <div class="col-lg-12 col-12" style="margin-top:30px">
           <table class="table table-borderless">
            <tbody>
            <tr>
              <td >Name</td> <td>{{$p_data->name}}</td>
              <td >Gender</td><td>{{ $p_data->gender}}</td>
            </tr>
            <tr>
              <td>Date Of Birth</td><td>{{$p_data->date_of_birth}}</td>
              <td>Marital Status</td><td>{{ $p_data->marital_status}}</td>
            </tr>
            <tr>
              <td>Religion</td> <td>{{$p_data->religion}}</td>
              <td>Medicin Preference</td><td>{{ $p_data->medicin_pref}}</td>
            </tr>
            <tr>
              <td>Profession</td><td>{{$p_data->profession}}</td>
              <td>Weight in Kg</td><td>{{ $p_data->weight_in_kg}}</td>
            </tr>
            <tr>
              <td>Height In Cm</td> <td>{{$p_data->height_in_cm}}</td>
              <td>Address</td><td>{{ $p_data->address }}, {{$p_data->city }}, {{ $p_data->pincode}}</td>
            </tr>
            <tr>
              <td>Mobile No.</td> <td>{{$p_data->mobile_no}}</td>
              <td>Email</td><td>{{ $p_data->email}}</td>
            </tr>
             <tr>
              <td>Sponsor Link</td><td class="form-groups">{{url('sponsor_link',$p_data->id.'/'.$p_data->patients_id)}}</td>           
            </tr>
            <tr>
              <td></td><td><a href="whatsapp://send?text={{url('sponsor_link',$p_data->id.'/'.$p_data->patients_id)}}" class="p-link" data-action="share/whatsapp/share" target="_blank"><i class="fab fa-whatsapp">Send via Whatsapp</i></a>  
              <a href="https://www.facebook.com/sharer/sharer.php?u={{url('sponsor_link',$p_data->id.'/'.$p_data->patients_id)}}" target="_blank" class="p-link"><i class="fab fa-facebook-f">Share on Facebook</i>  </a></td>
            </tr>
            <tr><td colspan="4"><center><button type="submit" class="btn bg-info form-group" style="color:white; width: 100px;">Edit</button></center></td></tr>
            </tbody>
           </table> 
          </div>
      
        <div class="form-group col-md-12">
        <center><h4 class="modal-title">FREE ANALYSIS QUESTIONS</h4></center> 
        </div> 
     
      
      <div class="col-lg-12 col-12">
       <table class="tabel table-striped table-bordered" style="padding:10px;">
        <thead class="thead-dark">
          <tr>
            
            <th class="col-md-8">Questions</th>
            <th class="col-md-4">Answers</th>
          </tr>
        </thead>
        <tbody>
          @foreach($freeques as $freeques1)
          <tr>
            <td>{{ $freeques1->fquestions1 }}</td><td>{{ $freeques1->fanswers1 }} </td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions2 }}</td><td>{{ $freeques1->fanswers2 }} </td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions3 }}</td><td>{{ $freeques1->fanswers3 }} </td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions4 }}</td><td>{{ $freeques1->fanswers4 }} </td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions5 }}</td><td>{{ $freeques1->fanswers5 }} </td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions6 }}</td><td>{{ $freeques1->fanswers6 }} </td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions7 }}</td><td>{{ $freeques1->fanswers7 }} </td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions8 }}</td><td>{{ $freeques1->fanswers8 }} </td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions9 }}</td><td>{{ $freeques1->fanswers9 }} </td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions10 }}</td><td>{{ $freeques1->fanswers10 }} </td>
          </tr>

          @endforeach
        </tbody>
      </table>

       </div>   
    </div>
    
   <br><br>

     <!-- </form> -->
   </div>
     <!-- </div> -->

<style type="text/css">
  .p-link{
    font-weight: bold;
    color: blue;
  }
  
</style>

 </body>
<!-- 
<script src="js/jquery.js"></script>
<script src="js/bootstrapbundle.js"></script>
<script src="js/main.js"></script> -->


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
 <!--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script> -->
</html>