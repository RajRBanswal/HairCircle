@extends('nav2')

@section('content')

<div class="container px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
  @if(session()->has('message'))
                <div class="alert alert-success" id="myElem">
                    {{ session()->get('message') }}
                </div>
            @endif
 		<div class="card mb-4">
            
 			<div class="card-header pques">
 				<center><h4>Customer Profile</h4></center>
 			</div>
 			<div class="card-body">
 				<div class="container">

          @foreach($datas as $p_data)
          <div class="col-lg-12 col-12">
            <div class="row mt-2">
              <div class="form-group col-md-6 col-12">
                <div class="form-group">
                  <span class="h-text">Name :</span>
                  <label>{{$p_data->name}}</label>
                </div>
              </div>
              <div class="form-group col-md-6 col-12 mt-2">
                <div class="form-group">
                  <label class="h-text">Gender :</label>
                  <label>{{ $p_data->gender}}</label>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="form-group col-md-6 col-12">
                <div class="form-group">
                  <span class="h-text">Date Of Birth :</span>
                  <label>{{$p_data->date_of_birth}}</label>
                </div>
              </div>
              <div class="form-group col-md-6 col-12 mt-2">
                <div class="form-group">
                  <label class="h-text">Marital Status :</label>
                  <label>{{ $p_data->marital_status}}</label>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="form-group col-md-6 col-12">
                <div class="form-group">
                  <span class="h-text">Religion :</span>
                  <label>{{$p_data->religion}}</label>
                </div>
              </div>
              <div class="form-group col-md-6 col-12 mt-2">
                <div class="form-group">
                  <label class="h-text">Medicin Preference :</label>
                  <label>{{ $p_data->medicin_pref}}</label>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="form-group col-md-6 col-12">
                <div class="form-group">
                  <span class="h-text">Profession :</span>
                  <label>{{$p_data->profession}}</label>
                </div>
              </div>
              <div class="form-group col-md-6 col-12 mt-2">
                <div class="form-group">
                  <label class="h-text">Weight in Kg :</label>
                  <label>{{ $p_data->weight_in_kg}}</label>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="form-group col-md-6 col-12">
                <div class="form-group">
                  <span class="h-text">Height In Cm :</span>
                  <label>{{$p_data->height_in_cm}}</label>
                </div>
              </div>
              <div class="form-group col-md-6 col-12 mt-2">
                <div class="form-group">
                  <label class="h-text">Address :</label>
                  <label>{{ $p_data->address}}</label>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="form-group col-md-6 col-12">
                <div class="form-group">
                  <span class="h-text">Mobile No. :</span>
                  <label>{{$p_data->mobile_no}}</label>
                </div>
              </div>
              <div class="form-group col-md-6 col-12 mt-2">
                <div class="form-group">
                  <label class="h-text">Email :</label>
                  <label>{{ $p_data->email}}</label>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="form-group col-md-6 col-12">
                <span class="h-text">Sponsor Link :</span>
              </div>
            </div>
             <div class="row mt-1">
              <div class="form-group col-md-6 col-12">
                <div class="form-group ">
                  <p style="color:blue;">{{url('sponsor_link',$p_data->id.'/'.$p_data->patients_id)}}</p>
                </div>
                <div class="form-group col-12">
                        <a href="whatsapp://send?text={{url('sponsor_link',$p_data->id.'/'.$p_data->patients_id)}}" class="btn btn-primary" data-action="share/whatsapp/share" target="_blank" id="whtapp"><i class="bi bi-whatsapp" >Send via Whatsapp</i></a>  
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{url('sponsor_link',$p_data->id.'/'.$p_data->patients_id)}}" target="_blank" class="btn btn-primary"><i class="bi bi-facebook">Share on Facebook</i>  </a>
                      </div>
              </div>
            </div>
          </div>
          @endforeach
 				</div>
 			</div>
      <div class="row mt-2 mb-4 m-2"> 
        <div class="form-group col-md-4 col-12 mt-2 mb-2">
          <input type="submit" name="btnn" id="btnn" class="btn btn-primary" onclick="myFunction();" value="Analysis My Hair Health">
        </div>
        <div class="form-group col-md-4 col-12 ml-2 mt-2 mb-2">
          <input type="submit" name="btnn2" id="btnn2" class="btn btn-primary" onclick="myFunction1();" value="Buy Product">
        </div>
         <div class="form-group col-md-4 col-12 ml-2 mt-2 mb-2">
          <input type="submit" name="btnn3" id="btnn3" class="btn btn-primary" onclick="myFunction2();" value="Order History">
        </div>
      </div>
        
      <div class="row p-2 mb-4" id="freeques" style="display: none;" >
        <div class="form-group col-md-12 col-12">
          <center><h4>Analysis My Hair Health</h4></center>
            <br>
             <table class="tabel table-striped table-bordered table-responsive-sm">
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
            <br>
            <table class="tabel table-striped table-bordered table-responsive-sm">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Image</th>
                  <th scope="col">Diagnosis</th>
                </tr>
              </thead>
              <tbody>
                @foreach($image as $images)
                <tr>
                  <td ><img src="{{ $images->image}}" style="width:200px; padding: 10px;"></td>
                  <td >{{ $images->suggestion}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
      </div>
      <div class="container p-2 mb-4" id="freeques2" style="display: none;">
        <div class="row p-2">
          <table class="tabel table-striped table-bordered">
            <thead class="thead-dark">
              <tr>
                <th class="col-md-2">Image</th>
                <th class="col-md-10"><center>Suggestions</center></th>
              </tr>
            </thead>
            <tbody>
           
          <form method="post" id="online" name="myForm" action="{{url('/offline')}}" enctype="multipart/form-data" >
             @csrf
              
          @foreach($image as $images)
            <tr>
                <td class=" form-group col-lg-2">
                  <img src="{{ $images->image}}" style="width:200px;">
                  <input type="text" name="image" value="{{ $images->image}}" style="display: none;">
                </td>
                <td class="form-group col-lg-10">
                  <div class="row p-2">
                    <div class="form-group col-md-2 col-12 p-4">
                        <label class="mt-2">Prefer KIT</label><br/>
                        <label class="mt-2">{{ $images->product_name }}</label>
                        <input type="text" name="kit" value="{{ $images->product_name }}" style="display: none;">
                        <input type="text" name="price" value="{{ $images->price }}" style="display: none;">
                    </div>
                    <div class="form-group col-md-3 col-12 mt-2">
                      <label class="mt-2">Payment Mode</label>
                      <select class="form-select mt-2" name="payment_mode" id="pay_mode" aria-label="Default select example" onchange="show();" required>
                        <option value="">Payment Mode</option>
                        <option value="Online">Online</option>
                        <option value="Offline">Offline</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3 col-12 mt-2">
                      <div id="vendor_li" style="display:none;">
                        <label class="mt-2">Medical List</label>
                        <select class="form-select mt-2 " name="vendor_list" id="vendor_list" aria-label="Default select example" required >
                          <option value=""> Select</option>
                          @foreach($vendors as $vndr)
                            <option value="{{$vndr->id}}">{{$vndr->shop_name}} {{$vndr->address}}</option>
                          @endforeach
                        </select>
                        <div class="invalid-feedback">
                            select Vendors
                          </div>
                      
                        <!--<label class="mt-2">Quantity</label>-->
                        <!--<input type="text" name="quntity" class="form-control">-->
                      </div>                       
                    </div>
                    <div class="form-group col-md-2 col-12 mt-4 ml-1">
                        <center><button type="submit" id="confirm" class="btn btn-primary mt-2 mb-2" onclick="validateForm();">Confirm</button></center>

                        <center>
                          <a href="{{url('/payment1')}}" type="submit" id="pay_now" class="btn btn-primary mt-2 mb-2" style="display:none;">Pay Now</a>
                        </center>
                      </div>
                  </div>

                </td>
            </tr>
              @endforeach
            </form>
            
            </tbody>
          </table>     
        </div>
      </div>
      <div class="container p-2 mb-4" id="orderh" style="display: none;">
        <div class="card">
          <div class="card-header pques">
            <center><h4>Order History</h4></center>
          </div>
          <div class="card-body">
            @if($orders)
            @foreach($orders as $ord)
            <div class=" row">
              <div class="form-group col-md-6 col-12">
                <div class="form-group col-md-6 col-6">
                  <label>Kit  :</label>
                  <label>{{$ord->kit}}</label>
                </div>
              </div>
              <div class="form-group col-md-6 col-12">
                  <label>Vendor  :</label>
                  @foreach($medi_store as $ords)
                  <label>{{$ords->name}}</label>
                  @endforeach
              </div>
            </div>
              <div class="row">
                <div class="form-group col-md-6 col-12">
                  <label>ShopName  :</label>
                  @foreach($medi_store as $ords)
                  <label>{{$ords->shop_name}}, {{$ords->address}}</label>
                  @endforeach
                </div>  
                <div class="form-group col-md-6 col-12">
                  <div class="form-group col-md-6 col-6">
                    <label>Payment Mode  :</label>
                    <label>{{$ord->pay_mode}}</label>
                  </div>
                </div>
            </div>
            <div class=" row">
              <div class="form-group col-md-6 col-12">
                  <label>Date / Time :</label>
                  <label>{{$ord->created_at}}</label>
              </div>
            </div>

            @endforeach
            @endif
          </div>
        </div>
      </div>
    </div>  
    <!--Right Side Buttons Start-->
    <div class="sticky-container mb-4 bounceInUp" data-aos="zoom-in" data-aos-delay="100" >
      <ul class="sticky" >
        <li style="">
          <p><a href="{{url('/pquestion1')}}" style="color: #fff;" >Analysis My Hair Health</a></p>
        </li>
      </ul>
    </div>
    <!--Right Side Buttons End-->
</div>
<style type="text/css">
	.h-text{
		/*color: #fff;*/
    font-weight: bold;
	}
  #whtapp{
    background-color: #25D366;
    border-color: #075E54;
  }
