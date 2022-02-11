@extends('admin.desing.sidebar')

@section('content')
<html>
<head>
<script src="{{asset('/assets/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('/assets/css/bootstrap-datepicker.css')}}"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css" rel="stylesheet"/>

</head>
<body>
<div class="container">
	<div class="card p-2">
		<div class="row rrb"> 
			<div class="form-group col-md-8 col-lg-8 col-8">
				<h3>Set Time</h3>
			</div>
			<div class="form-group col-md-4 col-lg-4 col-4">
				<button type="button" class="btn btn-outline-primary btn1" data-bs-toggle="modal" data-bs-target="#exampleModal">
				  Add Dates			</button>
			</div>
			
		</div>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		  	<form method="post" action="{{url('/store_dates')}}">
				@csrf
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Select Dates</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">
		        
				<h3>Select Dates</h3>
					<input type="text" class="form-control date" name="selected_dates[]" id="selected_dates" placeholder="Pick the multiple dates">
				
		      </div>
		      <div class="modal-footer rrb">
		        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-outline-primary btn1">Save</button>
		      </div>
		    </div>
		    </form>
		  </div>
		</div>
		<!-- End Modal -->
	@foreach($time as $ti)
		<input type="hidden" class="form-control date" name="sel_dates" id="sel_dates" value="{{$ti->dates}}">
	@endforeach
	<form method="post" action="{{url('/time_slot')}}">
		@csrf
		<div class="row">
			<div class="form-group col-md-6 col-lg-6 col-12">
				<label>Date</label>
				<input id="datepicker" class="form-control" name="date">
			</div>
			<div class="form-group col-md-6 col-lg-6 col-12">
				<label>Time Slot</label>
				<select class="form-select form-control" name="time_slot" onchange="select_time(this.value)">
					<option>Select Time Slot</option>
					<option value="Morning">Morning</option>
					<option value="Afternoon">Afternoon</option>
					<option value="Evening">Evening</option>
					<option value="Night">Night</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-6 col-lg-6 col-12">
				<div class="row">
					<div class="form-group col-md-6 col-lg-6 col-6">
						<label>From Time</label>
						<input id="fromtime" type="time" class="input_starttime form-control timepicker" name="fromtime">
					</div>
					<div class="form-group col-md-6 col-lg-6 col-6">
						<label>To Time</label>
						<input id="totime" type="time" class="input_starttime form-control timepicker" name="totime">
					</div>
				</div>
			</div>
			<div class="form-group col-md-6 col-lg-6 col-12 rrb">

				<center><button class="btn btn-outline-primary btn1" style="margin-top:30px;" type="submit">Save</button></center>
			</div>
		</div>
	</form>	
	</div>
</div>	
<br>

</body>
<script type="text/javascript">
	// function get_dates() {
		var datsss = document.getElementById('sel_dates').value;
		// var ldate = datsss.toDateString();	
		// alert(ldate);
		var demo11 = datsss.split(",");
		var ldate = JSON.stringify(demo11);
		var datesForDisable = ldate.split(",");
		// alert(datesForDisable);
		// var demo11 = Date(datesForDisable);
		// alert(datesForDisable);
// var datesForDisable = ["2022-02-14","2019-09-15","2019-09-16"]

$("#datepicker").datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true,
            weekStart: 1,
            calendarWeeks: true,
            todayHighlight: true,
            beforeShowDay: function (currentDate) {
                var dayNr = currentDate.getDay();
                var dateNr = moment(currentDate.getDate()).format("DD-MM-YYYY");
                if (datesForDisable.length > 0) {
                     for (var i = 0; i < datesForDisable.length; i++) {                        
                       if (moment(currentDate).unix()==moment(datesForDisable[i],'YYYY-MM-DD').unix()){
                                return false;
                           }
                        }
                    }
                    return true;
                }
            })
	// }

</script>
<style type="text/css">
	 .rrb .btn1{
          color: #000;
          border-color: #DAA520;
          width:200px;
          margin: 10px;

        }
          .rrb .btn1:hover{
          background-color: #000;
          color: #fff;
        }
</style>
<script type="text/javascript">
	$('.date').datepicker({
  multidate: true,
	format: 'yyyy-mm-dd'
});

</script>
</html>

