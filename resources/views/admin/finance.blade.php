@extends('admin.desing.sidebar')

@section('content')

<div class="card m-3 p-2">
    <div class="row mt-3 p-2">
        <div class="form-group col-md-6 col-12">
            <h2 class="ml-3">Finance</h2>
        </div>
        <div class="form-group col-md-6 col-lg-6 col-12 ">
            <div class="row">
                <div class="form-group col-md-6 col-lg-6 col-12">
                    <div class="search">
                        <input class="search-input form-control search" type="text" onkeyup="search();" id="search-input" placeholder="Search Here">
                    </div>
                </div>
                <div class="form-group col-md-6 col-lg-6 col-12">
                    <div id="reportrange" class="pull-left" style="background: #fff; cursor: pointer; padding: 7px; border: 1px solid #DAA520; width:100%">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                        <span></span> <b class="caret"></b>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   <div class="row">-->
    <!--        <div class="form-group col-lg-8 col-md-8 col-12"></div>-->
    <!--        <div class="form-group col-lg-4 col-md-4 col-12">-->
    <!--            <div id="reportrange" class="pull-left" style="background: #fff; cursor: pointer; padding: 6px; border: 1px solid #DAA520; border-radius: 5px; width:100%">-->
    <!--                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;-->
    <!--                <span></span> <b class="caret"></b>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="row">-->
    <!--        <div class="form-group col-md-8"></div>-->
    <!--        <div class="form-group col-md-4 col-12">-->
    <!--            <div class="search">-->
    <!--                <input class="search-input form-control search" type="text" onkeyup="search();" id="search-input" placeholder="Search Here">-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--<hr/>-->
    <div class="row">
    	<div class="container table-full-width table-responsive" id="">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th class="order">Date</th>
                        <th class="order">Party Name</th>
                        <th class="order">Amount</th>
                        <th class="order">With GST Amount</th>
                        <th class="order">Payment Mode</th>
                        <th class="order">Payment Status</th>
                        <!-- <th scope="col">Reason</th> -->
                    </tr>
                </thead>
                <!-- <tbody id="table">
                    @foreach($income as $incomes)
                    <tr id="tr">
                        <td>{{ $incomes->created_at }}</td>
                        <td>{{ $incomes->name }}</td>
                        <td>{{ $incomes->total_amount }}</td>
                        <!-- <td class="rrb">
                            <a href="" class="btn1 btn btn-outline-info form-group">View</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody> -->
               <!--  <thead  id="thead1">
                	@foreach($total_amount as $total)
	                    <tr id="tr">
	                        <th></th>
	                        <th></th>
	                        <th>Total: {{ $total->tamount }}</th>
	                        <!-- <th></th>
	                    </tr>
                    @endforeach
            	</thead> -->
            	 <tbody id="table1">
                </tbody>
                <thead id="thead"> 	
            	</thead>
            </table> 
        </div>
    </div>
</div>
<style type="text/css">
	.rrb .btn1:hover{
      background-color: #000;
      color: #fff;
    }
    .rrb .btn1{
      color: #000;
      border-color: #DAA520;
      width:70px;
    }
      .search input{
        font-size: 15px;
        border:solid 1px #DAA520;
        border-radius:0px;
    }
</style>
<script type="text/javascript">
function search(){
    $("#search-input").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#table1 tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
}
function Search_date(start, end){
        $(document).ready(function(){
          var sdate = moment(start).format('YYYY-MM-DD');
          var ldate = moment(end).format('YYYY-MM-DD'); 
			// var date1 = document.getElementById('min').value;
			// var date2 = document.getElementById('max').value;
			// alert(date1);
			// var datearray = date1.split("-");
	  //       var sdate = datearray[0] + '-' + datearray[1] + '-' + datearray[2];
	  //       var datearray1 = date2.split("-");
	  //       var ldate = datearray1[0] + '-' + datearray1[1] + '-' + datearray1[2];
         	$.ajax({
               method:"get",
               url:'get_finance_data/'+sdate+'/'+ldate,
               dataType:"json",
               success:function(data)
               {
                   $('#table1').empty();
                    $.each(data, function(key,value){
                    	$('#table').hide();
                        $('#table1').append('<tr><td>'+value.date+'</td><td>'+value.name+'</td><td>'+value.total_amount+'</td><td>'+value.withGSTAmount+'</td><td>'+value.pay_mode+'</td><td>'+value.pay_status+'</td></tr>');
                    });
               }
            });
         	$.ajax({
               method:"get",
               url:'get_total/'+sdate+'/'+ldate,
               dataType:"json",
               success:function(data)
               {
                   console.log(data);
               		$('#thead').empty();
                    $.each(data, function(key,value){
                    	$('#thead1').hide();
                        $('#thead').append('<tr><th></th><th></th><th>'+value.tamount+'</th><th>'+value.wgamount+'</th></tr>');
                    });
               }
            });
        });
	}
	
</script>
@endsection