@extends('admin.desing.sidebar')


@section('content')

        <div class="card p-3" >
            <div class="row mt-3 rrb">
                <div class="form-group col-lg-6 col-md-6 col-12">
                    <h2 class="ml-3">Sold Offline</h2> 
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
                    <!-- <a href="{{url('/place_order')}}" class="btn btn-outline-primary btn1">Place Order</a> -->
                    <!-- <button class="btn btn-outline-primary btn1" onclick="all_order()">All Orders</</button> -->
                    <!-- <a href="{{url('/get_product')}}" class="btn btn-outline-primary btn1">Return Product</a> -->
                </div>
            </div>
            <div id="hideDiv">
              @if ($message = Session::get('alert'))  
                <div class="alert alert-info">  
                  <ul>
                          {{ $message }}
                  </ul>
                </div>
              @endif
            </div>
        <div class="container table-full-width table-responsive" id="offline_sold">
            <table id="example" class="table table-striped" id="" style="width:100%;">
                <thead>
                    <tr>
                        <th class="order">Date</th>
                        <th class="order">Product Name</th>
                        <th class="order">Quantity</th>
                        <th class="order">Amount</th>
                        <th class="order">Vendor Name</th>
                        <th class="order">Vendor Address</th>
                    </tr>
                        
                </thead>
                <tbody id="table2">
                    
                </tbody>
            </table> 
        </div>
    </div>
</div>
    </div>
<style type="text/css">
 /*   .texts{
        font-size: 20px;
         width: 30px;
    }
    .textx{
        width: 100px;
        font-size: 20px;
    }
    .table{
        font-size: 15px;
        font-weight: bold;
    }*/
    #myElem{
      font-size: 15px;  
    }
    .search-input{
        border:solid 1px #DAA520 ;
    }
    .rrb .btn1:hover{
                  background-color: #000;
                  color: #fff;
                }
                .rrb .btn1{
                  color: #000;
                  border-color: #DAA520;
                  /*width:105px;*/
                 margin: 10px;
                }
                #all_ordr1{
                    display:none;
                }
</style>

<script type="text/javascript">

    setTimeout(function() {
        $('#hideDiv').fadeOut('fast');
    }, 3000); 

    
    function search(){
    $("#search-input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#table2 tr").filter(function() {
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
               url:'all_offline_sold1/'+sdate+'/'+ldate,
               dataType:"json",
               success:function(data)
               {
                  console.log(data);
                   $('#table2').empty();
                    $.each(data, function(key,value){
                        // if (value.status == 1) {
                            $('#table2').append('<tr id="tr"><td>'+value.date+'</td><td>'+value.product_name+'</td><td>'+value.quantity+'</td><td>'+value.p_price+'</td><td>'+value.name+'</td><td>'+value.address+','+value.city+'</td></tr>');
                        // }
                        // }else{
                        //     $('#table1').append('<tr><td>'+value.created_at+'</td><td>'+value.name+'</td><td>'+value.kit+'</td><td>'+value.quantity+'</td><td>'+value.buying_price+'</td><td><label style="color:red; font-weight:bold;">Pending</label></td><td class="rrb"><a href='+"{{url('/update_customer_details')}}/"+value.id+' class="btn btn-outline-primary btn1 mr-1 mt-1">View</a><a href='+"{{url('/update_cust_d')}}/"+value.user_id+' class="btn btn-outline-primary btn1 mt-1">Confirm</a></td></tr>');
                        // }   
                    });

               }
            });
        });
    }
    
//     function get_new_vndor(start, end){
	    
// 	}
</script>
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
@endsection