<!--<div class="card m-3 p-3">-->
<!--	  <div id="hideDiv">-->
<!--        @if(Session::has('alert'))-->
<!--            <div class="alert alert-info texts" id="success">-->
<!--                        <li>{{ Session::get('alert') }}</li>-->
<!--            </div>-->
<!--        @endif-->
<!--    </div>-->
<!--	<div class="row">-->
<!--		<div class="form-group">-->
<!--			<h3>Time Setting</h3>-->
<!--		</div>-->
<!--	</div>-->
<!--	<form method="post" action="{{url('/time_slot')}}">-->
<!--		@csrf-->
<!--		<div class="row">-->
<!--			<div class="form-group col-md-6 col-lg-6 col-12">-->
<!--				<label>Select Date</label>-->
<!--				<input type="date" name="date" id="theDate" class="form-control">-->
<!--			</div>-->
<!--			<div class="form-group col-md-6 col-lg-6 col-12">-->
<!--				<label>Time Slot</label>-->
<!--				<select class="form-select form-control" name="time_slot" onchange="select_time(this.value)">-->
<!--					<option>Select Time Slot</option>-->
<!--					<option value="Morning">Morning</option>-->
<!--					<option value="Afternoon">Afternoon</option>-->
<!--					<option value="Evening">Evening</option>-->
<!--					<option value="Night">Night</option>-->
<!--				</select>-->
<!--			</div>-->
<!--		</div>-->
<!--		<div class="row">-->
<!--			<div class="form-group col-md-6 col-lg-6 col-12">-->
<!--				<label>Time</label>-->
				<!-- <div class="row" > -->
<!--					<div class="form-check" id="morning">-->
<!--						  <input class="form-check-input" type="checkbox" name="morning[]" value="9 AM to 12 PM" id="flexCheckDefault">-->
<!--						  <label class="form-check-label" for="flexCheckDefault">-->
<!--						    9 AM to 12 PM-->
<!--						  </label><br>-->
<!--						  <input class="form-check-input" type="checkbox" name="morning[]" value="9 AM to 11 PM" id="flexCheckDefault">-->
<!--						  <label class="form-check-label" for="flexCheckDefault">-->
<!--						    9 AM to 11 PM-->
<!--						  </label><br>-->

<!--						  <input class="form-check-input" type="checkbox" name="morning[]" value="9 AM to 12 PM" id="flexCheckDefault">-->
<!--						  <label class="form-check-label" for="flexCheckDefault">-->
<!--						    9 AM to 10 PM-->
<!--						  </label>-->
<!--					</div>  -->
<!--					<div class="form-check" id="afternoon">-->
<!--						  <input class="form-check-input" type="checkbox" name="afternoon[]" value="12 PM to 4 PM" id="flexCheckDefault">-->
<!--						  <label class="form-check-label" for="flexCheckDefault">-->
<!--						    12 PM to 4 PM-->
<!--						  </label><br>-->
<!--						  <input class="form-check-input" type="checkbox" name="afternoon[]" value="12 PM to 3 PM" id="flexCheckDefault">-->
<!--						  <label class="form-check-label" for="flexCheckDefault">-->
<!--						    12 PM to 3 PM-->
<!--						  </label><br>-->
<!--						  <input class="form-check-input" type="checkbox" name="afternoon[]" value="12 PM to 2 PM" id="flexCheckDefault">-->
<!--						  <label class="form-check-label" for="flexCheckDefault">-->
<!--						    12 PM to 2 PM-->
<!--						  </label><br>-->
<!--						  <input class="form-check-input" type="checkbox" name="afternoon[]" value="12 PM to 1 PM" id="flexCheckDefault">-->
<!--						  <label class="form-check-label" for="flexCheckDefault">-->
<!--						    12 PM to 1 PM-->
<!--						  </label>-->
<!--					</div>-->
<!--					<div class="form-check" id="evening">-->
<!--						  <input class="form-check-input" type="checkbox" name="evening[]" value="4 PM to 7 PM" id="flexCheckDefault">-->
<!--						  <label class="form-check-label" for="flexCheckDefault">-->
<!--						    4 PM to 7 PM-->
<!--						  </label><br>-->
<!--						  <input class="form-check-input" type="checkbox" name="evening[]" value="4 PM to 6 PM" id="flexCheckDefault">-->
<!--						  <label class="form-check-label" for="flexCheckDefault">-->
<!--						    4 PM to 6 PM-->
<!--						  </label><br>-->
<!--						  <input class="form-check-input" type="checkbox" name="evening[]" value="4 PM to 5 PM" id="flexCheckDefault">-->
<!--						  <label class="form-check-label" for="flexCheckDefault">-->
<!--						    4 PM to 5 PM-->
<!--						  </label>-->
<!--					</div>-->
<!--					<div class="form-check" id="night">-->
<!--						  <input class="form-check-input" type="checkbox" name="night[]" value="7 PM to 10 PM" id="flexCheckDefault">-->
<!--						  <label class="form-check-label" for="flexCheckDefault">-->
<!--						    7 PM to 10 PM-->
<!--						  </label><br>-->
<!--						  <input class="form-check-input" type="checkbox" name="night[]" value="7 PM to 9 PM" id="flexCheckDefault">-->
<!--						  <label class="form-check-label" for="flexCheckDefault">-->
<!--						    7 PM to 9 PM-->
<!--						  </label><br>-->
<!--						  <input class="form-check-input" type="checkbox" name="night[]" value="7 PM to 8 PM" id="flexCheckDefault">-->
<!--						  <label class="form-check-label" for="flexCheckDefault">-->
<!--						    7 PM to 8 PM-->
<!--						  </label>-->
<!--					</div>-->
					<!-- <div class="form-group">
