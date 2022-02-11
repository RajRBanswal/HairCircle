
@extends('admin.desing.sidebar2')

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
        
            <h3 class="ml-5 mt-3">Return Product</h3>
        <div class="card-body">
          <form method="post" action="{{url('/return_product')}}" class="card-body" enctype="multipart/form-data">
          @csrf
            <div class="row">
                <div class="form-group col-lg-6 col-12 item_text">
                    <label>Product Name  </label> 
                        <select class="form-select form-control item_text" name="product_name" onchange="get_Price(this.value)" id="product_name">
                            <option selected>Select Products</option>
                            @foreach($products as $product)
                            <option value="{{$product->product_name}}">{{$product->product_name}}</option>
                            @endforeach
                        </select>
                </div>
                <div class="form-group col-lg-6 col-12 item_text" >
                    <label>Expiry Date  </label>
                    <input type="text" name="ex_date" class="form-control item_text"  id="ex_date" readonly>
                </div>
            </div>
           <div class="row">
               <div class="form-group col-lg-6 col-12 item_text" >
                    <label>MRP  </label>
                    <input type="text" name="price" class="form-control item_text"  id="price" readonly>
                </div>
                <div class="form-group col-lg-6 col-12 item_text">
                    <label>Rate  </label>
                    <input type="text" name="rate" class="form-control item_text"  id="rate" readonly>
                </div>
                
                
            </div>
            <div class="row">
               <div class="form-group col-lg-6 col-12 item_text" >
                    <label>Batch No.</label>
                    <input type="text" name="batchno" class="form-control item_text"  id="batchno" readonly>
                </div>
                <div class="form-group col-lg-6 col-12 item_text">
                    <label>Remaining Quantity  </label>
                    <input type="text" name="rem_q" class="form-control item_text"  id="rem_q" readonly>
                </div>
            </div>
            <div class="row">
                 <div class="form-group col-lg-6 col-12">
                    <label>Quantity  </label>
                    <input type="text" name="quantity"  class="form-control" id="quantity" placeholder="Enter Quantity" onchange="totalPrice();">
                </div>
                <div class="form-group col-lg-6 col-12 item_text">
                    <label>Total Buying Price  </label>
                    <input type="text" name="amount"  class="form-control  item_text" id="amount" readonly>
                </div>
            </div>
            <div class="row">
                 <div class="form-group col-lg-6 col-12">
                    <label>Bill No.  </label>
                    <input type="text" name="bill_no"  class="form-control" id="bill_no" placeholder="Enter Quantity">
                </div>
                <div class="form-group col-lg-6 col-12 item_text">
                    <label>Bill Created Date </label>
                    <input type="text" name="billcdate"  class="form-control  item_text" id="billcdate" readonly>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-6 col-12 item_text">
                    <input type="hidden" name="v_id" class="form-control item_text" value="{{$getvendor->id}}">
                    <input type="hidden" name="name" class="form-control item_text" value="{{$getvendor->name}}">
                    <input type="hidden" name="shop_name" class="form-control item_text" value="{{ $getvendor->shop_name }}"> 
                    <input type="hidden" name="address" class="form-control item_text" value="{{ $getvendor->address }},{{$getvendor->city }},{{ $getvendor->pincode}}">
                    <input type="hidden" name="mobile_no" class="form-control item_text"  value="{{$getvendor->mobile_no}}">
                    <input type="hidden" name="email" class="form-control item_text" value="{{$getvendor->email}}"> 
                </div>
            </div>
          <div class="row">
            <div class="form-group col-lg-12 col-12 rrb">
              
              <center><button type="submit" class="btn btn-outline-primary btn1" style="width:100px;">Submit</button></center>
            </div>
          </div>
        </form>  
    </div>
        
</div>
<style type="text/css">
    .item_text{
        font-size: 15px;
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

<script>

        function totalPrice() {
            // $("#quantity").change(function () {                
               var price = document.getElementById('rate').value;
               var quantity = document.getElementById('quantity').value;
               var result = price * quantity; 
                $("#amount").val(result);
            // });
        }
</script>
  <script>
        function get_Price(id){    
        $(document).ready(function(){
                if(id){
                  $.ajax({
                        type: 'get',
                        url: 'get_all_data/'+id,
                        dataType: 'json',
                        success: function(data){
                            $.each(data, function(key, modelName){
                                $('input[name="price"]').val(modelName.price);
                                $('input[name="rate"]').val(modelName.rate);
                                $('input[name="ex_date"]').val(modelName.expiry_date);
                                $('input[name="batchno"]').val(modelName.batch_no);
                                $('input[name="rem_q"]').val(modelName.remaining_q);
                                $('input[name="bill_no"]').val(modelName.bill_no);
                                $('input[name="billcdate"]').val(modelName.date );
                                
                            });
                        }
                    });
                }
        });
}
    </script>
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>-->


@endsection