@extends('admin.desing.sidebar')

@section('content')
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="{{ asset('main/main.js') }}"></script>
<link type="text/css" rel="stylesheet" href="{{ asset('css/main.css') }}">
<style type="text/css">
/*.bg {
    background-image: linear-gradient(to bottom right, #403836, #de5f35);
}*/
</style>
<div class="container" style="background-color: #EBECF0; border-radius: 5px;" >
    <div class="row p-3" >
        <div class="form-group col-md-4 col-lg-4 col-12">
            <div class="text-center">
                <a href="{{url('/my_dashbord')}}" class="logo"><img src="img/logo/hairlogo.jpeg" class="shadow" width="200" height="200" style="border-radius: 50%;"></a>
            </div>
            <div class="h1 text-center">
                <h1>Divit Enterprises</h1>
            </div>
        </div>
        <div class="form-group col-md-2 col-lg-2"></div>
        <div class="form-group col-md-6 col-lg-6 col-12">
            <div class="row">
                <div class="form-group col-md-6 col-lg-6 col-12 rrb">
                    <h3 class="text-center">Vendors</h3><hr/>
                    <a href="{{url('/vendor_list')}}" class="btn btn-outline-primary btn1 mb-1 form-control abcdfg">Total Vendor  <strong>  {{count($vendors)}}</strong></a>
                    <a href="{{url('/vendor_request')}}" class="btn btn-outline-primary btn1 mb-1 form-control abcdfg">Total Request    <strong>  {{count($request)}}</strong></a>
                    <a href="{{url('/all_order')}}" class="btn btn-outline-primary btn1 mb-1 form-control abcdfg">Purchase Orders   <strong>    {{count($purchase_order)}}</strong></a>
                    <a href="{{url('/sold_offline')}}" class="btn btn-outline-primary btn1 mb-1 form-control abcdfg">Sold Offline   <strong>    {{count($sold_offline)}}</strong></a>
                </div>
                <div class="form-group col-md-6 col-lg-6 col-12 rrb">
                    <h3 class="text-center">Customers</h3><hr/>
                    <a href="{{url('/customer_list')}}" class="btn btn-outline-primary btn1 mb-1 form-control abcdfg">Total Customers   <strong>    {{count($customer)}}</strong></a>
                    <!-- <button class="btn btn-outline-primary btn1 mb-1 form-control">New Customers</button> -->
                    <a href="{{url('/customer_cash_claim')}}" class="btn btn-outline-primary btn1 mb-1 form-control abcdfg">Customer Cash Claim    <strong>   {{count($cash_claim)}}</strong></a>
                    <a href="" class="btn btn-outline-primary btn1 mb-1 form-control abcdfg">Customer Purchase Orders</a>              
                </div>
            </div>
            
        </div>
    </div>
    <!-- The Modal -->
        <div class="modal" id="admin_reset_password">
          <div class="modal-dialog">
            <div class="modal-content">
             <form  method="POST"  action="{{url('/admin_frpass')}}">
                @csrf
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Reset Password</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
        
              <!-- Modal body -->
              <div class="modal-body">
               
                     <div class="input-group form-group">
                        <input type="text" name="email_or_mo" class="form-control" placeholder="Mobile Or Email">
                    </div>  
                    <div class="input-group form-group">
                        <input type="password" name="password" class="form-control" placeholder="password">
                    </div>
                    <!--<div class="form-group">-->
                    <!--    <input type="submit" value="Update" class="btn float-right login_btn">-->
                    <!--</div>-->
                
              </div>
        
              <!-- Modal footer -->
              <div class="modal-footer rrb">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline-primary btn1" >Update</button>
              </div>
            </form>
            </div>
          </div>
        </div>
        <div class="row mt-2 p-2">
            <div class="form-group col-md-6 col-lg-6 col-12 p-1">
                <h3>Todays Calls</h3>
            </div>
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
            </div>
        </div>
        <!-- <div class="example" style="width:100%; display: none;"> -->

            <div class="container table-full-width table-responsive"> 
                <table id="example" class="table table-hover mt-3 ">
                    <thead>
                        <tr>
                            <th class="order">Date</th>
                            <th class="order">Time</th>
                            <th class="order">Name</th>
                            <th class="order">Mobile</th>
                            <th class="order">Questionnaire</th>
                            <!-- <th class="order">Diagnosis</th>
                            <th class="order">Product Name</th>
                            <th class="order">Note</th> -->
                            <th class="order">Doctor Advice</th>
                            <th class="order">Status</th>
                            <!-- <th>Action</th> -->
                        </tr> 
                    </thead>
                  <!--   <tbody class="table1">
                        @foreach($vendors as $v)
                            <tr id="tr">
                                <td>{{$v->name}}</td>
                                <td>{{$v->shop_name}}</td>
                                <td>{{$v->address}}</td>
                                <td>{{$v->city}}</td>
                                <td>@if($v->status == 0)
                                    <label style="color:red; font-weight: bold;">Deactive</label>
                                    @else
                                    <label style="color:green; font-weight: bold;">Active</label>
                                    @endif
                                </td>
                                <td><img src="{{asset('/docs/')}}/{{$v->fssai}}" height="100" width="100"></td>
                                <td class="rrb">
                                    <a href="{{url('/vendor/details',$v->id)}}" class="btn1 btn btn-outline-primary btn1 form-group mt-1" type="button" id="">Open</a>
                                    @if($v->status == 1)
                                        <a href="{{url('/vendor_deactive',$v->id)}}" class="btn btn-outline-danger form-group mt-1 mr-1" type="button" id="">Deactive</a>
                                        @else
                                        <a href="{{url('/kyc_confirm',$v->id)}}" type="button" class="btn btn-outline-success mr-1" id="s">Active</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody> -->
                    <tbody id="table1">
                        
                    </tbody>
                </table>
            </div>
            <div id="questions"></div>
        </div>
        <!-- <div class="example1" style="width:100%; display: none;">
            <div class="container table-full-width table-responsive"> 
                <table id="example" class="table table-hover mt-3">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Shop Name</th>
                            <th>Phone</th>
                            <th>Owner Name</th>
                            <th>Mobile</th>
                            <th>Order</th>
                            <th>Quantity</th>
                            <th>Total Amount</th>
                            <th>Pending Amount</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr> 
                    </thead>
                    <tbody class="table1">
                        @foreach($purchase_order as $p_ord)
                        <tr id="tr">
                           <td>{{$p_ord->created_at}}</td>
                           <td>{{$p_ord->shop_name}}</td> 
                           <td>{{$p_ord->phone}}</td> 
                           <td>{{$p_ord->name}}</td> 
                           <td>{{$p_ord->mobile_no}}</td> 
                           <td>{{$p_ord->product_name}}</td> 
                           <td>{{$p_ord->quantity}}</td> 
                           <td>{{$p_ord->total_amount}}</td> 
                           <td>{{$p_ord->pending_amount}}</td> 
                           <td>
                                @if($p_ord->status == null)
                                    <label style="color:red; font-weight:bold;">Not Confirm</label>
                                @else
                                    <label style="color:green; font-weight:bold;">Confirm</label>
                                @endif
                           </td> 
                           <td>@if($p_ord->status == null)
                                    <form method="post" action="{{url('/order_confirm',$p_ord->product_name)}}">
                                        @csrf
                                        <input type="text" name="message" value="Your Order is Approved By {{ $p_ord->name }} " hidden>
                                        <input type="text" name="quantity" value="{{ $p_ord->quantity }} " hidden>
                                        <input type="text" name="mobile" value="{{ $p_ord->mobile_no }}" hidden>
                                        <button type="submit" class="btn1 btn btn-outline-danger form-group">Confirm</button>
                                    </form></td>
                                @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> -->