<!--						<input type="checkbox" name="morning_time" class="form-check-input">-->
<!--						<label>9 AM to 12 PM</label>-->
<!--					</div> -->
				<!-- </div> -->
				<!-- <div class="row">
<!--					<div class="form-group col-md-6 col-lg-6 col-12">-->
<!--						<label>From Time</label>-->
<!--						<input type="time" name="from_time" class="form-control">-->
<!--					</div>-->
<!--					<div class="form-group col-md-6 col-lg-6 col-12">-->
<!--						<label>To Time</label>-->
<!--						<input type="time" name="to_time" class="form-control">-->
<!--					</div>-->
<!--				</div> -->
<!--			</div>-->
<!--		</div>-->
<!--		<div class="row rrb">-->
<!--			<center><button class="btn btn-outline-primary btn1" onclick="saveData()">Submit</button></center>-->
<!--		</div>-->
<!--	</form>-->
		
<!--</div>-->
<!--<style type="text/css">-->
<!--	#morning,#afternoon,#evening,#night{display: none;}-->
<!--    .texts{-->
<!--        font-size: 15px;-->
<!--    }-->

<!--    .search input{-->
<!--        font-size: 15px;-->
<!--        border:solid 1px #DAA520;-->
<!--    }-->
<!--    .rrb .btn1:hover{-->
<!--                  background-color: #000;-->
<!--                  color: #fff;-->
<!--                }-->
<!--                .rrb .btn1{-->
<!--                  color: #000;-->
<!--                  border-color: #DAA520;-->
<!--                }-->
<!--</style>-->
<!--<script type="text/javascript">-->
<!--	setTimeout(function() { -->
<!--        $("#hideDiv").hide(); -->
<!--    }, 3000);-->

<!--	function select_time(name) {-->
<!--		if(name == 'Morning'){-->
<!--			$('#morning').show();-->
<!--			$('#afternoon').hide();-->
<!--			$('#evening').hide();-->
<!--			$('#night').hide();-->
<!--		}else if(name == 'Afternoon'){-->
<!--			$('#morning').hide();-->
<!--			$('#afternoon').show();-->
<!--			$('#evening').hide();-->
<!--			$('#night').hide();-->
<!--		}else if(name == 'Evening'){-->
<!--			$('#morning').hide();-->
<!--			$('#afternoon').hide();-->
<!--			$('#evening').show();-->
<!--			$('#night').hide();-->
<!--		}else if(name == 'Night'){-->
<!--			$('#morning').hide();-->
<!--			$('#afternoon').hide();-->
<!--			$('#evening').hide();-->
<!--			$('#night').show();-->
<!--		}-->
<!--	}-->

<!--	$(document).ready(function() {-->
<!--    var date = new Date();-->

<!--    var day = date.getDate();-->
<!--    var month = date.getMonth() + 1;-->
<!--    var year = date.getFullYear();-->

<!--    if (month < 10) month = "0" + month;-->
<!--    if (day < 10) day = "0" + day;-->

<!--    var today = year + "-" + month + "-" + day;       -->
<!--    $("#theDate").attr("value", today);-->
<!--});-->
<!--</script>-->
<!--<script type="text/javascript">-->
<!--function saveData(){-->
<!--        $(document).ready(function(){-->
<!--        	var date = $("input[name=date]").val();-->
<!--        	var time_slot = $("input[name=time_slot]").val();-->
<!--        	var time = $("input[type=checkbox]:checked").val();-->
<!--        	alert(time);-->
<!--            $.ajax({-->
<!--               method:"get",-->
<!--               url:'get_all_order/'+sdate+'/'+ldate,-->
<!--               dataType:"json",-->
<!--               success:function(data)-->
<!--               {-->
<!--                    console.log(data);-->
                  
<!--               }-->
<!--            });-->
<!--        });-->
<!--    }-->
<!--</script>-->
@endsection