</style>

<script>
  $(document).ready(function(){
    $('#pay_mode').on('change', function() {
      if ( this.value == 'Online')
      {

        $("#vendor_li").hide();
        $("#qunti").hide();
        $("#pay_now").show();
        // $("#online").show();
        $("#confirm").hide();
        // $("#offline").disabled();

      }
      else
      {
        $("#vendor_li").show();
        $("#qunti").show();
        $("#pay_now").hide();
        // $("#online").disabled();
        $("#confirm").show(); 
        // $("#offline").show();
      }
    });
});

  function myFunction() {
  var x = document.getElementById("freeques");
  var y = document.getElementById("freeques2");
  var o = document.getElementById("orderh");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
    o.style.display = "none";
  } else {
    x.style.display = "none";
  }
}

  function myFunction1() {
  var x = document.getElementById("freeques2");
  var y = document.getElementById("freeques");
  var o = document.getElementById("orderh");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
    o.style.display = "none";
  } else {
    x.style.display = "none";
  }
}
function myFunction2(){
  var o = document.getElementById("orderh");
  var x = document.getElementById("freeques2");
  var y = document.getElementById("freeques");
  if (o.style.display === "none") {
    o.style.display = "block";
    x.style.display = "none";
    y.style.display = "none";
  } else {
    o.style.display = "none";
  }
}


  function show(){
    var e = document.getElementById("pay_mode");
    var x = document.getElementById("pay_now");
    var y = document.getElementById("confirm");
    var v = document.getElementById("vendor_li");
    var strUser = e.options[e.selectedIndex].value;
    if(strUser == 'Online'){
      x.style.display = "block";
      y.style.display = "none";
      v.style.display = "none";
    }else{
      x.style.display = "none";
      y.style.display = "block";
      v.style.display = "block";
    }
}

// var e = document.getElementById("ddlViewBy");
// function validateForm() {
//   let x = document.getElementById('vendor_list').value;
//   let y = document.getElementById('pay_mode').value;
//   if (x == "" || y=="") {
//     alert("vendor must be filled out");
//     return false;
//   }
// }

</script>
<script>
    $("#myElem").show();
    setTimeout(function() {
        $("#myElem").hide();
    }, 5000);
</script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->



@endsection

