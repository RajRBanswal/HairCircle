@extends('admin.desing.sidebar')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js" type="text/javascript"></script>
<div class="container">
	<div class="card p-2">
		<div class="row "> 
			<div class="form-group col-md-8 col-lg-8 col-12">
				<h3>Cash Claim Settings</h3>
			</div>
			<div class="form-group col-md-4 col-lg-4 col-12 rrb">
				<button type="button" class="btn btn-outline-primary btn1" data-bs-toggle="modal" data-bs-target="#exampleModal">
				  Add Dates	</button>
			</div>
			
		</div>
		<div class="row">
			<div class="form-group col-lg-6 col-md-6 col-12"></div>
            <div class="form-group col-lg-6 col-md-6 col-12">
              <div class="row">
                  <div class="form-group col-lg-6 col-md-6 col-12">
	                <div class="search">
	                    <input class="search-input form-control search" type="text" onkeyup="search();" id="search-input" placeholder="Search Here">
	                </div>
            	</div>
				<div class="form-group col-lg-6 col-md-6 col-12">
	                <div id="reportrange" class="pull-left" style="background: #fff; cursor: pointer; padding: 6px; border: 1px solid #DAA520; border-radius: 5px; width:100%">
	                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
	                    <span></span> <b class="caret"></b>
	                </div>
            	</div>
            	
              </div>
            </div>
        </div>

      <div class="container table-full-width table-responsive" id="">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                         <th class="order">Start Date</th>
                         <th class="order">End Date</th>
                        <th class="order">Points</th>
                        <th class="order">Amounts</th>
                        <th class="order">Action</th>
                    </tr>
                </thead>
                <tbody id="table1">
                    
                </tbody>
            </table>  
    </div>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		  	<form method="post" action="{{url('/cc_settings')}}">
				@csrf
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Cash Claim Settings</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">
		        <div class="row">
					<div class="form-group col-md-6 col-lg-6 col-12">
						<label>Start Date</label>
						<input id="date" type="text" class="form-control datepicker" name="startdate">
					</div>
					<div class="form-group col-md-6 col-lg-6 col-12">
						<label>End Date</label>
						<input id="date1" type="text" class="form-control datepicker" name="enddate">
					</div>
					
				</div>
				<div class="row">
				    <div class="form-group col-md-6 col-lg-6 col-12">
						<label>Points</label>
						<input id="text" class="form-control" name="points">
					</div>
					<div class="form-group col-md-6 col-lg-6 col-12">
						<label>Amount</label>
						<input id="text" class="form-control" name="amount">
					</div>
				</div>
		      </div>
		      <div class="modal-footer rrb">
		        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		        <button class="btn btn-outline-primary btn1" type="submit">Save</button>
		      </div>
		    </div>
		    </form>
		  </div>
		</div>
		<!-- End Modal -->
		         <!-- The Modal -->
            <div class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
            
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Edit</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
            
                  <!-- Modal body -->
                  <div class="modal-body" id="edit_date">
            
                        
                  </div>
                </div>
              </div>
            </div>
         <!-- End The Modal -->
	</div>
</div>	
<style type="text/css">
.search-input{
    border:solid 1px #DAA520;
}
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
	/*!
 
</style>
<script>
$( ".datepicker" ).datepicker({
       dateFormat: 'dd-mm-yy'
    });

   setTimeout(function() { 
      $("#hideDiv").fadeOut('fast'); 
    }, 5000);


function search(){   
    $("#search-input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#table1 tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
}
</script>
<script type="text/javascript">
function Search_date(start, end){
        $(document).ready(function(){
          var sdate = moment(start).format('YYYY-MM-DD');
          var ldate = moment(end).format('YYYY-MM-DD'); 
            $.ajax({
               method:"get",
               url:'get_cash_claim_date/'+sdate+'/'+ldate,
               dataType:"json",
               success:function(data)
               {
                   $('#table1').empty();
                    $.each(data, function(key,value){
                            $('#table1').append('<tr><td>'+value.date+'</td><td>'+value.enddate+'</td><td>'+value.points+'</td><td>'+value.amount+'</td><td class="rrb"><button type="button" onclick="get_c_date('+value.id+')" class="btn btn-outline-primary btn1" data-bs-toggle="modal" data-bs-target="#myModal">Edit</button></td></tr>');
                        
                    });
               }
            });
        });
    }
</script>
<script type="text/javascript">
    function get_c_date(id) {
        $.ajax({
               method:"get",
               url:'getCash_date/'+id,
               dataType:"json",
               success:function(data)
               {
                    console.log(data);
                    $('#edit_date').empty();
                    $.each(data, function(key,value){
                            $('#edit_date').append('<form action='+"{{url('/update_ccs')}}/"+value.id+' method="post">@csrf<div class="row"><div class="form-group"><span>Start Date  </span><input type="text" class="form-control datepicker" name="startdate" type="date" value="'+value.date+'"/></div></div><div class="row"><div class="form-group"><span>End Date  </span><input type="text" class="form-control datepicker" name="enddate" value="'+value.enddate+'"/></div></div><span>Points</span><input type="text" class="form-control" name="points" value="'+value.points+'"/></div></div><div class="row"><div class="form-group"><span>Amount <input type="text" class="form-control" name="amount" value="'+value.amount+'"/></div></div><div class="row rrb"><button type="submit" class="btn btn-outline-primary btn1">Update</button> </div></form>');
                        
                    });
               }
            });
    }
</script>

@endsection