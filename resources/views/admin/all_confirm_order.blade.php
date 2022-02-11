@extends('admin.desing.sidebar')

@section('content')
<div >
    <div class="card m-2 p-2" >
        <div class="row mt-3 rrb">
            <div class="form-group col-md-6 col-lg-6 col-12 ">
               <h2 class="ml-2">Confirmed Orders</h2> 
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
            <!-- <div class="form-group col-md-4 col-12">
                <div class="search">
                    <input class="search-input form-control" type="text" onkeyup="search();" id="search-input" placeholder="Search Here">
                </div>
            </div> -->
           
        </div>
    
    <div id="hideDiv">
        @if(Session::has('alert'))
            <div class="alert alert-info texts" id="success">
                {{ Session::get('alert') }}
            </div>
        @endif
    </div>
        

      <div class="container table-full-width table-responsive" id="">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th class="order">Date</th>
                        <th class="order">Product Name</th>
                        <th class="order">Quantity</th>
                        <th class="order">Total Amount</th>
                        <th class="order">Name</th>
                        <th class="order">Shop</th>
                        <th class="order">Address</th>
                        <th class="order">Mobile</th>
                        <th class="order">Confirm By</th>
                        <th class="order">Status </th>
                    </tr>
                </thead>
                <!-- <tbody id="table">
                    @foreach($getorder as $getorders)
                    <tr id="tr">
                        <td>{{ $getorders->product_name }}</td>
                        <td>{{ $getorders->quantity }}</td>
                        <td>{{ $getorders->total_amount }}</td>
                        <td>{{ $getorders->name }}</td>
                        <td>{{ $getorders->shop_name }}</td>
                        <td>{{ $getorders->address }}</td>
                        <td>{{ $getorders->mobile_no }}</td>
                        <td>{{ $getorders->updated_at }}</td>
                        <td><label class="lbl">Confirmed <span class="glyphicon glyphicon-ok"></span></label></td>
                    </tr>
                    @endforeach
                </tbody> -->
                <tbody id="table1">
                    
                </tbody>
            </table>  
    </div>
</div> 
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
<script>
    $("#success").ready(function(){
        setTimeout(function() { $("#success").hide(); }, 5000);
    });
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
            // var date1 = document.getElementById('min').value;
            // var date2 = document.getElementById('max').value;
            // alert(date1);
            // var datearray = date1.split("-");
            // var sdate = datearray[0] + '-' + datearray[1] + '-' + datearray[2];
            // var datearray1 = date2.split("-");
            // var ldate = datearray1[0] + '-' + datearray1[1] + '-' + datearray1[2];
            $.ajax({
               method:"get",
               url:'get_all_confirm_order/'+sdate+'/'+ldate,
               dataType:"json",
               success:function(data)
               {
                   $('#table1').empty();
                    $.each(data, function(key,value){
                         // $('#table').hide();
                        // if (value.status == 1) {
                            $('#table1').append('<tr><td>'+value.date+'</td><td>'+value.product_name+'</td><td>'+value.quantity+'</td><td>'+value.total_amount+'</td><td>'+value.name+'</td><td>'+value.shop_name+'</td><td>'+value.address+'</td><td>'+value.mobile_no+'</td><td>'+value.approved_by+'</td><td><label class="lbl">Confirmed <span class="glyphicon glyphicon-ok"></span></label></td></tr>');
                        // }else{
                        //     $('#vendor-li').append('<tr><td>'+value.name+'</td><td>'+value.mobile_no+'</td><td>'+value.shop_name+'</td><td>'+value.phone+'</td><td>'+value.address+'</td><td>'+value.city+'</td><td><label style="color:red; font-weight:bold;">Deactive</label></td><td><div class="row rrb"><a href='+"{{url('/vendor/details')}}/"+value.id+' class="btn1 btn btn-outline-primary form-group mt-1 mr-1" type="button" id="">Open</a><a href='+"{{url('/vendor_active')}}/"+value.id+' class="btn btn-success btn1 form-group mt-1">Active</a></td><td><img src='+"{{asset('/docs/')}}/"+value.fssai+' width="100" height="100"></td></tr>');
                        // }
                        
                    });
               }
            });
        });
    }
</script>

@endsection