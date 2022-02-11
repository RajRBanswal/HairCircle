@extends('admin.desing.sidebar')

@section('content')
<div class="container">
<div class="row " onclick="msg1();">
@if(Session::has('message'))
    <div class="alert alert-success w-50" id="successMessage" >
        <ul>

            <li>{{ Session::get('message') }}</li>

        </ul>
    </div>
    @endif
</div>
    <div class="card mt-3">
        
            <h3 class="ml-5 mt-3">Product Details</h3>
        <div class="card-body">
            @foreach($product_details as $p_details)
            <div class="row">
                <div class="form-group col-lg-6 col-12 item_text">
                    <div class="row">
                        <div class="col-lg-6 col-6">
                           <span>Product Name </span>   
                        </div>
                        <div class="col-lg-6 col-6">
                            <label><span>:- </span> {{$p_details->product_name}}</label>
                        </div>
                    </div>
                   
                     
                </div>
                <div class="form-group col-lg-6 col-12 item_text" >
                    <div class="row">
                        <div class="col-lg-6 col-6">
                            <span>Expiry Date </span>
                        </div>
                        <div class="col-lg-6 col-6">
                            <label><span>:- </span> {{$p_details->expiry_date}}</label>
                        </div>
                    </div>
                </div>
            </div>
           <div class="row">
               <div class="form-group col-lg-6 col-12 item_text" >
                   <div class="row">
                        <div class="col-lg-6 col-6">
                            <span>MRP </span>
                        </div>
                        <div class="col-lg-6 col-6">
                            <label><span>:- </span> {{$p_details->price}}</label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-lg-6 col-12 item_text">
                    <div class="row">
                        <div class="col-lg-6 col-6">
                            <span>Rate  </span>
                        </div>
                        <div class="col-lg-6 col-6">
                            <label><span>:- </span> {{$p_details->rate}}</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
               <div class="form-group col-lg-6 col-12 item_text" >
                   <div class="row">
                        <div class="col-lg-6 col-6">
                            <span>Batch No. </span>
                        </div>
                        <div class="col-lg-6 col-6">
                            <label><span>:- </span> {{$p_details->batch_no}}</label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-lg-6 col-12 item_text">
                    <div class="row">
                        <div class="col-lg-6 col-6">
                            <span>Remaining Quantity </span>
                        </div>
                        <div class="col-lg-6 col-6">
                            <label><span>:- </span> {{$p_details->remaining_q}}</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                 <div class="form-group col-lg-6 col-12">
                     <div class="row">
                        <div class="col-lg-6 col-6">
                            <span>Total Quantity  </span>
                        </div>
                        <div class="col-lg-6 col-6">
                            <label><span>:- </span> {{$p_details->quantity}}</label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-lg-6 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-6">
                            <span>Total Buying Price </span>
                        </div>
                        <div class="col-lg-6 col-6">
                            <label><span>:- </span> {{$p_details->total_amount}}</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                 <div class="form-group col-lg-6 col-12">
                     <div class="row">
                        <div class="col-lg-6 col-6">
                            <span>Bill No. </span>
                        </div>
                        <div class="col-lg-6 col-6">
                            <label><span>:- </span> {{$p_details->bill_no}}</label>
                        </div>
                    </div>
                </div>
            
                 <div class="form-group col-lg-6 col-12">
                     <div class="row">
                        <div class="col-lg-6 col-6">
                            <span>Billing Date </span>
                        </div>
                        <div class="col-lg-6 col-6">
                            <label><span>:- </span> {{$p_details->billing_date}}</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-6 col-12">
                     <div class="row">
                        <div class="col-lg-6 col-6">
                            <span>Return Date </span>
                        </div>
                        <div class="col-lg-6 col-6">
                            <label><span>:- </span> {{$p_details->created_at}}</label>
                        </div>
                    </div>
                </div>
                <!--<div class="form-group col-lg-6 col-12">-->
                <!--    <div class="row">-->
                <!--        <div class="col-lg-6 col-6">-->
                <!--            <span>Order Confirm Date </span>-->
                <!--        </div>-->
                <!--        <div class="col-lg-6 col-6">-->
                <!--            <label><span>:- </span> {{$p_details->updated_at}}</label>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
            @endforeach
    </div>
        
</div>
<style type="text/css">
    span{
        font-weight:bold;
    }
     .pques{
        background-color: #DAA520;
        color: #fff;
    }
    .rrb .btn1:hover{
         background-color: #000;
         color: #fff;
      }
     .rrb .btn1{
        color: #000;
        border-color: #DAA520;
        width:80px;
     }
</style>
<!-- <script src="{{asset('js/get_price.js')}}"></script>-->
<!--  <script>-->

<script>
    function msg1(){
    setTimeout(function() {
        $("#successMessage").hide('blind', {}, 500)
    }, 5000);
}
</script>



    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>-->


@endsection