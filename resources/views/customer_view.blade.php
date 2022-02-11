@extends('admin.desing.sidebar2')


@section('content')

<div class="container">
   <!--  <div class="card">
        <div class="card-header pques">
            <center><h3>Customer Details</h3></center>
        </div>
        <div class="card-body">
            @foreach($patient as $pa)
            <div class="row texts">
                <div class="form-group col-md-6 col-12">
                    <span>Name : </span>
                    @foreach($patient1 as $pat)
                    <input type="text" name="name" class="form-control texts" value="{{$pat->name}}" readonly>
                    @endforeach
                </div>
                <div class="form-group col-md-6 col-12">
                    <span>KIT : </span>
                    <input type="text" name="kit" value="{{$pa->kit}}" class="form-control texts" readonly>
                </div>
            </div>
            <div class="row texts">
                <div class="form-group col-md-6 col-12">
                    <span>Payment Modes : </span>
                    <input type="text" name="pay_mode" value="{{$pa->pay_mode}}" class="form-control texts" readonly>
                </div>
                <div class="form-group col-md-6 col-12">
                    <span>Vendor : </span>
                    @foreach($vndr as $ven)
                    <input type="text" name="vendor" value="{{$ven->name}}" class="form-control texts" readonly>
                    @endforeach
                </div>
            </div>
            <div class="row texts">
                <div class="form-group col-md-6 col-12">
                    <span>Status: </span>
                    <input type="text" name="pay_mode" value="{{$pa->status}}" class="form-control texts" readonly>
                </div>
            </div>
            @endforeach
        </div>
        
    </div> -->
    <div class="card mt-3 mb-3">
       
            <h3 class="ml-3 mt-3">Purchase History</h3>

        <div class="card-body">
            @foreach($patient as $pa)
            @foreach($patient1 as $pat)
            <div class="row texts">
                <div class="form-group col-md-6 col-12">
                    <label>Name : </label>
                    <span>{{$pat->name}}</span>
                    <br/>
                    <label>Address : </label>
                    <span>{{$pat->address}},{{$pat->city}}</span>
                </div> 
                <div class="form-group col-md-6 col-12">
                    <label>Mobile Number : </label>
                    <span>{{$pat->mobile_no}}</span>
                <br/>
                    <label>Gender : </label>
                    <span>{{$pat->gender}}</span>
                </div> 
            </div>
            @endforeach
            <div class="row texts">
                <div class="form-group col-md-6 col-12">
                    <label>Product Name : </label>
                    <span>{{$pa->kit}}</span>
                </div>
                 <div class="form-group col-md-6 col-12">
                    <label>Buying Price : </label>
                    <span>{{$pa->buying_price}}</span>
                </div>
            </div>
            <div class="row texts">
                <!-- <div class="form-group col-md-6 col-12">
                    <label>Payment Mode : </label>
                    <span>{{$pa->pay_mode}}</span>
                </div> -->
                <!-- <div class="form-group col-md-6 col-12">
                    <label>Vendor : </label>
                    @foreach($vndr as $ven)
                        <span>{{$ven->name}}</span>
                    @endforeach
                </div> -->
            </div>
            <div class="row texts">
                <div class="form-group col-md-6 col-12">
                    <label>Status: </label>
                    @if($pa->status == '1')
                    <span style="color:green; font-weight:bold;">Purchased</span>
                    @else
                    <span style="color:red; font-weight:bold;">Pending</span>
                    @endif
                </div>
                <div class="form-group col-md-6 col-12">
                    <label>Purchase Date: </label>
                    <?php
                    // $date=date_create("2013-03-15");
                    echo '<span>'.date_format($pa->updated_at,"d-m-Y").'</span>';
                    ?>
                    
                </div>
            </div>
            <div class="row texts">
                <div class="form-group col-md-6 col-12">
                    <label>Image : </label>
                    <img src="{{$pa->image}}" width="200" height="200">
                </div>
                 <div class="form-group col-md-6 col-12">
                    <label>Product : </label>
                    <img src="{{asset('/product/')}}/{{$pa->product_image}}" width="200" height="200">
                </div>
            </div>
            @endforeach
        </div>
        </div>
       <!--  <div class="card mt-3 mb-3">
            <h3 class="mt-3 ml-3">Customer Details</h3>

         <div class="card-body">
            @foreach($patient1 as $pat)
            <div class="row texts">
                <div class="form-group col-md-6 col-12">
                    <label>Name : </label>
                    <span>{{$pat->name}}</span>
                    
                </div>
                <div class="form-group col-md-6 col-12">
                    <label>Date of Birth : </label>
                    <span>{{$pat->date_of_birth}}</span>
                </div>
            </div>
            <div class="row texts">
                <div class="form-group col-md-6 col-12">
                    <label>Mobile : </label>
                    <span>{{$pat->mobile_no}}</span>
                    
                </div>
                <div class="form-group col-md-6 col-12">
                    <label>Email : </label>
                    <span>{{$pat->email}}</span>
                </div>
            </div>
            <div class="row texts">
                <div class="form-group col-md-6 col-12">
                    <label>Gender : </label>
                    <span>{{$pat->gender}}</span>
                    
                </div>
                <div class="form-group col-md-6 col-12">
                    <label>Address : </label>
                    <span>{{$pat->address}}</span>
                </div>
            </div>
            <div class="row texts">
                <div class="form-group col-md-6 col-12">
                    <label>City : </label>
                    <span>{{$pat->city}},{{$pat->pincode}}</span>
                    
                </div>
                <div class="form-group col-md-6 col-12">
                    <label>State : </label>
                    <span>{{$pat->state}}</span>
                </div>
            </div>

            @endforeach
            </div> 
        </div> -->
</div>
<style type="text/css">
    .pques{
        background-color: #106eea;
    }
    .pques h3{
        color: #fff;
    }
    /*.texts{*/
    /*    font-size: 20px;*/
    /*}*/
    label{
        font-weight:bold;
    }
</style>


@endsection