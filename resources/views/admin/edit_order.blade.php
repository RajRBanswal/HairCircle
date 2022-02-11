@extends('admin.desing.sidebar')

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
        
        <h3 class="ml-3 mt-3">Edit Order</h3>
        @foreach($get_prd as $products)
        <div class="card-body">
          <form method="post" action="{{url('/order_confirm',$products->id)}}" class="card-body" enctype="multipart/form-data">
          @csrf
         
            <div class="row">
                <div class="form-group col-lg-3 col-md-3 col-12 item_text">
                    <label>Product Name  </label> 
                    <input type="text" name="product_name" class="form-control item_text"  id="product_name" value="{{$products->product_name}}" readonly>
                </div>
                <div class="form-group col-lg-3 col-md-3 col-12 item_text" >
                    <label>Expiry Date  </label>
                    <input type="text" name="ex_date" class="form-control item_text"  id="ex_date" value="{{$products->expiry_date}}" readonly>
                </div>
                <div class="form-group col-lg-3 col-md-3 col-12 item_text" >
                    <label>Batch No.  </label>
                    <input type="text" name="batchno" class="form-control item_text"  id="batchno" value="{{$products->batch_no}}" readonly>
                </div>
               <div class="form-group col-lg-3 col-md-3 col-12 item_text" >
                    <label>MRP  </label>
                    <input type="text" name="price" class="form-control item_text"  id="price" value="{{$products->price}}" readonly>
                </div>

            </div>
            <div class="row">
                <div class="form-group col-lg-3 col-md-3 col-12 item_text">
                    <label>Purchase Rate  </label>
                    <input type="text" name="rate" class="form-control item_text"  id="rate" value="{{$products->rate}}" readonly>
                </div> 
                <div class="form-group col-lg-3 col-md-3 col-12">
                    <div class="row">
                        <div class="form-group col-lg-6 col-md-6 col-6 item_text">
                            <label>Remaining Q  </label>
                            @foreach($prd as $as)
                                <input type="number" name="q"  class="form-control  item_text" id="q" value="{{$as->quantity}}" readonly>
                            @endforeach
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-6 item_text">
                            <label>Quantity  </label>
                            <input type="number" name="quantity"  class="form-control" id="quantity" onchange="check_quantity(this.value);" value="{{$products->quantity}}">
                        </div>
                        
                    </div>
                </div>
                <div class="form-group col-lg-3 col-md-3 col-12">
                    <label>Total Buying Price  </label>
                    <input type="text" name="amount"  class="form-control  item_text" id="amount" value="{{$products->total_amount}}" readonly>
                   
                </div>
                <div class="form-group col-lg-3 col-md-3 col-12">
                    <label>GST</label>
                    <select class="form-select form-control" name="gst" id="gst" aria-label="Default select example" onchange="get_GST(this.value)">
                        <option value="0">Select GST</option>
                        <option value="5">5%</option>
                        <option value="12">12%</option>
                        <option value="18">18%</option>
                        <option value="28">28%</option>
                    </select>  
                </div>
            </div>
            <div class="row">  
                <div class="form-group col-lg-3 col-md-3 col-12">
                    <label>Total Taxable Amount</label>
                    <input type="hidden" name="gst_amount" id="gst_amount" class="form-control">
                    <input type="text" name="total_taxable_amount" id="total_taxable_amount" placeholder="Total Taxable Amount" class="form-control"  readonly>
                </div>
                <div class="form-group col-lg-3 col-md-3 col-12">
                    <label>Discount (%)</label>
                    <input type="number" name="percent" id="percent" class="form-control" placeholder="Discount" onchange="getPrice()">
                </div>
                <div class="form-group col-lg-3 col-md-3 col-12">
                    <label>Discounted Amount</label>
                    <input type="text" name="ad_amount" id="ad_amount" class="form-control" placeholder="Discounted Amount" readonly>
                </div>
            </div>
                @foreach($vendor as $vndr)
                    <div class="row">
                        <div class="form-group col-lg-3 col-md-3 col-12">
                            <label>Vendor Name</label>
                            <input type="text" name="name" class="form-control item_text" value="{{$vndr->name}}" readonly>
                        </div>
                        <div class="form-group col-lg-3 col-md-3 col-12">
                            <label>Shop Name</label>
                            <input type="hidden" name="vendor_id" class="form-control item_text" value="{{$vndr->id}}">
                            <input type="text" name="shop_name" class="form-control item_text" value="{{ $vndr->shop_name }}" readonly> 
                        </div>
                        <div class="form-group col-lg-3 col-md-3 col-12">
                            <label>Vendor Mobile</label>
                            <input type="text" name="mobile_no" class="form-control item_text"  value="{{$vndr->mobile_no}}" readonly> 
                        </div>
                        <div class="form-group col-lg-3 col-md-3 col-12">
                            <label>Vendor Phone</label>
                            <input type="text" name="phone" class="form-control item_text"  value="{{$vndr->phone}}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6 col-md-6 col-12">
                            <label>Vendor Address</label>
                            <input type="text" name="address" class="form-control item_text" value="{{ $vndr->address }}, {{$vndr->city }}, {{$vndr->state }}, {{ $vndr->pincode}}">
                        </div>
                        <div class="form-group col-lg-3 col-md-3 col-12">
                            <label>Vendor Email</label>
                           <input type="text" name="email" class="form-control item_text" value="{{$vndr->email}}" readonly>  
                        </div>
                    </div>
                @endforeach
          <div class="row">
            <div class="form-group col-lg-12 col-12 rrb">
              
              <center><button type="submit" class="btn btn-outline-primary btn1" style="width:100px;">Update</button></center>
            </div>
          </div>
        </form>  
    </div>
    @endforeach
        
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
function get_GST(gst){
    var total_amount = document.getElementById('amount').value;
    var withGST = (total_amount * gst) / 100;
    document.getElementById('gst_amount').value =withGST;
    var finalGSTAmt = parseFloat(withGST)+parseFloat(total_amount);
    document.getElementById('total_taxable_amount').value =finalGSTAmt; 
}

 getPrice = function() {
    var numVal1 = document.getElementById("total_taxable_amount").value;
    var numVal2 = document.getElementById("percent").value / 100;
    var totalValue = numVal1 - (numVal1 * numVal2)
    document.getElementById("ad_amount").value = totalValue.toFixed(2);
}
function totalPrice() {
    // $("#quantity").change(function () {                
       var price = document.getElementById('rate').value;
       var quantity = document.getElementById('quantity').value;
       var result = price * quantity; 
        $("#amount").val(result);
    // });
}
function check_quantity(quantity) {
       const quan = document.getElementById('q').value;
         var abc = parseInt(quan);
         var xyz = parseInt(quantity);
    //   var quantity = document.getElementById('quantity').value;
       if(abc > xyz){
           totalPrice();
       }else{
           alert('Insufficient Product Quantity?');
       }
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