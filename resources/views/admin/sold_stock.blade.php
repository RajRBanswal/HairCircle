@extends('admin.desing.sidebar')

@section('content')
<div class="card m-3 p-2">
    <div class="row mt-3 ">
        <div class="form-group col-md-6 col-12">
            <h2 class="ml-2">Sold Product</h2>
        </div>
        <div class="form-group col-md-6 col-12" style="font-size:15px">
            <div class="row">
                <div class="col-md-6 col-6 "> <p class="mx-1 py-2 text-center">Total Sold Product : <strong >{{count($total)}}</strong> </p></div>
            
                <div class="col-md-6 col-6 "><p class="mx-1 py-2 text-center">Today's Sold Product : <strong>{{count($today)}}</strong></p></div>
            </div>
        </div>
    </div>
    <div class="row rrb">
        <div class="form-group col-md-6 col-12">
            <!-- <a href="{{url('/add_product')}}" class=" btn btn-outline-primary btn1">Add Product</a> -->
        </div>
        <div class="form-group col-md-6 col-12">
            <!-- <div class="search">
                <input class="search-input form-control text-center" type="text" id="search-input" onkeyup="search();" placeholder="Search Here">
            </div> -->
        </div>
    </div>

   <div id="hideDiv">
        @if(Session::has('alert'))
            <div class="alert alert-info texts" id="success">
                        <li>{{ Session::get('alert') }}</li>
            </div>
        @endif
    </div>
        <div class="row">
            <div class="form-group col-lg-6 col-md-6 col-12"></div>
            <div class="form-group col-lg-6 col-md-6 col-12">
                <div class="row">
                    <div class="form-group col-lg-6 col-md-6 col-12">
                        <div id="reportrange" class="pull-left" style="background: #fff; cursor: pointer; padding: 6px; border: 1px solid #DAA520; border-radius: 5px; width:100%">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                            <span></span> <b class="caret"></b>
                        </div>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-12">
                        <div class="search">
                            <input class="search-input form-control search" type="text" onkeyup="search();" id="search-input" placeholder="Search Here">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container table-full-width table-responsive" id="">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th class="order">Date</th>
                        <th class="order">Buyer Name</th>
                        <th class="order">Product</th>
                        <th class="order">Purchase Amount</th>
                        <th class="order">Quantity</th>
                        <th class="order">Amount</th>
                        <th class="order">Approved By</th>
                        <th class="order">Status</th>

                    </tr>
                </thead>
                <tbody id="table1">
                   
                    <!-- @foreach($sold as $product)
                    <tr id="tr"> -->
                       <!--  <td><img src="product/{{ $product->image}}" width="100" height="100"></td> -->
                        <!-- <td>{{ $product->updated_at }}</td>                      
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->quantity }}</td> 
                        <td>{{ $product->total_amount }}</td>
                        <td><label style="color:green; font-weight: bold;">Done</label></td>
                    </tr>
                    @endforeach -->
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
        $("#table1 tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
}

        $("#success").ready(function(){
            setTimeout(function() { $("#success").hide(); }, 5000);
        });
            
</script>
<script type="text/javascript">
function Search_date(start, end){
        // $(document).ready(function(){
          var sdate = moment(start).format('YYYY-MM-DD');
          var ldate = moment(end).format('YYYY-MM-DD'); 
            $.ajax({
               method:"get",
               url:'get_sold_product_list/'+sdate+'/'+ldate,
               dataType:"json",
               success:function(data)
               {
                    console.log(data);
                   $('#table1').empty();
                    $.each(data, function(key,value){
                            $('#table1').append('<tr><td>'+value.billing_date+'</td><td>'+value.name+'</td><td>'+value.product_name+'</td><td>'+value.rate+'</td><td>'+value.quantity+'</td><td>'+value.total_amount+'</td><td>'+value.approved_by+'</td><td><label style="color:green;font-weight:bold;">Done</label></td></tr>');


                        
                    });
               }
            });
        // });
    }
</script>
@endsection