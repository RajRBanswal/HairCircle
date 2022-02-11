@extends('admin.desing.sidebar2')


@section('content')

<div class="card m-3">
        <!--<div class="card-header pques">-->
            
    <div class="row p-2">
        <div class="form-group col-lg-8 col-md-8 col-12 ">
            <h3 class="ml-3 mt-3">All Customer</h3>
        </div>
        <div class="form-group col-lg-4 col-md-4 col-12">
            <div class="">
                <input class="search form-control mt-2" value="Today's Customers : {{count($today)}}" readonly>
            </div>
        </div>
    </div>
    <div class="row p-2">
        <div class="form-group col-lg-6 col-md-6 col-12">
        </div>
        <div class="form-group col-lg-6 col-md-6 col-12">
            <div class="row">
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
        <!--</div>-->
        
         <div class="container table-full-width table-responsive" id="">
            <table id="example" class="table table-striped" style="width:100%">   
                <thead >
                    <tr>
                        <th class="order">Date</th>
                        <th class="order">Name</th>
                        <th class="order">Product Name</th>
                        <th class="order">Quantity</th>
                        <th class="order">Buying Price</th>
                        <!-- <th>Payment Mode</th> -->
                        <!-- <th>Vendor</th> -->
                        <th class="order">Status</th>
                        <th>Action</th>
                    </tr>
                        
                </thead>
                <!-- <tbody id="table">
                    
                </tbody> -->
                 <tbody id="table1">
                </tbody>
            </table> 
        </div>
        
</div>
<style type="text/css">
    .search{
        border-color: #DAA520;
    }

    #myElem{
      font-size: 15px;  
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
<script type="text/javascript">
      function select_fil(id){
            $(document).ready(function() {
                if(id == 1){
                    $('#search1').show();
                    $('#calender1').hide();
               }else if(id == 2){
                    $('#calender1').show();
                    $('#search1').hide();
               }else{
                   $('#search1').hide();
                   $('#calender1').hide(); 
               }
            });
        }
    

    $("#myElem").show();
    setTimeout(function() {
        $("#myElem").hide();
    }, 5000);
</script>
<script type="text/javascript">
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
               url:'all_cstmr/'+sdate+'/'+ldate,
               dataType:"json",
               success:function(data)
               {
                  console.log(data);
                   $('#table1').empty();
                    $.each(data, function(key,value){
                        $('#table').hide();
                        if (value.status == 1) {
                            $('#table1').append('<tr><td>'+value.date+'</td><td>'+value.name+'</td><td>'+value.kit+'</td><td>'+value.quantity+'</td><td>'+value.buying_price+'</td><td><label style="color:green; font-weight:bold;">Confirm</label></td><td class="rrb"><a href='+"{{url('/update_customer_details')}}/"+value.id+' class="btn btn-outline-primary btn1 mr-1 mt-1">View</a></td></tr>');
                        }else{
                            $('#table1').append('<tr><td>'+value.date+'</td><td>'+value.name+'</td><td>'+value.kit+'</td><td>'+value.quantity+'</td><td>'+value.buying_price+'</td><td><label style="color:red; font-weight:bold;">Pending</label></td><td class="rrb"><a href='+"{{url('/update_customer_details')}}/"+value.id+' class="btn btn-outline-primary btn1 mr-1 mt-1">View</a></td></tr>');
                        }   
                    });

               }
            });
        });
    }
    function get_new_vndor(start, end){
    
}
</script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->


@endsection