<!--         <div class="example2" style="width:100%; display: none;">
            <div class="container table-full-width table-responsive">
                <table id="example" class="table table-hover mt-3">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>City</th> -->
                            <!-- <th>Status</th> -->
        <!--                     <th>Action</th>

                        </tr> 
                    </thead>
                    <tbody class="table1">
                        @foreach($customer as $cust)
                        <tr id="tr">
                           <td>{{$cust->name}}</td>
                           <td>{{$cust->mobile_no}}</td> 
                           <td>{{$cust->address}}</td> 
                           <td>{{$cust->city}}</td> 
                           <td><a href="{{url('/customer/open',$cust->id)}}" class="btn1 btn btn-outline-success mt-1 mr-1" type="button" >View</a></td> 
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>                        
        </div> -->
        <!-- Modal -->
        <?php 
        function get_Advice($id)
        {
            if($id){
            echo'<div class="modal fade" id="$exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" id="form1">
                
                    @csrf
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <div class="row">
                         <div class="form-group">
                             <input type="text" name="diagnosis" class="form-control" placeholder="Enter Diagnosis">
                         </div>
                         <div class="form-group">
                            <select class="form-select form-control" name="kit">
                                @foreach($product as $prd)
                                <option value="{{$prd->id}}">{{$prd->product_name}}</option>
                                @endforeach
                            </select>
                         </div>
                         <div class="form-group">
                             <input type="text" name="notes" class="form-control" placeholder="Enter Notes">
                         </div>
                         <div class="form-group">
                            <label>Next Date</label>
                            <input type="number" name="dueDate" class="form-control" placeholder="Enter Days">
                         </div>
                     </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </div>
                </form>
              </div>
            </div>';
        }else{

        }
        }
        ?>
        <!-- End Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ouestions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="questionss">
                <div class="container table-full-width table-responsive"> 
                    <table id="example" class="table table-hover mt-3 ">
                        <thead>
                            <th>Questions</th>
                            <th>Answers</th>
                        </thead>
                        <tbody id="table2">
                            
                        </tbody>
                    </table>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
              </div>
            </div>
          </div>
        </div>
