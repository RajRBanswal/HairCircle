@extends('admin.desing.sidebar2')


@section('content')

        <div class="card m-3" >
            <div class="row mt-3 rrb p-2">
                <div class="form-group col-lg-4 col-md-4 col-12">
                    <h2 class="ml-3">All Orders</h2> 
                </div>
                <div class="form-group col-lg-8 col-md-8 col-12">
                    <div class="row">
                        <div class="form-group col-lg-4 col-md-4 col-12">
                             <a href="{{url('/place_order')}}" class="btn btn-outline-primary btn1 float-right">Purchase Order</a> 
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-12">
                            <div class="search">
                                <input class="search-input form-control search" type="text" onkeyup="search();" id="search-input" placeholder="Search Here">
                            </div>
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-12">
                            <div id="reportrange" class="pull-left" style="background: #fff; cursor: pointer; padding: 7px; border: 1px solid #DAA520; width:100%">
                                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                                <span></span> <b class="caret"></b>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div id="hideDiv">
              @if ($message = Session::get('alert'))  
                <div class="alert alert-info">  
                    {{ $message }}
                </div>
              @endif
            </div>
    <!--<div class="row p-2">-->
    <!--    <div class="form-group col-lg-2 col-md-2 col-12">-->
           
            <!-- <button class="btn btn-outline-primary btn1" onclick="all_order()">All Orders</</button> -->
            <!-- <a href="{{url('/get_product')}}" class="btn btn-outline-primary btn1">Return Product</a> -->
    <!--    </div>-->
    <!--</div>-->
        <div class="container table-full-width table-responsive" id="">
            <table id="example" class="table table-striped"  style="width:100%">
                <thead>
                    <tr>
                        <th class="order">Date</th>
                        <th class="order">Product</th>
                        <th class="order">MRP</th>
                        <th class="order">Quantity</th>
                        <th class="order">Total Amount</th>
                        <th class="order">Payments Status</th>
                        <th class="order">Status</th>
                        <th class="order">Approved By</th>
                        <th class="order">Action</th>
                    </tr>
                        
                </thead>
                <!-- @foreach($all_ordr as $pa1)
                <tbody id="table" >
                    <tr id="tr">
                        <td>
                            <span>{{$pa1->created_at}}</span>
                        </td>
                        <td>
                            <span>{{$pa1->product_name}}</span>
                        </td>
                        <td>
                            <span>{{$pa1->mrp}}</span>
                        </td>
                        <td>
                            <span>{{$pa1->quantity}}</span>
                        </td>
                        <td>
                            <span>{{$pa1->total_amount}}</span>
                        </td>
                        <td>
                            @if($pa1->status == 'done')
                            <label style="color:green; font-weight:bold;">Approved</label>
                            @else
                            <label style="color:red; font-weight:bold;">Not Approved</label>
                            @endif
                        </td>
                        <td>
                            <span>{{$pa1->pay_status}}</span>
                        </td>
                        <td class="rrb">
                            <a href="{{url('/product_details',$pa1->id)}}" class="btn btn-outline-primary btn1">View</a>
                        </td>
                     </tr>
                </tbody>
                @endforeach -->
                <tbody id="table1"> 
                    
                </tbody>
            </table> 
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
                }
</style>
<script type="text/javascript">
    function all_order(){
        $(document).ready(function(){
            $('#all_ordr1').show();
            $('#current_order').hide();
            
        });
    }
</script>
<script type="text/javascript">
    setTimeout(function() {
           $('#hideDiv').fadeOut('fast');
    }, 3000); 
    
    function search(){
    $("#search-input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#table1 tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
}
</script>
<script type='text/javascript'>
        $(document).ready(function(){

            $('input[name="sale"]').on('change',function(){
                var sale=$(this).val();
                alert(sale);

                if(sale){
                    $.ajax({
                        type: 'get',
                        url: 'update_quntitys/'+sale,
                        dataType: 'json',
                        success: function(data){
                            
                            // $('input[name="price"]').empty();
                            $.each(data, function(key,value){
                                $('input[name="abc"]').val(value);
                                alert("Data Updated Successfully");
                            });
                        }
                    });
                }
            });
        });

   </script>
   <script type="text/javascript">
    function Search_date(start, end){
        $(document).ready(function(){
          var sdate = moment(start).format('YYYY-MM-DD');
          var ldate = moment(end).format('YYYY-MM-DD');

            $.ajax({
               method:"get",
               url:'order_all/'+sdate+'/'+ldate,
               dataType:"json",
               success:function(data)
               {
                  console.log(data);
                   $('#table1').empty();
                    $.each(data, function(key,value){
                        // $('#table').hide();
                        if (value.status == 'done') {
                            $('#table1').append('<tr><td>'+value.date+'</td><td>'+value.product_name+'</td><td>'+value.price+'</td><td>'+value.quantity+'</td><td>'+value.total_amount+'</td><td>'+value.pay_status+'</td><td><label style="color:green;font-weight:bold;">Approved</label></td><td>'+value.approved_by+'</td><td class="rrb"><a href='+"{{url('/product_details')}}/"+value.id+' class="btn btn-outline-primary btn1 mr-1 mt-1">View</a></td></tr>');
                        }else{
                            $('#table1').append('<tr><td>'+value.date+'</td><td>'+value.product_name+'</td><td>'+value.price+'</td><td>'+value.quantity+'</td><td>'+value.total_amount+'</td><td>'+value.pay_status+'</td><td><label style="color:red;font-weight:bold;">Pending</label></td><td></td><td class="rrb"><a href='+"{{url('/product_details')}}/"+value.id+' class="btn btn-outline-primary btn1 mr-1 mt-1">View</a></td></tr>');
                        }
                    });

               }
            });
        });
    }
</script>

   <script type="text/javascript">
    function get_new_vndor(start, end){}
    </script>
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
@endsection