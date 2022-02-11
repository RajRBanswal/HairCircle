@extends('admin.desing.sidebar2')


@section('content')

<div class="card m-3 p-2">
    <div class="row mt-3 p-2">
        <div class="form-group col-lg-6 col-md-6 col-12">
            <h3 class="ml-3">All Customer</h3>
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
    <div id="hideDiv">
              @if ($message = Session::get('alert'))  
                <div class="alert alert-info">  
                    {{ $message }}
                </div>
              @endif
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
                        <!-- <th>Vendor</th> -->
                        <th class="order">Status</th>
                        <th class="order">Action</th>
                    </tr>
                        
                </thead>
       
                
                <!--<tbody id="table">-->
                <!--    @foreach($new_p_orders as $pa)-->
                <!--    <tr id="tr">-->
                <!--        <td><span>{{$pa->name}}</span></td>                   -->
                <!--        <td><span>{{$pa->kit}}</span></td>-->
                <!--        <td><span>{{$pa->quantity}}</span></td>-->
                <!--        <td><span>{{$pa->buying_price}}</span></td>-->
                <!--        <td><span>{{$pa->pay_mode}}</span></td>-->
                <!--        <td><span>{{$pa->created_at}}</span></td>-->
                <!--        <td>-->
                <!--            @if($pa->status == 1)-->
                <!--             <label style="color:green; font-weight:bold;">Confirm</label>-->
                <!--            @else-->
                <!--             <label style="color:red; font-weight:bold;">Not Confirm</label>-->
                <!--             @endif-->
                <!--        </td>-->
                <!--        <td class="rrb">-->
                <!--            <a href="{{url('/update_customer_details',$pa->id)}}" class="btn btn-outline-primary btn1 mr-1 mt-1">View</a>-->
                <!--            @if($pa->status != 1)-->
                <!--            <a href="{{url('/update_cust_d',$pa->user_id)}}" class="btn btn-outline-primary btn1 mt-1">Confirm</a>-->
                <!--            @endif-->
                            <!-- <a href="" class="btn btn-outline-primary btn1 ">Delete</a> -->
                <!--        </td>-->
                <!--     </tr>-->
                <!--    @endforeach-->
                <!--</tbody>-->
                
                 <tbody id="table1">
                </tbody>
            </table> 
        </div>   
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
                   $('#table1').empty();
                    $.each(data, function(key,value){
                        // $('#table').hide();
                        if (value.status == 1) {
                            $('#table1').append('<tr><td>'+value.date+'</td><td>'+value.name+'</td><td>'+value.kit+'</td><td>'+value.quantity+'</td><td>'+value.buying_price+'</td><td><label style="color:green; font-weight:bold;">Confirm</label></td><td class="rrb"><a href='+"{{url('/update_customer_details')}}/"+value.id+' class="btn btn-outline-primary btn1 mr-1 mt-1">View</a></td></tr>');
                        }else{
                            $('#table1').append('<tr><td>'+value.date+'</td><td>'+value.name+'</td><td>'+value.kit+'</td><td>'+value.quantity+'</td><td>'+value.buying_price+'</td><td><label style="color:red; font-weight:bold;">Not Confirm</label></td><td class="rrb"><a href='+"{{url('/update_customer_details')}}/"+value.id+' class="btn btn-outline-primary btn1 mr-1 mt-1">View</a></td></tr>');
                        }   
                    });

               }
            });
        });
    }
            
// <a href='+"{{url('/update_cust_d')}}/"+value.user_id+' class="btn btn-outline-primary btn1 mt-1">Confirm</a>

function get_new_vndor(start, end){
    
}
</script>

 
@endsection