</div>
<style type="text/css">
    .rrb .btn1:hover{
      background-color: #000;
      color: #fff;
    }
    .rrb .btn1{
      color: #000;
      border-color: #DAA520;
    }
    .search{
        border-color: #DAA520;
    }
    .abcdfg strong{
       font-size:18px;    
    }
        .abcdfg strong{
          animation: color-change 3s infinite;
        }

        @keyframes color-change {
          0% { color: #fff; }
          50% { color: goldenrod; }
          100% { color: black; }
        }
</style>
<script type="text/javascript">
      function get_all_table(id){
        if (id == 1) {
            $('.example').show();
            $('.example1').hide();
            $('.example2').hide();
        }else if(id == 2){
            $('.example1').show();
            $('.example').hide();
            $('.example2').hide();
        }else if(id == 3){
            $('.example2').show();
            $('.example').hide();
            $('.example1').hide();
        }
    }
</script>
<script>
// $(document).ready(function() {
//     $('#example').DataTable();
// } );
 function search(){
       $("#search-input").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".table1 #tr").filter(function() {
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
               url:'All_Oppointed/'+sdate+'/'+ldate,
               dataType:"json",
               success:function(data)
               {
                  console.log(data);
                   $('#table1').empty();
                    $.each(data, function(key,value){
                        // $('.table1').hide();
                        if (value.status == 1) {
                            $('#table1').append('<tr><td>'+value.date+'</td><td>'+value.fromtime+'/'+value.totime+'</td><td>'+value.name+'</td><td>'+value.mobile_no+'</td><td class="rrb"><a onclick="getQuestion('+value.cust_id+')" class="btn btn-outline-primary btn1" data-bs-toggle="modal" data-bs-target="#exampleModal">Click Here</a></td><td class="rrb"></td><td><label style="color:green;font-weight:bold;">Completed</label></td><td></td></tr>');

                        }else{
                            $('#table1').append('<tr><td>'+value.date+'</td><td>'+value.fromtime+'/'+value.totime+'</td><td>'+value.name+'</td><td>'+value.mobile_no+'</td><td class="rrb"><a onclick="getQuestion('+value.cust_id+')" class="btn btn-outline-primary btn1" data-bs-toggle="modal" data-bs-target="#exampleModal">Click Here</a></td><td class="rrb"><a href='+"{{url('customer/open/')}}/"+value.cust_id+' class="btn btn-outline-primary btn1">Doctor Advice</a></td><td><label style="color:red;font-weight:bold;">Pending</label></td><td></td></tr>');
                        }   
                    });

               }
            });
        });
    }
    function getQuestion(id) {
        $.ajax({
               method:"get",
               url:'All_Oues/'+id,
               dataType:"json",
               success:function(data)
               {
                  console.log(data);
                   $('#table2').empty();
                    $.each(data, function(key,value){
                        $('#table2').append('<tr><td>'+value.questions+'</td><td>'+value.answers+'</td></tr>');
                    });
                }
            });
    }

    //  function get_User_Data(id) {
    //     $.ajax({
    //            method:"get",
    //            url:'get_User_Data/'+id,
    //            dataType:"json",
    //            success:function(data)
    //            {
    //               console.log(data);
    //                $('#form1').empty();
    //                 $.each(data, function(key,value){
    //                     $('#form1').append('<form method="post" id="form1" action='+"{{url('/update_advice')}}/"+value.cust_id+'>');
    //                 });
    //             }
    //         });
    // }
</script>
@endsection

