@extends('admin.desing.sidebar')

@section('content')
<!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="{{ asset('/main/main.js') }}"></script>
<link type="text/css" rel="stylesheet" href="{{ asset('/css/main.css') }}"> -->
<div class="card m-2 p-2">
    <div class="row mt-3">
        <div class="form-group col-lg-6 col-12">
            <h1 class="ml-3">All Customers</h1>
        </div>
        <div class="form-group col-lg-6 col-12" style="font-size:15px">
            <div class="row">
                <div class="form-group col-lg-6 col-md-6 col-12"> <p class="text-center">Total User : <strong >{{count($total)}}</strong> </p></div>
            
                <div class="form-group col-lg-6 col-md-6 col-12"><p class="text-center">Today's Joined Users : <strong>{{count($today)}}</strong></p></div>
            </div>
        </div>
    </div>
    <!-- <div class="row">
        <div class="form-group col-md-6"></div>
        <div class="form-group col-md-6 col-12">
            <div class="row">
                <div class="form-group col-md-5 col-12 col-lg-5">
                    <input type="date" name="min" id="min" class="form-control text-center">
                </div>
                <div class="form-group col-md-5 col-12 col-lg-5">
                    <input type="date" name="max" id="max" class="form-control text-center">
                </div>
                <div class="form-group col-md-2 col-12 col-lg-2 rrb">
                    <input type="submit" name="search" class="btn btn-outline-primary btn1" onclick="Search_date();" value="Search">
                </div>
            </div>
            <div class="search">
                <input class="search-input form-control" type="text" id="search-input" onkeyup="search();" placeholder="Search Here">
            </div> 
        </div>
    </div> -->
    <div class="row">
            <div class="form-group col-lg-6 col-md-6 col-12"></div>
            <div class="form-group col-lg-3 col-md-3 col-12">
                <div class="search">
                    <input class="search-input form-control search" type="text" onkeyup="search();" id="search-input" placeholder="Search Here">
                </div>
            </div>
            <div class="form-group col-lg-3 col-md-3 col-12">
                <div id="reportrange" class="pull-left" style="background: #fff; cursor: pointer; padding: 7px; border: 1px solid #DAA520; width:100%">
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                    <span></span> <b class="caret"></b>
                </div>
            </div>
            
        </div>

        <div class="container table-full-width table-responsive" id="">
            <table id="example" class="table table-striped mt-3" style="width:100%">
                <thead>
                    <tr>
                        <th class="order">Date</th>
                        <th class="order">Name</th>
                        <th class="order">Mobile</th>
                        <th class="order">Address</th>
                        <th class="order">City</th>
                        <th class="order">Action</th>

                    </tr>
                </thead>
                <!-- <tbody id="table">
                    @foreach($customer as $member)
                   <tr id="tr">
                        <td >{{ $member->name }}</td>
                        <td>{{ $member->mobile_no }}</td>
                        <td>{{ $member->address }}, {{$member->city}}, {{ $member->state}}, {{$member->pincode}}</td>
                        <td>{{ $member->created_at }}</td>
                        <td>
                            <div class="row rrb"> 
                                <a href="{{url('/customer/open',$member->id)}}" class="btn1 btn btn-outline-primary mt-1 mr-1" type="button" >View</a>
                                <a href="/members/edit/{{$member->id}}" class=" btn1 btn btn-outline-primary mt-1" type="button" id="">Edit</a>
                                
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody> -->
                <tbody id="table1"></tbody>
            </table>   
        </div>   
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
                }


</style>
<script type="text/javascript">   
function search(){
    $("#search-input").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#table1 tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
}
// function search(){  
//     $("#search-input").on("keyup", function() {
//         var value = $(this).val().toLowerCase();
//         $("#table tr").filter(function() {
//             $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//         });
//     });
// }

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
               url:'get_members_list/'+sdate+'/'+ldate,
               dataType:"json",
               success:function(data)
               {
                console.log(data);
                   $('#table1').empty();
                    $.each(data, function(key,value){
                         // $('#table').hide();
                        // if (value.status == null) {
                            $('#table1').append('<tr><td>'+value.date+'</td><td>'+value.name+'</td><td>'+value.mobile_no+'</td><td>'+value.address+'</td><td>'+value.city+','+value.pincode+'</td><td class="rrb"><a href='+"{{url('/customer/open')}}/"+value.id+' class="btn1 btn btn-outline-primary mt-1 mr-1" type="button" >View</a></td></tr>');                        
                        //     }else{
                        //     $('#table1').append('<tr><td>'+value.name+'</td><td>'+value.mobile_no+'</td><td>'+value.shop_name+'</td><td>'+value.phone+'</td><td>'+value.address+'</td><td>'+value.city+'</td><td><label style="color:red; font-weight:bold;">Deactive</label></td><td><div class="row rrb"><a href='+"{{url('/vendor/details')}}/"+value.id+' class="btn1 btn btn-outline-primary form-group mt-1 mr-1" type="button" id="">Open</a><a href='+"{{url('/vendor_active')}}/"+value.id+' class="btn btn-success btn1 form-group mt-1">Active</a></td><td><img src='+"{{asset('/docs/')}}/"+value.fssai+' width="100" height="100"></td></tr>');
                        // }
                        
                    });
               }
            });
        });
    }
</script>
</script>




@endsection