@extends('admin.desing.sidebar')

@section('content')
<div class="card m-3 p-2">
    <div class="row mt-3 ">
        <div class="form-group col-md-6 col-lg-6 col-12">
            <h2 class="ml-2">Sale Product List</h2>
        </div>
        <div class="form-group col-md-6 col-lg-6 col-12" style="font-size:15px">
            <div class="row">
                <div class="form-group col-md-6 col-lg-6 col-6 "> <p class=" text-center">Total Product : <strong >{{count($total)}}</strong> </p></div>
            
                <div class="form-group col-md-6 col-lg-6 col-6 "><p class=" text-center">Today's Added Product : <strong>{{count($today)}}</strong></p></div>
            </div>
        </div>
    </div>
    <div class="row p-1">
            <div class="form-group col-md-6 col-lg-6 col-12"></div>
            <div class="form-group col-md-6 col-lg-6 col-12 p-1">
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
                <!-- <a href="{{url('/get_confirm_order')}}" class="btn btn-outline-primary btn1" type="submit" id="confirmo" >All Confirm Orders</a> -->
                <!-- <a href="{{url('/all_return_order')}}" class="btn btn-outline-primary btn1" type="submit" id="confirmo" >All Return Order</a> -->
            </div>
        </div>
   <div id="hideDiv">
        @if(Session::has('alert'))
            <div class="alert alert-info texts" id="success">
                        <li>{{ Session::get('alert') }}</li>
            </div>
        @endif
    </div>
        <div class="container table-full-width table-responsive" id="">
            <table id="example" class="table table-striped mt-3" style="width:100%">
                <thead>
                    <tr>
                        <th class="order">Date</th>
                        <th class="order">Product</th>
                        <th class="order">Quantity</th>
                        <th class="order">Batch No.</th>
                        <th class="order">Expiry Date</th>
                        <th class="order">Rate</th>
                        <th class="order">Total Amount</th>
                        <th class="order">With GST Amount</th>
                        <th class="order">Image</th>
                        
                        <!-- <th class="order">Action</th> -->

                    </tr>
                </thead>
                                <tbody id="table1">
                    
                </tbody>
            </table>
        </div>
</div>
<style type="text/css">
    .texts{
        font-size: 15px;
    }
    .text-center{
        border:solid 1px #DAA520;
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
    td{
        font-size: 17px;
    }
</style>
<script>
function search(){
    $("#search-input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#table tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
}

    setTimeout(function() {
        $("#hideDiv").fadeOut('fast'); 
    }, 5000);

            
</script>
<script type="text/javascript">
function Search_date(start, end){
        // $(document).ready(function(){
          var sdate = moment(start).format('YYYY-MM-DD');
          var ldate = moment(end).format('YYYY-MM-DD'); 
            $.ajax({
               method:"get",
               url:'get_sale_product_list/'+sdate+'/'+ldate,
               dataType:"json",
               success:function(data)
               {
                    console.log(data);
                   $('#table1').empty();
                    $.each(data, function(key,value){
                         // $('#table').hide();
                        // if (value.status == 1) {
                            $('#table1').append('<tr><td>'+value.billing_date+'</td><td>'+value.product_name+'</td><td>'+value.quantity+'</td><td>'+value.batch_no+'</td><td>'+value.expiry_date+'</td><td>'+value.rate+'</td><td>'+value.total_amount+'</td><td>'+value.withGSTAmount+'</td><td><img src='+"{{asset('product/')}}/"+value.image+' width="50" height="50"></td></tr>');
                        // }else{
                        //     $('#table1').append('<tr><td>'+value.created_at+'</td><td>'+value.shop_name+'</td><td>'+value.phone+'</td><td>'+value.name+'</td><td>'+value.mobile_no+'</td><td>'+value.product_name+'</td><td>'+value.quantity+'</td><td>'+value.total_amount+'</td><td>'+value.pending_amount+'</td><td><label style="color:red; font-weight:bold;">Not Confirm</label></td><td><form method="post" action='+"{{url('/order_confirm')}}/"+value.product_name+'>@csrf                                        <input type="text" name="message" value="Your Order is Approved By '+value.name+' " hidden>                                        <input type="text" name="quantity" value="'+value.quantity+' " hidden>                                        <input type="text" name="mobile" value="'+value.mobile_no+'" hidden>                                        <button type="submit" class="btn1 btn btn-outline-danger form-group">Confirm</button>                                    </form></td></tr>');
                        // }
                        
                    });
               }
            });
        // });
    }
</script>

@endsection