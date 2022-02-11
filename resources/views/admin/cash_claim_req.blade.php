@extends('admin.desing.sidebar')

@section('content')
<div >
    <div class="card m-2 p-2" >
        <div class="row mt-3 rrb">
            <div class="form-group col-md-6 col-lg-6 col-12 ">
               <h2 class="ml-2">Cash Claim Request</h2> 
            </div>
            <div class="form-group col-md-6 col-lg-6 col-12">
                <div class="row p-2">
                    <div class="form-group col-lg-6 col-md-6 col-12">
                        <div class="search">
                            <input class="search-input form-control search" type="text" onkeyup="search();" id="search-input" placeholder="Search Here">
                        </div>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-12">
                        <div id="reportrange" class="pull-left" style="background: #fff; cursor: pointer; padding: 7px; border: 1px solid #DAA520; width:100%">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                            <span></span> <b class="caret"></b>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    
    <div id="hideDiv">
        @if(Session::has('alert'))
            <div class="alert alert-info texts" id="success">
                        <li>{{ Session::get('alert') }}</li>
            </div>
        @endif
    </div>
    <!--<div class="row">-->
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

      <div class="container table-full-width table-responsive" id="">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th class="order">Date</th>
                        <th class="order">Name</th>
                        <th class="order">Mobile</th>
                        <th class="order">Points</th>
                        <th class="order">Subject</th>
                        <th class="order">Account No./ UPI</th>
                        <th class="order">Action</th>
                      <!--   <th class="order">Doctor</th>
                        <th class="order">Amount</th> -->
                    </tr>
                </thead>
                <tbody id="table1">
                    
                </tbody>
            </table> 
            <!-- Modal Form -->
                <div class="modal" id="myModal">
                  <div class="modal-dialog">
                    <form method="post" action="{{url('/cc_action')}}">
                        @csrf
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Action</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>

                      <!-- Modal body -->
                        <div class="modal-body">
                           <div class="row">
                            <div class="form-group">
                                <input type="text" name="admin" class="form-control" value="{{session('admin.username')}}" readonly>
                                <input type="text" name="user_id" id="user_id" class="form-control"  readonly>
                            </div>  
                           </div>
                           <div class="row">
                            <div class="form-group">
                                <input type="text" name="amount" class="form-control" placeholder="Amount">
                            </div>  
                           </div>
                           <div class="row">
                            <div class="form-group">
                                <input type="text" name="message" class="form-control" placeholder="Message">
                            </div>  
                           </div>
                        </div>

                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline-success">Save</button>
                      </div>

                    </div>
                    </form>
                  </div>
                </div>  
                <!-- End Modal Form -->
    </div>
</div> 
<!-- <form><td><input type="text" name="admin" value="{{session('admin.username')}}" readonly></td><td></td></form> -->
<style type="text/css">
    .texts{
        font-size: 15px;
    }
    .lbl{
    	color: red;
    }
      .search input{
        font-size: 15px;
        border:solid 1px #DAA520;
    }
    .rrb .btn1:hover{
                  background-color: #000;
                  color: #fff;
                }
                .rrb .btn1{
                  color: #000;
                  border-color: #DAA520;
                }
</style>
<script>

        setTimeout(function() { 
            $("#hideDiv").fadeOut('fast'); 
        }, 5000);


function search(){   
    $("#search-input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#table tr").filter(function() {
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
               url:'get_cash_claim/'+sdate+'/'+ldate,
               dataType:"json",
               success:function(data)
               {
                   $('#table1').empty();
                    $.each(data, function(key,value){
                            $('#table1').append('<tr><td>'+value.created_at+'</td><td>'+value.u_name+'</td><td>'+value.mobile+'</td><td>'+value.points+'</td><td>'+value.subject+'</td><td>'+value.upi_acc+'</td><td><button type="button" class="btn btn-primary" data-bs-toggle="modal" onclick="get_u_data('+value.user_id+')" data-bs-target="#myModal">Action</button></td></tr>');
                        
                    });
               }
            });
        });
    }
    
    function get_u_data(id) {
        $.ajax({
               method:"get",
               url:'ccdata_after/'+id,
               dataType:"json",
               success:function(data)
               {
                   $('#table1').empty();
                    $.each(data, function(key,value){
                            $('#table1').append('<tr><td>'+value.u_name+'</td><td>'+value.mobile+'</td><td>'+value.points+'</td><td>'+value.subject+'</td><td>'+value.upi_acc+'</td></tr>');
                    });
               }
            }); 
    }
</script>

@endsection