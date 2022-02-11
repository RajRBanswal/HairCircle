@extends('admin.desing.sidebar')

@section('content')
<div >
    <div class="card p-2 m-2" >
        <div class="row mt-3">
            <div class="form-group col-md-8 col-12">
                <h2 class="ml-3">Vendor Details</h2>
            </div>
            <div class="form-group col-md-4 col-12 rrb">

                <button onclick="myFunction1();" class="btn btn-outline-info texts btn1" type="submit" id="confirmo" >Customer List</button>
                <button onclick="" class="btn btn-outline-info texts btn1" type="submit" data-bs-toggle="modal" data-bs-target="#myModal" >Message</button>
            </div>
           
        </div>
        
         @if(Session::has('message'))
        <div class="alert alert-info texts" id="success">
            <ul>

                <li>{{ Session::get('message') }}</li>

            </ul>
        </div>
        @endif
 <div class="card-body texts">

                <h3 class="mt-3">Vendor Details</h3>
                 @foreach($get_vendor as $v_data)
            <div class="row">
                <div class="form-group col-lg-6 col-md-6 col-12">
                        <label>Name  </label> :- <label>{{$v_data->name}}</label>
                    <br>
                        <label>Gender  </label> :- <label>{{ $v_data->gender}}</label>
                    <br>
                        <label>Mobile No.  </label> :- <label>{{ $v_data->mobile_no}}</label>
                    <br>
                        <label>Email  </label> :- <label>{{ $v_data->email }}</label>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-12">     
                      <label>Mobile No.  </label> :- <label>{{ $v_data->mobile_no}}</label>
                      <br>
                      <label>Email  </label> :- <label>{{ $v_data->email }}</label>
                      <br>
                      <label>Address  </label> :- <label>{{ $v_data->address }},</label><label>{{$v_data->city }},{{ $v_data->pincode}}</label>
                      <br>
                      <label>Date of Joining  </label> :- <label><?php echo date('d-m-Y', strtotime($v_data->created_at)); ?></label>
                </div>
                
            </div>
            <div class="row">
                <h3>Owner Details</h3>
                <div class="form-group col-md-6 col-lg-6 col-12">
                    <label>Shop Name  :</label>  <label>{{$v_data->shop_name}}</label>
                    <br>
                    <label>Shop Address  :</label>   <label>{{$v_data->address}}, {{$v_data->city}}, {{$v_data->pincode}}</label>
                    <br>
                    <label>Mobile Number  :</label>   <label>{{$v_data->phone}}</label>
                    <br>
                     <label>Reffered By :</label>    <span>{{$v_data->reffered_by}}</span>
                </div>
                <div class="form-group col-md-6 col-lg-6 col-12">
                    <label>FSSAI  :</label>  <label>{{$v_data->fssai_no}}</label>
                    <br>
                    <label>License  :</label>  <label>{{$v_data->license}}</label>
                    <br>
                     <label>Status :</label>
                        @if($v_data->status==0)
                        <span>Not Active</span>
                        @else
                        <span><b>Active</b></span>
                        @endif
                        <br>
                        <label>No of Referral :</label>
                        <span>{{$v_data->no_of_refs}}</span>
                </div>
            </div>
            <div class="row">
                    <div class="form-group col-md-3 col-lg-3 col-12">
                        <span>Aadhar Card</span>
                        <img src="{{asset('/docs/')}}/{{($v_data->adhar)}}" height="200" width="100%">
                        
                    </div>
                    <div class="form-group col-md-3 col-lg-3 col-12">
                        <span>Pan Card</span>
                        <img src="{{asset('/docs/')}}/{{($v_data->pan)}}" width="100%" height="200">
                    </div>
                    <div class="form-group col-md-3 col-lg-3 col-12">
                        <span>Shop License</span>
                        <img src="{{asset('/docs/')}}/{{($v_data->license)}}" width="100%" height="200">
                    </div>
                    <div class="form-group col-md-3 col-lg-3 col-12">
                        <span>FSSAI</span>
                        <img src="{{asset('/docs/')}}/{{($v_data->fssai)}}" width="100%" height="200">
                    </div>
                </div>
                <!--<div class="row rrb">-->
                    @if($v_data->status==0)
                    <form action="{{url('/kyc_confirm',$v_data->id)}}" method="POST">
                        @csrf
                        <div class="row rrb">
                            <div class="form-group col-md-12 col-12">
                                <center>
                                    <button type="submit" name="submit" class="btn btn-outline-primary btn1">Confirm KYC  </button>
                                </center>
                            </div>
                        </div>
                    </form>
                     @endif
                <!--</div>-->
                <!-- The Modal -->
            <div class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
                <form method="post" action="{{url('send_message_to',$v_data->id)}}">
                  @csrf  
                
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Message</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
            
                  <!-- Modal body -->
                  <div class="modal-body">
                   <textarea type="text" name="message" class="form-control" placeholder="Enter Message Here"></textarea>
                  </div>
            
                  <!-- Modal footer -->
                  <div class="modal-footer rrb">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary btn1">Save</button>
                  </div>
                </form>
                </div>
              </div>
            </div>
        <!--End Modal Form-->
           @endforeach
            </div>
        <!--</div>-->
        <div class="card mt-3" id="srb">
 
                <h1 class="ml-3 mt-3">Customer List</h1>

            <div class="card-body texts">
                
                @foreach($get_cust as $getctmr)
                <div class="row">
                    <h3 class="ml-3"> ID :-  {{$getctmr->id}}</h3>
                </div>
                <div class="row">
                    <div class="form-group col-md-4 col-12">
                        <label>Name :</label>
                        @foreach($get_name as $value)
                        <span>{{$value->name}}</span>
                        @endforeach
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label>KIT :</label>
                        <span>{{$getctmr->kit}}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4 col-12">
                        <label>Payment Mode :</label>
                        <span>{{$getctmr->pay_mode}}</span>
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label>Status : </label>
                        @if($getctmr->status == 'done')
                            <span>{{$getctmr->status}}</span>
                        @else
                            <span>Not Purchase</span>
                        @endif
                    </div>
                </div>
                <hr>
                @endforeach

            </div>
        </div>
    </div>
</div> 
<style type="text/css">
    .texts{
        font-size: 15px;
    }
    .pques{
        background-color: #DAA520;
    	color: #fff;
    }
    #srb{display: none;}

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
</script>

<script type="text/javascript">
    function myFunction1() {
        var x = document.getElementById("srb");
        if (x) {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>




@endsection