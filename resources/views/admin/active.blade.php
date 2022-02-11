@extends('admin.desing.sidebar')

@section('content')
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="{{ asset('/main/main.js') }}"></script>
<link type="text/css" rel="stylesheet" href="{{ asset('/css/main.css') }}">
<div class="card m-2 p-2">
    <div class="row mt-3">
      <div class="col-lg-6 col-12">
        <h1 class="ml-3">Vendors List</h1>
      </div>
        <div class="col-lg-6 col-12" style="font-size:15px">
            <div class="row">
                <div class="col-md-6 col-6 "> <p class=" text-center">Total Vendors : <strong >{{count($total)}}</strong> </p></div>
                
                <div class="col-md-6 col-6"><p class=" text-center">Today's Joined Vendors : <strong>{{count($today)}}</strong></p></div>
            </div>
        </div>
    </div>
    
        <div class="row">
            <div class="form-group col-lg-6 col-md-6 col-12"></div>
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


      <div class="container table-full-width table-responsive" id="">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th class="order">Date</th>
                        <th class="order">Owner Name</th>
                        <th class="order">Mobile</th>
                        <th class="order">Shop Name</th>
                        <th class="order">Phone No.</th>
                        <th class="order">Address</th>
                        <th class="order">City</th>
                        <th class="order">Status</th>
                        <th class="order">KYC Confime By</th>
                        <th class="order">Action</th>
                        <!--<th class="order">FSSAI</th>-->
                    </tr>
                </thead>
         <!--        <tbody id="table">
                    @foreach($vendors as $vendor)
                    <tr id="tr">
                         -->
                        <!-- <td>{{ $vendor->name }}</td>
                        <td>{{ $vendor->mobile_no }}</td>
                        <td>{{ $vendor->shop_name }}</td>
                        <td>{{ $vendor->phone }}</td>
                        <td>{{ $vendor->address }}</td>
                        <td>{{ $vendor->city }}</td>
                        <td>
                            @if($vendor->status == 1)
                            <label style="color:green; font-weight:bold;">Active</label>
                            @else
                            <label style="color:red; font-weight:bold;">Deactive</label>
                            @endif
                        </td>
                        <td>
                            <div class="row rrb">
                                
                                <a href="{{url('/vendor/details',$vendor->id)}}" class="btn1 btn btn-outline-primary form-group mt-1 mr-1" type="button" id="">Open</a>
                                
                                @if($vendor->status == 1)
                                <a href="{{url('/vendor_deactive',$vendor->id)}}" class="btn1 btn btn-danger form-group mt-1" type="button" id="">Deactive</a>
                                @else
                                    <a href="{{url('/vendor_active',$vendor->id)}}" class="btn btn-success btn1 form-group mt-1">Active</a>
                                @endif
                            </div>
                        </td>
                        <td><img src="{{asset('/docs/')}}/{{$vendor->fssai}}" width="100" height="100"></td>
                    </tr>
                    @endforeach
                </tbody> -->
                <tbody id="vendor-li">
                    
                </tbody>
            </table>
        </div>
</div>

<style type="text/css">

.search input{
    font-size: 15px;
    border:solid 1px #DAA520;
    border-radius:0px;
}
.text-center{
    border:solid 1px #DAA520;
}
 .rrb .btn1:hover{
  background-color: #000;
  color: #fff;
}
.rrb .btn1{
  color: #000;
  border-color: #DAA520;
  height:100%;
  font-size: 12px;
  padding: 5px;
}
</style>

<script type="text/javascript">
function search(){  
    $("#search-input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#vendor-li tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
}

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
               url:'get_vendor_list/'+sdate+'/'+ldate,
               dataType:"json",
               success:function(data)
               {
                   $('#vendor-li').empty();
                    $.each(data, function(key,value){
                         $('#table').hide();
                        if (value.status == 1) {
                            $('#vendor-li').append('<tr><td>'+value.date+'</td><td>'+value.name+'</td><td>'+value.mobile_no+'</td><td>'+value.shop_name+'</td><td>'+value.phone+'</td><td>'+value.address+'</td><td>'+value.city+'</td><td><label style="color:green; font-weight:bold;">Active</label></td><td>'+value.kyc_confirm_by+'</td><td><div class="row rrb"><a href='+"{{url('/vendor/details')}}/"+value.id+' class="btn1 btn btn-outline-primary form-group mt-1 mr-1" type="button" id="">Open</a><a href='+"{{url('/vendor_deactive')}}/"+value.id+' class="btn1 btn btn-danger form-group mt-1" type="button" id="">Deactive</a></td></tr>');
                        }else{
                            $('#vendor-li').append('<tr><td>'+value.date+'</td><td>'+value.name+'</td><td>'+value.mobile_no+'</td><td>'+value.shop_name+'</td><td>'+value.phone+'</td><td>'+value.address+'</td><td>'+value.city+'</td><td><label style="color:red; font-weight:bold;">Deactive</label></td><td>'+value.kyc_confirm_by+'</td><td><div class="row rrb"><a href='+"{{url('/vendor/details')}}/"+value.id+' class="btn1 btn btn-outline-primary form-group mt-1 mr-1" type="button" id="">Open</a><a href='+"{{url('/vendor_active')}}/"+value.id+' class="btn btn-success btn1 form-group mt-1">Active</a></td><td></td>'+value.kyc_confirm_by+'</tr>');
                        }
                        
                    });
               }
            });
        });
    }
    // <img src='+"{{asset('/docs/')}}/"+value.fssai+' width="100" height="100">
</script>


    @endsection