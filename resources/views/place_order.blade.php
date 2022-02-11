
@extends('admin.desing.sidebar2')

@section('content')
<div class="container">
        <div id="hideDiv">
              @if ($message = Session::get('alert'))  
                <div class="alert alert-info">  
                          {{ $message }}
                </div>
              @endif
        </div>
    <div class="card mt-3">
        
            <h3 class="ml-5 mt-3">Place Order</h3>
        <div class="card-body">
          <form method="post" action="{{url('/place_orders')}}" class="card-body" enctype="multipart/form-data">
          @csrf
            <div class="row">
                <div class="form-group col-lg-6 col-12 item_text">
                    <label>Product Name  </label> 
                        <select class="form-select form-control item_text" name="product_name" onchange="get_Price(this.value)" id="product_name">
                            <option selected>Select Products</option>
                            @foreach($product as $products)
                            <option value="{{$products->id}}">{{$products->product_name}}</option>
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
                    <label>Purchase Rate  </label>
                    <input type="text" name="rate" class="form-control item_text"  id="rate" readonly>
                    <input type="hidden" name="v_rate" class="form-control item_text"  id="v_rate" readonly>
                    <input type="hidden" name="batchno" class="form-control item_text"  id="batchno">
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
                    <label>Select Payments Mode</label>
                    <select class="form-select form-control" name="payment_mode">
                        <option selected>Select Payment Mode</option>
                        <option value="online">Online</option>
                        <option value="credit">Credit</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-6 col-12 item_text">
                    <input type="hidden" name="name" class="form-control item_text" value="{{$getvendor->name}}">
                    <input type="hidden" name="vendor_id" class="form-control item_text" value="{{$getvendor->id}}">
                    <input type="hidden" name="shop_name" class="form-control item_text" value="{{ $getvendor->shop_name }}"> 
                    <input type="hidden" name="address" class="form-control item_text" value="{{ $getvendor->address }},{{$getvendor->city }},{{ $getvendor->pincode}}">
                    <input type="hidden" name="mobile_no" class="form-control item_text"  value="{{$getvendor->mobile_no}}">
                    <input type="hidden" name="phone" class="form-control item_text"  value="{{$getvendor->phone}}">
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
    setTimeout(function() { 
        $("#hideDiv").fadeOut('fast'); 
    }, 3000);
 
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
                if(id){
                  $.ajax({
                        type: 'get',
                        url: 'get_price/'+id,
                        dataType: 'json',
                        success: function(data){
                            $.each(data, function(key, modelName){
                                // alert(modelName.rate);
                                $('input[name="price"]').val(modelName.mrp);
                                $('input[name="v_rate"]').val(modelName.rate);
                                $('input[name="rate"]').val(modelName.v_purchase_rate);
                                $('input[name="ex_date"]').val(modelName.expiry_date);
                                $('input[name="batchno"]').val(modelName.batch_no); 
                            });
                        }
                    });
                }
}
    </script>
    <!--<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>-->
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>-->


@endsection