<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Hair Transplant</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
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
        
        <div class="row">
        <div class="form-group col-md-12">
          <!-- <center><h5 class="modal-title" >PATIENT DETAILS</h5></center> -->
          <center><h5 class="modal-title" style="padding-top: 30px;" >PATIENT DETAILS</h5></center>
        </div>
        
      </div>
       
        
         <div class="modal-body" style="background-color:lightyellow;">
           <div style="padding:30px; padding-left: 30px;">
           @foreach($datas as $p_data)
           <table class="table table-borderless table-responsive">
            <tr>
              <td>Name</td><td>:-</td> <td>{{$p_data->name}}</td>
              <td>Gender</td><td>:-</td><td>{{ $p_data->gender}}</td>
            </tr>
            <tr>
              <td>Date Of Birth</td><td>:-</td> <td>{{$p_data->date_of_birth}}</td>
              <td>Marital Status</td><td>:-</td><td>{{ $p_data->marital_status}}</td>
            </tr>
            <tr>
              <td>Religion</td><td>:-</td> <td>{{$p_data->religion}}</td>
              <td>Medicin Preference</td><td>:-</td><td>{{ $p_data->medicin_pref}}</td>
            </tr>
            <tr>
              <td>Profession</td><td>:-</td> <td>{{$p_data->profession}}</td>
              <td>Weight in Kg</td><td>:-</td><td>{{ $p_data->weight_in_kg}}</td>
            </tr>
            <tr>
              <td>Height In Cm</td><td>:-</td> <td>{{$p_data->height_in_cm}}</td>
              <td>Address</td><td>:-</td><td>{{ $p_data->address }}, <br>{{$p_data->city }}, {{ $p_data->pincode}}</td>
            </tr>
            <tr>
              <td>Mobile No.</td><td>:-</td> <td>{{$p_data->mobile_no}}</td>
              <td>Email</td><td>:-</td><td>{{ $p_data->email}}</td>
            </tr>
             <tr>
              <td>Sponsor Link</td><td>:</td> <td><a href="{{url('/sponsor_link',$p_data->id)}}" style="color:blue;" class="data">{{ $p_data->patients_id}}</a>
                <div class="row">
                  <div class="form-group col-md-1">
                    <i class="fab fa-facebook-f"></i>  
                  </div>
                  <div class="form-group col-md-1">
                    <i class="fab fa-whatsapp"></i>  
                  </div>
                  <div class="form-group col-md-1">
                    <i class="fab fa-google"></i>  
                  </div>
                </div>
              </td>
              
            </tr>
            <tr><td colspan="3"><button type="submit" class="btn bg-info" style="color:white;">Edit</button></td></tr>
           </table> 


      @endforeach
      <br>
<div class="row">
  <div class="form-group col-12">
    <center><h4>PAID QUESTIONS</h4></center>
      <br>
       <table class="tabel table-striped table-bordered table-responsive">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Sr. No.</th>
            <th scope="col">Questions</th>
            <th scope="col">Answers</th>
            <th scope="col">Types</th>
            <th scope="col">Frequency / Result / Quantity</th>
            <th scope="col">Reason / Duration </th>
          </tr>
        </thead>
        <tbody>
          @foreach($q_data as $q_datas)
          <tr>
            <td class="col-md-1"></td>
            <td class="col-md-5">{{ $q_datas->questions}}</td>
            <td class="col-md-2">{{ $q_datas->answers }}</td>
            <td class="col-md-2">{{ $q_datas->type}}</td>
            <td class="col-md-2">{{ $q_datas->freq_res_qua }}</td>
            <td class="col-md-2">{{ $q_datas->reas_dura }}</td>
        </tr>
          @endforeach
        </tbody>
      </table>
  </div>
</div>
<style type="text/css">
  th{
    text-align: center;
  }
</style>
<br><br>
<div class="row">

<table class="tabel table-striped table-bordered">
        <thead class="thead-dark">
          <tr>
            <th class="col-md-4">Image</th>
            <th class="col-md-8">Suggestions</th>
          </tr>
        </thead>
        <tbody>
       
        <form method="post" id="online" action="{{url('/payment')}}" enctype="multipart/form-data">
         @csrf
     
            @foreach($image as $images)
        <tr>

            <td class=" form-group col-lg-2"><img src="{{ $images->image}}" style="width:200px;"></td>
            <td class="form-group col-lg-10">
              <div class="row">
                <div class="form-group col-md-4 col-12">
                    <label>Prefer KIT</label><br/>
                    <label>{{ $images->suggestion }}</label>
                </div>
                <div class="form-group col-md-4 col-12">
                  <label>Payment Mode</label>
                  <select class="form-select" name="payment_mode" id="pay_mode" aria-label="Default select example">
                    <option selected>Payment Mode</option>
                    <option value="1">Online</option>
                    <option value="2">Offline</option>
                  </select>
                </div>
                <div class="form-group col-md-4 col-12">
                  <div id="vendor_li" style="display:none;">
                    <label>Medical List</label>
                    <select class="form-select" name="vendor_list" id="pay_mode" aria-label="Default select example" >
                      <option selected> Select</option>
                      @foreach($vendors as $ven)
                      <option value="{{$ven->id}}">{{$ven->shop_name}} {{$ven->address}}</option>
                      @endforeach
                    </select>
                  </div>
                  
                   <form method="post" id="offline" action="{{url('/payment')}}" enctype="multipart/form-data">
                    <button type="submit" id="pay_now" class="btn btn-primary" style="display:none;">Pay Now</button>
                   </form>
                   <button type="submit" id="confirm" class="btn btn-primary" >Confirm</button>
                </div>
              </div>

            </td>
        </tr>
          @endforeach
        </form>
        
        </tbody>
      </table>
      
</div>
     
      <!-- <div class="row tabel">
        <tr class="tbl form-group col-md-3">
          <td>Questions </td> :- <td class="data">{{ $q_datas->questions}}</td>
        </tr>
         <tr class=" form-group col-md-3">
          <td>Answers  </td> :- <td class="data">{{ $q_datas->answers }}</td>
        </tr>
        <div class=" form-group col-md-2">
          <label>Types </label> :- <label class="data">{{ $q_datas->type}}</label>
        </div>
         <div class=" form-group col-md-2">
          <label>Frequency / Result / Quantity </label> :- <label class="data">{{ $q_datas->freq_res_qua }}</label>
        </div>
        <div class=" form-group col-md-2">
          <label>Reason / Duration  </label> :- <label class="data">{{ $q_datas->reas_dura }}</label>
        </div>
      </div> -->
      
          </div>

          
    </div>
   
</div>
<!-- <style type="text/css">
  .data{
    font-weight: bold;
    color: blue;
  }
  label{
    font-weight: bold;
  }
</style> -->
 </body>

<script src="js/jquery.js"></script>
<script src="js/bootstrapbundle.js"></script>
<script src="js/main.js"></script>
<script>
  $(document).ready(function(){
    $('#pay_mode').on('change', function() {
      if ( this.value == '1')
      {
        $("#vendor_li").hide();
        $("#pay_now").show();
        // $("#online").show();
        $("#confirm").hide();
        // $("#offline").disabled();

      }
      else
      {
        $("#vendor_li").show();
        $("#pay_now").hide();
        // $("#online").disabled();
        $("#confirm").show(); 
        // $("#offline").show();
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