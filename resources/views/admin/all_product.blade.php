@extends('admin.desing.sidebar')

@section('content')
<div class="card m-3 p-2">
    <div class="row mt-3 ">
        <div class="form-group col-md-6 col-12">
            <h2 class="ml-2">Product List</h2>
        </div>
        <div class="form-group col-md-6 col-12" style="font-size:15px">
            <div class="row">
                <div class="col-md-6 col-6 "> <p class="text-center">Total Product : <strong >{{count($total)}}</strong> </p></div>
            
                <div class="col-md-6 col-6 "><p class="text-center">Today's Added Product : <strong>{{count($today)}}</strong></p></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6 col-lg-6 col-12">
            <!-- <a href="{{url('/add_product')}}" class=" btn btn-outline-primary btn1">Add Product</a> -->
        </div>
        <div class="form-group col-md-6 col-lg-6 col-12">
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
           <!--  <div class="search">
                <input class="search-input form-control text-center" type="text" id="search-input" onkeyup="search();" placeholder="Search Here">
            </div> -->
        </div>
    </div>
   <div id="hideDiv">
        @if(Session::has('alert'))
            <div class="alert alert-info texts" id="success">
               {{ Session::get('alert') }}
            </div>
        @endif
    </div>
        <!--<div class="row">-->
        <!--    <div class="form-group col-lg-8 col-md-8 col-12"></div>-->
        <!--    <div class="form-group col-lg-4 col-md-4 col-12">-->
        <!--        <div id="reportrange" class="pull-left" style="background: #fff; cursor: pointer; padding: 6px; border: 1px solid #DAA520; border-radius: 5px; width:100%">-->
        <!--            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;-->
        <!--            <span></span> <b class="caret"></b>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="row">-->
        <!--    <div class="form-group col-md-8"></div>-->
        <!--    <div class="form-group col-md-4 col-12">-->
        <!--        <div class="search">-->
        <!--            <input class="search-input form-control search" type="text" onkeyup="search();" id="search-input" placeholder="Search Here">-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <div class="container table-full-width table-responsive" id="">
            <table id="example" class="table table-striped mt-3" style="width:100%">
                <thead>
                    <tr>
                        <th class="order">Date</th>
                        <th class="order">Product</th>
                        <th class="order">Quantity</th>
                        <th class="order">Batch No.</th>
                        <th class="order">Expiry Date</th>
                        <th class="order">MRP</th>    
                        <th class="order">Rate</th>
                        <th class="order">Total Amount</th>
                        <th class="order">Image</th>
                        <!--<th class="order">Date</th>-->
                         <th class="order">Action</th> 

                    </tr>
                </thead>
                <!-- <tbody id="table">
                   
                    @foreach($produ as $product)

                    <tr id="tr"> -->
                       <!--  <td><img src="product/{{ $product->image}}" width="100" height="100"></td> -->
                        <!-- <td>{{ $product->product_name }}</td>
                        <td>{{ $product->quantity }}</td>                       
                        <td>{{ $product->batch_no }}</td>
                        <td>{{ $product->expiry_date }}</td>
                        <td>{{ $product->mrp }}</td>  
                        <td>{{ $product->rate }}</td>
                        <td>{{ $product->total_amount }}</td>  -->
                        
                        
                        <!-- <td><img src="product/{{ $product->image}}" width="50" height="50"></td>                     
                        <td>{{ $product->created_at }}</td> -->
                        <!-- <td> -->
                            <!-- <div class="row rrb"> -->
                                
                              <!--   <a href="{{url('/members/open',$product->id)}}" class="col-md-3 mx-1 btn btn-outline-primary mt-1 " type="button" id="">Open</a> -->
                               <!-- <a href="{{url('/product/edit',$product->id)}}" class="mr-1 btn btn-outline-success form-group btn1" type="button" id="">Edit</a> -->
                              <!-- <a href="{{url('/product/delete',$product->id)}}" class="btn1 btn btn-outline-danger form-group btn1" type="button" id="">Delete</a> -->
                                
                                
                                <!-- <a href="/members/edit/{{$product->id}}" class="col-md-3 mx-1 btn btn-outline-success mt-1 " type="button" id="">Edit</a> -->
                                
                                
                            <!-- </div> -->
                        <!-- </td> -->
                   <!--  </tr>
                    @endforeach
                </tbody> -->
                <tbody id="table1">
                    
                </tbody>
            </table>
        </div>
         <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Product Details</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" id="product_data">

            
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
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
    td{
        font-size: 17px;
    }
