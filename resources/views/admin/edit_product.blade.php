@extends('admin.desing.sidebar')

@section('content')
<link rel="stylesheet" href="{{asset('public/css/style.css')}}">
<link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
<script src="main/main.js"></script>
<script src="{{asset('js/jquery.js')}}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">





<div class="card m-3 p-3">
<h2 class="ml-3">Add Products</h2>

    @if(Session::has('message'))
    <div class="alert alert-danger w-50">
        <ul>

            <li>{{ Session::get('message') }}</li>

        </ul>
    </div>
    @endif
  @foreach($edit_p as $key)
    <form  action="{{url('/product_update',$key->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            
            <div class="row">
                <div class="form-group col-lg-6 col-12">
                    <label>Product Name</label>
                    <input type="text" name="product" value="{{$key->product_name}}" class="form-control">
                </div> 
                <div class="form-group col-lg-6 col-12">
                    <label>Batch No.</label>
                    <input type="text" name="batch" value="{{$key->batch_no}}" class="form-control">
                </div>   
            </div>
            <div class="row">
                <div class="form-group col-lg-6 col-12">
                    <label>Expiry Date</label>
                    <input type="date" name="exp" id="expry" value="{{$key->expry_date}}" class="form-control" required="">
                </div>         
                <div class="form-group col-lg-6 col-12">
                    <label>M.R.P</label>
                    <input type="text" name="price" id="price" value="{{$key->mrp}}" class="form-control">
                </div>  
            </div>
            <div class="row">
                <div class="form-group col-lg-6 col-12">
                    <label>Quantity</label>
                    <input type="text" name="quantity" id="quantity" value="{{$key->quantity}}" class="form-control">
                </div>         
                <div class="form-group col-lg-6 col-12">
                    <label>Rate</label>
                    <input type="text" name="rate" id="rate" value="{{$key->rate}}" class="form-control" onchange="total_amount();">
                </div>  
            </div>
              <div class="row">
                <div class="form-group col-lg-6 col-12">
                    <label>Total Amount</label>
                    <input type="text" name="total_price" id="total_price"  class="form-control"  readonly>
                </div>
                <div class="form-group col-lg-6 col-12">
                    <label>Discount</label>
                    <select class="form-select form-control" name="discount" id="discount" aria-label="Default select example">
                        <option value="0">Select Discount</option>
                        <option value="1">1%</option>
                        <option value="2">2%</option>
                        <option value="3">3%</option>
                        <option value="4">4%</option>
                        <option value="5">5%</option>
                        <option value="6">6%</option>
                        <option value="7">7%</option>
                        <option value="8">8%</option>
                        <option value="9">9%</option>
                        <option value="10">10%</option>
                    </select>
                </div> 
                <div class="form-group col-lg-6 col-12">
                    <input type="hidden" name="ad_amount" id="ad_amount" class="form-control">
                </div>             
            </div>
            <div class="row">
                <div class="form-group col-lg-6 col-12">
                    <label>GST</label>
                    <select class="form-select form-control" name="gst" id="gst" aria-label="Default select example" >
                        <option value="0">Select GST</option>
                        <option value="12">12%</option>
                        <option value="18">18%</option>
                        <option value="24">24%</option>
                    </select>  
                </div>
                <div class="form-group col-lg-6 col-12">
                    <label>Product Image</label>
                    <input type="file" name="image" class="form-control">  
                </div>

            </div>
            <br>
            <div class="row rrb">
                <div class="form-group">
                  <center><button type="submit" class="btn btn-outline-primary btn1">Submit</button></center>  
                </div>
            </div>

       
        </div>
 
        <style type="text/css">
        .form-control{
            font-size: 15px;
            size: 15px;
        }
        label{
            font-size: 15px;
        }
        .submit{
             font-size: 15px;
            size: 15px;
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
    </form>
    @endforeach
     @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

</div>
<script src="{{asset('js/jquery.js')}}"></script>
    <script>
         $(document).ready(function () {
            $("#discount").change(function () {
                var numVal1 = document.getElementById("total_price").value;
                console.log(numVal1);
                var numVal2 = document.getElementById("discount").value / 100;
                var totalValue = numVal1 - (numVal1 * numVal2)
                document.getElementById("ad_amount").value = totalValue.toFixed(2);
            });
        });

        function total_amount(){

            var quant = document.getElementById('quantity').value;
            var rate = document.getElementById('rate').value;
            var total_amount = quant*rate;
            document.getElementById('total_price').value = total_amount;
        }
        



    </script>

@endsection