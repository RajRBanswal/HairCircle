@extends('admin.desing.sidebar')

@section('content')
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="{{ asset('/main/main.js') }}"></script>
<link type="text/css" rel="stylesheet" href="{{ asset('/css/main.css') }}">
<div class="container p-2">
    <div class="card" >
        <div class="row p-2">
            <div class="form-group col-md-6 col-lg-6 col-12">
                <h2 class="ml-1">All Orders</h2>
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
                <!-- <a href="{{url('/get_confirm_order')}}" class="btn btn-outline-primary btn1" type="submit" id="confirmo" >All Confirm Orders</a> -->
                <!-- <a href="{{url('/all_return_order')}}" class="btn btn-outline-primary btn1" type="submit" id="confirmo" >All Return Order</a> -->
            </div>
        </div>

        <div id="hideDiv">
        @if(Session::has('alert'))
            <div class="alert alert-info texts" id="success">
               {{ Session::get('alert') }}
            </div>
        @endif
    </div>

        <div class="container table-full-width table-responsive" id="">
            <table id="example" class="table table-striped" style="width:100%;">
                <thead>
                    <tr>
                        <th class="order">Date</th>
                        <th class="order">Shop Name</th>
                        <!--<th class="order">Phone</th>-->
                        <th class="order">Owner Name</th>
                        <th class="order">Mobile</th>
                        <th class="order">Order</th>
                        <th class="order">Order_Q / Rem_Q</th>
                        <th class="order">Total Amount</th>
                        <!--<th class="order">Pending Amount</th>-->
                        <th class="order">Payment Mode</th>
                        <th class="order">Payment Status</th>
                        <th class="order">Status</th>
                        <th class="order">Action</th>

                    </tr> 
                </thead>
                <tbody id="table1">
                        
                </tbody>
            </table>
        </div>   

       
    </div>

</div>       

<style type="text/css">
    .texts{
        font-size: 15px;
    }

    .search input{
        font-size: 15px;
        border:solid 1px #DAA520;
        border-radius:0px;
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
    $("#success").ready(function(){
        setTimeout(function() { $("#success").hide(); }, 5000);
    });
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
               url:'get_all_order/'+sdate+'/'+ldate,
               dataType:"json",
               success:function(data)
               {
                   console.log(data);
                   $('#table1').empty();
                    $.each(data, function(key,value){
                         // $('#table').hide();
                        if (value.status == 'done') {
                            $('#table1').append('<tr><td>'+value.date+'</td><td>'+value.shop_name+'</td><td>'+value.name+'</td><td>'+value.mobile_no+'</td><td>'+value.product_name+'</td><td>'+value.quantity+'/<strong>'+value.quant+'</strong></td><td>'+value.withGSTAmount+'</td><td>'+value.pay_mode+'</td><td>'+value.pay_status+'</td><td><label style="color:green; font-weight:bold;">Confirmed</label></td><td class="rrb"><a href='+"{{url('/pdf')}}/"+value.id+' class="btn btn-outline-primary btn1">Print</a></td></tr>');
                        }else{
                            $('#table1').append('<tr><td>'+value.date+'</td><td>'+value.shop_name+'</td><td>'+value.name+'</td><td>'+value.mobile_no+'</td><td>'+value.product_name+'</td><td>'+value.quantity+'/<strong>'+value.quant+'</strong></td><td>'+value.total_amount+'</td><td>'+value.pay_mode+'</td><td>'+value.pay_status+'</td><td><label style="color:red; font-weight:bold;">Not Confirm</label></td><td class="rrb"><a href='+"{{url('/order_edit')}}/"+value.id+' class="btn btn-outline-primary btn1">Edit</a></td></tr>');
                        }
                        
                    });
               }
            });
        });
    }
    
    //  $('#table1').append('<tr><td>'+value.date+'</td><td>'+value.shop_name+'</td><td>'+value.phone+'</td><td>'+value.name+'</td><td>'+value.mobile_no+'</td><td>'+value.product_name+'</td><td>'+value.quantity+'/'+value.quant+'</td><td>'+value.total_amount+'</td><td>'+value.pending_amount+'</td><td><label style="color:red; font-weight:bold;">Not Confirm</label></td><td><form method="post" action='+"{{url('/order_confirm')}}/"+value.id+'>@csrf                                        <input type="text" name="message" value="Your Order is Approved By '+value.name+' " hidden> <input type="text" name="v_id" value="'+value.vendor_id+' " hidden>          <input type="text" name="product_name" value="'+value.product_name+' " hidden>                                        <input type="text" name="quantity" value="'+value.quantity+' " hidden>                                        <input type="text" name="mobile" value="'+value.mobile_no+'" hidden>                                        <button type="submit" class="btn1 btn btn-outline-danger form-group">Confirm</button>                                    </form></td></tr>');

</script>



@endsection