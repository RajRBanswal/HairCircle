@extends('sidebar')

@section('content')	

<!--<div class="container">-->
   
	<div class="container mb-4 mt-3" id="orderh">
	  <div id="hideDiv">
        @if(Session::has('alert'))
            <div class="alert alert-info texts" id="success">
                {{ Session::get('alert') }}
            </div>
        @endif
    </div>
        <div class="card mt-2 p-2">
          <h3 class="mt-2 ">Purchase History</h3>
          <div class="row">
           <div class="form-group col-md-3 col-12 col-lg-3 rrb">
              @foreach($dates as $q_datas)
                <input type="submit" name="submit" value="{{ $q_datas->date }}" class="btn btn-outline-primary btn1 mt-2" onclick="Get_Purchase_data(this.value);">
              @endforeach
            </div>
          </div>
            <div class="row rrb">
              <div id="get_purchase_order">
                <div class="container table-full-width table-responsive">
                  <table class="table table-striped" style="width:100%">   
                      <thead >
                          <tr>
                              <th>Date</th>
                              <th>KIT</th>
                              <th>Buying Price</th>
                              <th>Payment Mode</th>
                              <th>Vendor</th>
                              <th>Shop Name</th>
                              <th>Shop Address</th>
                              <th>Status</th>
                              
                          </tr>
                              
                      </thead>
                      <tbody id="table">
                        
                      </tbody>
                    </table>
                  </div>
              </div>
            </div>
          </div>
        <!--</div>-->
      <!--</div>-->
    <!--</div>-->
    <div id="mybutton" class="abc">
         <!--<button class="feedback">Feedback</button>-->
        <a href="{{url('/pquestion1')}}" class="feedback btn ">Go Through Questions For Further<br> Evaluation of Hair Health</a>
    </div>
      <!--Right Side Buttons Start-->
    <!--<div class="sticky-container mb-4 bounceInUp" data-aos="zoom-in" data-aos-delay="100" >-->
    <!--  <ul class="sticky" >-->
    <!--    <li style="">-->
    <!--      <p><a href="{{url('/pquestion1')}}" style="color: #fff;" >Analysis My Hair Health</a></p>-->
    <!--    </li>-->
    <!--  </ul>-->
    <!--</div>-->
    <!--Right Side Buttons End-->
</div>
<style type="text/css">

  .rrb .btn1:hover{
      background-color: #000;
      color: #fff;
  }
  .rrb .btn1{
      color: #000;
      border-color: #DAA520;
      width:200px;
  }
	.h-text{
		/*color: #fff;*/
    font-weight: bold;
	}
      .feedback {
         background-color: transparent;
          color:#DAA520;
          font-weight: bold;
          padding: 10px 20px;
          border-radius: 50px;
          border:solid 2px;
          border-color: #000;
          font-size:12px;
        }
                    
        #mybutton {
          position: fixed;
          bottom: 50px;
          right: 10px;
        }
         #mybutton:hover {
          background-color: #DAA520;
          color:#000;
          border-radius: 50px;                   
        }
        .feedback:hover {
          border-style:none;
        }
  #get_purchase_order{display: none;}

.feedback{
  animation: color-change 3s infinite;
}

@keyframes color-change {
  0% { color: #fff; }
  50% { color: goldenrod; }
  100% { color: black; }
}
                    
                    #mybutton {
                      position: fixed;
                      bottom: 50px;
                      right: 10px;
                    }
                     #mybutton:hover {
                      background-color: #DAA520;
                      color:#000;
                      border-radius: 50px;
                     
                    }
                    .feedback:hover {

                      border-style:none;
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
      
      function Get_Purchase_data(name){ 
        $(document).ready(function(){
          if(name){
            $.ajax({
              type: 'get',
              url: 'get_Purchase_data/'+name,
              dataType: 'json',
              success: function(data){
                console.log(data);
                $('#table').empty();
                $.each(data, function(key, modelName){
                  $('#get_purchase_order').show();
                  if(modelName.status == 1){
                  $('#table').append('<tr><td>'+modelName.updated_at+'</td><td>'+modelName.kit+'</td><td>'+modelName.buying_price+'</td><td>'+modelName.pay_mode+'</td><td>'+modelName.name+'</td><td>'+modelName.shop_name+'</td><td>'+modelName.address+','+modelName.city+'</td><td><label style="color:green; font-weight:bold;">Done</label></td></tr>');
                    }else{
                      $('#table').append('<tr><td>'+modelName.updated_at+'</td><td>'+modelName.kit+'</td><td>'+modelName.buying_price+'</td><td>'+modelName.pay_mode+'</td><td>'+modelName.name+'</td><td>'+modelName.shop_name+'</td><td>'+modelName.address+','+modelName.city+'</td><td><label style="color:red; font-weight:bold;">Not Done</label></td></tr>');
                    }
                  });
              }
            });
          }
        });
      }
// var e = document.getElementById("ddlViewBy");


</script>
<script type="text/javascript">
      setTimeout(function() {
           $('#hideDiv').fadeOut('fast');
           }, 3000); 
</script>
@endsection