</style>
<script>
function search(){
    $("#search-input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#table1 tr").filter(function() {
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
               url:'get_all_product_list/'+sdate+'/'+ldate,
               dataType:"json",
               success:function(data)
               {
                    console.log(data);
                   $('#table1').empty();
                    $.each(data, function(key,value){
                         // $('#table').hide();
                        // if (value.status == 1) {
                            $('#table1').append('<tr><td>'+value.date+'</td><td>'+value.product_name+'</td><td>'+value.quantity+'</td><td>'+value.batch_no+'</td><td>'+value.expiry_date+'</td><td>'+value.mrp+'</td><td>'+value.rate+'</td><td>'+value.total_amount+'</td><td><img src='+"{{asset('/product')}}/"+value.image+' width="50" height="50"></td><td class="rrb"><a onclick="get_product_detail('+value.id+')" class="btn btn-outline-primary btn1" type="button" id="" data-bs-toggle="modal" data-bs-target="#myModal">Open</a></td></tr>');
                        // }else{
                        //     $('#table1').append('<tr><td>'+value.created_at+'</td><td>'+value.shop_name+'</td><td>'+value.phone+'</td><td>'+value.name+'</td><td>'+value.mobile_no+'</td><td>'+value.product_name+'</td><td>'+value.quantity+'</td><td>'+value.total_amount+'</td><td>'+value.pending_amount+'</td><td><label style="color:red; font-weight:bold;">Not Confirm</label></td><td><form method="post" action='+"{{url('/order_confirm')}}/"+value.product_name+'>@csrf                                        <input type="text" name="message" value="Your Order is Approved By '+value.name+' " hidden>                                        <input type="text" name="quantity" value="'+value.quantity+' " hidden>                                        <input type="text" name="mobile" value="'+value.mobile_no+'" hidden>                                        <button type="submit" class="btn1 btn btn-outline-danger form-group">Confirm</button>                                    </form></td></tr>');
                        // }
                        
                    });
               }
            });
        // });
    }
</script>
<script type="text/javascript">
    function get_product_detail(id) {
        $.ajax({
               method:"get",
               url:'p_detail/'+id,
               dataType:"json",
               success:function(data)
               {
                    console.log(data);
                    $('#product_data').empty();
                    $.each(data, function(key,value){
                            $('#product_data').append('<div class="row"><div class="form-group col-lg-4 col-md-4 col-12"><span>Product Name  </span><label><span>:- </span> '+value.product_name+'</label><br/><span>Batch No  </span><label><span>:- </span> '+value.batch_no+'</label><br/><span>HSN No</span><label><span>:- </span> '+value.hsn+'</label><br/><span>Expiry Date </span><label><span>:- </span> '+value.expiry_date+'</label></div><div class="form-group col-lg-4 col-md-4 col-12"><span>MRP </span><label><span>:- </span> '+value.mrp+'</label><br /><span>Purchase Rate  </span><label><span>:- </span> '+value.rate+'</label><br /> <span>Quantity  </span><label><span>:- </span> '+value.quantity+'</label><br /><span>Total Amount  </span><label><span>:- </span> '+value.total_amount+'</label></div><div class="form-group col-lg-4 col-md-4 col-12"><span>GST </span><label><span>:- </span> '+value.GST+'</label><br /><span>Taxable Amount  </span><label><span>:- </span> '+value.taxable_amount+'</label><br /><span>Discount  </span><label><span>:- </span> '+value.discount+'</label><br /><span>Discounted Amount  </span><label><span>:- </span> '+value.ad_amount+'</label></div></div>');
                        
                    });
               }
            });
    }
</script>

@endsection