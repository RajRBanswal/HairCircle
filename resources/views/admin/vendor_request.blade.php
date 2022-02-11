@extends('admin.desing.sidebar')

@section('content')
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="{{ asset('/main/main.js') }}"></script>
<link type="text/css" rel="stylesheet" href="{{ asset('/css/main.css') }}">
<div class="card m-3 p-2">
        <div class="row mt-3">
            <div class="form-group col-md-6 col-lg-6 col-12">
                <h2 class="ml-3">Vendor Request</h2>
            </div>
            <div class="form-group col-md-6 col-lg-6 col-12 p-1">
                <div class="row">
                    <div class="form-group col-lg-6 col-md-6 col-12">
                        <div class="search">
                            <input class="search-input form-control search" type="text" onkeyup="search();" id="search-input" placeholder="Search Here">
                            <input class="search-input form-control search" type="text" onkeyup="search1();" id="search-input1" placeholder="Search Here" style="display:none">
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
        <div class="row rrb1">
            <div class="form-group col-lg-6 col-12">
                <button type="button" class="btn btn-outline-danger btn2" onclick="display_v()">New Vendor Signed Up Request</button>
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
       <div class="container table-full-width table-responsive" id="request">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th class="order">Date</th>
                        <th class="order">Name</th>
                        <th class="order">Mobile</th>
                        <!--<th class="order">Subject</th>-->
                        <th class="order">Message</th>
                        <th class="order">Documents</th>
                        <th class="order">Action </th>

                    </tr>
                </thead>
                <!-- <tbody id="table">
                    @foreach($request as $requests)
                    <tr id="tr">
                        <td>{{ $requests->name }}</td>
                        <td>{{ $requests->mobile }}</td>
                        <td>{{ $requests->subject }}</td>
                        <td>{{ $requests->reason }}</td>
                        <td>{{ $requests->created_at }}</td>
                        <td class="rrb">
                            <a href="" class="btn1 btn btn-outline-info form-group">View</a>
                            <a href="{{url('/enquiry_del',$requests->id)}}" class="btn1 btn btn-outline-danger form-group">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody> -->
                <tbody id="table1">
                    
                </tbody>
            </table>
          
            
        </div>
         <div class="container table-full-width table-responsive" id="vendor" style="display:none">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th class="order">Owner Name</th>
                        <th class="order">Mobile</th>
                        <th class="order">Shop Name</th>
                        <th class="order">Phone No.</th>
                        <th class="order">Address</th>
                        <th class="order">City</th>
                        <th class="order">Status</th>
                        <th class="order">Action</th>
                        <th class="order">FSSAI</th>
                    </tr>
                </thead>
                <tbody id="vendor-li">
                    
                </tbody>
            </table>
        </div>
        
    </div>




</div>

<style type="text/css">
    .btn1{
    font-size: 15px;
    }
    .search input{
        font-size: 15px;
        border:solid 1px #DAA520;
    }
    td{
        font-size: 17px;
    }

                .rrb .btn1:hover{
                    color: #fff;
                  background-color: #000;
                  
                }
              
                .rrb .btn1{
                  color: #000;
                  border-color: #DAA520;
                  width:100px;
                }
                .rrb1 .btn2:hover{
                   color: #fff;
                  background-color: #000;
                }
                .rrb1 .btn2{
                  color: #000;
                  border-color: #DAA520;

                }
</style>
<script>
    setTimeout(function() {
    $('#hideDiv').fadeOut('fast');
}, 5000); // <-- time in milliseconds

function display_v(){
    $('#request').toggle();
    $('#vendor').toggle();
    $('#search-input').toggle();
    $('#search-input1').toggle();
}
</script>
<script>
function search(){ 
    $("#search-input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#table1 tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
}
</script>
<script>
function search1(){ 
    $("#search-input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("##vendor-li tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
}
</script>
<script type="text/javascript">
function Search_date(start, end){
        $(document).ready(function(){
             Get_New_Vndor(start, end);
          var sdate = moment(start).format('YYYY-MM-DD');
          var ldate = moment(end).format('YYYY-MM-DD'); 
            $.ajax({
               method:"get",
               url:'get_all_request/'+sdate+'/'+ldate,
               dataType:"json",
               success:function(data)
               {    
                   console.log(data);
                   $('#table1').empty();
                    $.each(data, function(key,value){
                         // $('#table').hide();
                        // if (value.status == 1) {
                            $('#table1').append('<tr><td>'+value.date+'</td><td>'+value.name+'</td><td>'+value.mobile_no+'</td><td>'+value.reason+'</td><td><img src='+"{{asset('/docs')}}/"+value.images+' width="50px" height="50px"></td><td class="rrb"><a href='+"{{url('/vendor/details')}}/"+value.v_id+' class="btn1 btn btn-outline-primary form-group mt-1 mr-1" type="button" id="">Open</a><a href='+"{{url('/vendor_active')}}/"+value.v_id+' class="btn btn-success btn1 form-group mt-1">Activate</a><a href='+"{{url('/enquiry_del')}}/"+value.id+' class="btn1 btn btn-outline-danger form-group">Delete</a></td></tr>');
                        // }else{
                        //     $('#vendor-li').append('<tr><td>'+value.name+'</td><td>'+value.mobile_no+'</td><td>'+value.shop_name+'</td><td>'+value.phone+'</td><td>'+value.address+'</td><td>'+value.city+'</td><td><label style="color:red; font-weight:bold;">Deactive</label></td><td><div class="row rrb"><a href='+"{{url('/vendor/details')}}/"+value.id+' class="btn1 btn btn-outline-primary form-group mt-1 mr-1" type="button" id="">Open</a><a href='+"{{url('/vendor_active')}}/"+value.id+' class="btn btn-success btn1 form-group mt-1">Active</a></td><td><img src='+"{{asset('/docs/')}}/"+value.fssai+' width="100" height="100"></td></tr>');
                        // }
                        
                    });
               }
            });
        });
    }
</script>
<script type="text/javascript">
function Get_New_Vndor(start, end){
        $(document).ready(function(){
          var sdate = moment(start).format('YYYY-MM-DD');
          var ldate = moment(end).format('YYYY-MM-DD'); 
            $.ajax({
               method:"get",
               url:'get_vendor_list/'+sdate+'/'+ldate,
               dataType:"json",
               success:function(data)
               {    
                   console.log(data);
                   $('#vendor-li').empty();
                    $.each(data, function(key,value){
                        //  $('#table').hide();
                        // if (value.status == 1) {
                        //     // $('#vendor-li').append('<tr><td>'+value.name+'</td><td>'+value.mobile_no+'</td><td>'+value.shop_name+'</td><td>'+value.phone+'</td><td>'+value.address+'</td><td>'+value.city+'</td><td><label style="color:green; font-weight:bold;">Active</label></td><td><div class="row rrb"><a href='+"{{url('/vendor/details')}}/"+value.id+' class="btn1 btn btn-outline-primary form-group mt-1 mr-1" type="button" id="">Open</a><a href='+"{{url('/vendor_deactive')}}/"+value.id+' class="btn1 btn btn-danger form-group mt-1" type="button" id="">Deactive</a></td><td><img src='+"{{asset('/docs/')}}/"+value.fssai+' width="100" height="100"></td></tr>');
                        // }
                        if (value.status == 0){
                            $('#vendor-li').append('<tr><td>'+value.name+'</td><td>'+value.mobile_no+'</td><td>'+value.shop_name+'</td><td>'+value.phone+'</td><td>'+value.address+'</td><td>'+value.city+'</td><td><label style="color:red; font-weight:bold;">Deactive</label></td><td><div class="row rrb"><a href='+"{{url('/vendor/details')}}/"+value.id+' class="btn1 btn btn-outline-primary form-group mt-1 mr-1" type="button" id="">Open</a><a href='+"{{url('/vendor_active')}}/"+value.id+' class="btn btn-success btn1 form-group mt-1">Active</a></td><td><img src='+"{{asset('/docs/')}}/"+value.fssai+' width="100" height="100"></td></tr>');
                        }
                        
                    });
               }
            });
        });
    }
</script>




@endsection