@extends('admin.desing.sidebar')

@section('content')
<link rel="stylesheet" href="{{asset('public/css/style.css')}}">
<!--<link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">-->
<script src="main/main.js"></script>
<!--<script src="{{asset('js/jquery.js')}}"></script>-->
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">-->


<div class="card m-3 p-2">
        <h2 class="ml-3 mt-3">Add Products</h2>
   <div id="hideDiv">
        @if(Session::has('alert'))
            <div class="alert alert-info texts" id="success">
                        <li>{{ Session::get('alert') }}</li>
            </div>
        @endif
    </div>
  
    <form  action="{{url('/product_store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container mt-3">
            <div class="row">
                <div class="form-group col-lg-6 col-12">
                    <label>Product Name</label>
                    <input type="text" name="product" placeholder="Enter Product Name" class="form-control" required>
                </div> 
                <div class="form-group col-lg-6 col-12">
                    <div class="row">
                        <div class="form-group col-lg-6 col-6">
                            <label>Batch No.</label>
                            <input type="text" name="batch" placeholder="Enter Batch Number" class="form-control">    
                        </div>
                        <div class="form-group col-lg-6 col-6">
                            <label>HSN Code</label>
                            <input type="text" name="hsn" placeholder="Enter HSN Code" class="form-control">    
                        </div>
                    </div>
                </div>   
            </div>
            <div class="row">
                <div class="form-group col-lg-6 col-12">
                    <div class="row">
                        <div class="form-group col-lg-6 col-6">
                            <label>Expiry Date</label>
                            <input type="date" name="exp" id="expry" placeholder="dd/mm/yyyy" class="form-control">
                        </div>         
                        <div class="form-group col-lg-6 col-6">
                            <label>M.R.P</label>
                            <input type="text" name="price" id="price" placeholder=" MRP" class="form-control" required>
                        </div>  
                    </div>
                </div>
                <div class="form-group col-lg-6 col-12">
                    <div class="row">
                        <div class="form-group col-lg-6 col-12">
                            <label>Purchase  Rate</label>
                            <input type="text" name="rate" id="rate" placeholder="Rate" class="form-control" required>
                        </div>
                        <div class="col-lg-6 col-6">
                            <label>Quantity</label>
                            <input type="text" name="quantity" id="quantity" placeholder="Quantity" class="form-control" onchange="total_amount();" required>
                        </div>           
                    </div>
                </div>
            </div>
            <div class="row mt-0">
                <div class="form-group col-lg-6 col-12">
                    <div class="row">
                        <div class="form-group col-lg-6 col-12">
                            <label>Total Amount</label>
                            <input type="text" name="total_price" id="total_price" placeholder="Total Price" class="form-control"  readonly>
                        </div>
                        <div class="form-group col-lg-6 col-12">
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
                </div>
                <div class="form-group col-lg-6 col-12">
                    <div class="row">  
                        <div class="form-group col-lg-6 col-12">
                            <label>Total Taxable Amount</label>
                            <input type="text" name="total_taxable_amount" id="total_taxable_amount" placeholder="Total Taxable Amount" class="form-control"  readonly>
                        </div>
                        <div class="form-group col-lg-6 col-12">
                            <label>Discount (%)</label>
                            <input type="number" name="percent" id="percent" class="form-control" placeholder="Discount" onchange="getPrice()">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-6 col-12">
                     <div class="row">  
                        <div class="form-group col-lg-6 col-12">
                            <label>Discounted Amount</label>
                            <input type="text" name="ad_amount" id="ad_amount" class="form-control" placeholder="Discounted Amount" readonly>
                        </div>
                        <div class="form-group col-lg-6 col-12">
                            <label>Vendor Purchase Price</label>
                            <input type="text" name="ven_p_price" id="ven_p_price" class="form-control" placeholder="Vendor Purchase Price" required>
                        </div>
                    </div>
                </div>
                <div class="form-group col-lg-6 col-12">
                    <label>Product Image</label>
                    <input type="file" name="image" class="form-control">  
                </div>
            </div>
            <div class="row">
                <h3 style="text-decoration: underline;">Supplier Details</h3>

            </div>
            <div class="row">
                <div class="form-group col-lg-6 col-12">
                    <div class="row">
                        <div class="form-group col-lg-6 col-12">
                            <label>Supplier Name</label>
                            <input type="text" name="s_name" id="s_name" class="form-control" placeholder="Supplier Name" required>
                        </div>
                        <div class="form-group col-lg-6 col-12">
                            <label>Address</label>
                            <input type="text" name="s_address" id="s_address" class="form-control" placeholder="Address" required>
                        </div>
                    </div>
                </div>
                <div class="form-group col-lg-6 col-12">
                    <div class="row">
                        <div class="form-group col-lg-6 col-12">
                            <label>Mobile No.</label>
                            <input type="text" name="s_mobile" id="s_mobile" class="form-control" placeholder="Mobile Number" required>
                        </div>
                        <div class="form-group col-lg-6 col-12">
                            <label>GSTIN No.</label>
                            <input type="text" name="s_gstin" id="s_gstin" class="form-control" placeholder="GSTIN Number" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row rrb">
                <div class="form-group col-12 col-lg-12 text-center">
                  <input type="submit" class="btn btn-outline-primary btn1" value="Submit">
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
        .rrb .btn1:hover{
          background-color: #000;
          color: #fff;
        }
        .rrb .btn1{
          color: #000;
          border-color: #DAA520;
          text-align:center;
        }


    </style>
    </form>

</div>
<script>

    setTimeout(function() {
        $("#hideDiv").fadeOut('fast'); 
    }, 5000);


function search(){   
    $("#search-input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#table1 tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
}

function get_GST(gst){
    var total_amount = document.getElementById('total_price').value;
    var withGST = (total_amount * gst) / 100;
    var finalGSTAmt = parseFloat(withGST)+parseFloat(total_amount);
    document.getElementById('total_taxable_amount').value =finalGSTAmt; 
}
</script>
<script src="{{asset('js/jquery.js')}}"></script>
    <script>
         getPrice = function() {
            var numVal1 = document.getElementById("total_taxable_amount").value;
            var numVal2 = document.getElementById("percent").value / 100;
            var totalValue = numVal1 - (numVal1 * numVal2)
            document.getElementById("ad_amount").value = totalValue.toFixed(2);
        }

        function total_amount(){

            var quant = document.getElementById('quantity').value;
            var rate = document.getElementById('rate').value;
            var total_amount = quant*rate;
            document.getElementById('total_price').value = total_amount;
        }
        



    </script>

@endsection


<!--<link rel="stylesheet" href="{{asset('public/css/style.css')}}">-->
<!--<link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">-->
<!--<script src="main/main.js"></script>-->
<!--<script src="{{asset('js/jquery.js')}}"></script>-->
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">-->





<!--<div class="card m-3 p-2">-->
<!--        <h2 class="ml-3 mt-3">Add Products</h2>-->
<!--    @if(Session::has('message'))-->
<!--    <div class="alert alert-danger w-50">-->
<!--        <ul>-->

<!--            <li>{{ Session::get('message') }}</li>-->

<!--        </ul>-->
<!--    </div>-->
<!--    @endif-->
  
<!--    <form  action="{{url('/product_store')}}" method="post" enctype="multipart/form-data">-->
<!--        @csrf-->
<!--        <div class="container mt-3">-->
<!--            <div class="row">-->
<!--                <div class="form-group col-lg-6 col-12">-->
<!--                    <label>Product Name</label>-->
<!--                    <input type="text" name="product" placeholder="Enter Product Name" class="form-control">-->
<!--                </div> -->
<!--                <div class="form-group col-lg-6 col-12">-->
<!--                    <div class="row">-->
<!--                        <div class="col-lg-6 col-6">-->
<!--                            <label>Batch No.</label>-->
<!--                            <input type="text" name="batch" placeholder="Enter Batch Number" class="form-control">    -->
<!--                        </div>-->
<!--                        <div class="col-lg-6 col-6">-->
<!--                            <label>HSN Code</label>-->
<!--                            <input type="text" name="hsn" placeholder="Enter HSN Code" class="form-control">    -->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>   -->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="form-group col-lg-6 col-12">-->
<!--                    <label>Expiry Date</label>-->
<!--                    <input type="date" name="exp" id="expry" placeholder="dd/mm/yyyy" class="form-control">-->
<!--                </div>         -->
<!--                <div class="form-group col-lg-6 col-12">-->
<!--                    <label>M.R.P</label>-->
<!--                    <input type="text" name="price" id="price" placeholder=" MRP" class="form-control">-->
<!--                </div>  -->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="form-group col-lg-6 col-12">-->
<!--                    <label>Quantity</label>-->
<!--                    <input type="text" name="quantity" id="quantity" placeholder="Quantity" class="form-control">-->
<!--                </div>         -->
<!--                <div class="form-group col-lg-6 col-12">-->
<!--                    <label>Purchase  Rate</label>-->
<!--                    <input type="text" name="rate" id="rate" placeholder="Rate" class="form-control" onchange="total_amount();">-->
<!--                </div>  -->
<!--            </div>-->
<!--              <div class="row">-->
<!--                <div class="form-group col-lg-6 col-12">-->
<!--                    <label>Total Amount</label>-->
<!--                    <input type="text" name="total_price" id="total_price" placeholder="Total Price" class="form-control"  readonly>-->
<!--                </div>-->
<!--                <div class="form-group col-lg-6 col-12">-->
<!--                    <label>Discount</label>-->
<!--                    <select class="form-select form-control" name="discount" id="discount" aria-label="Default select example">-->
<!--                        <option value="0">Select Discount</option>-->
<!--                        <option value="1">1%</option>-->
<!--                        <option value="2">2%</option>-->
<!--                        <option value="3">3%</option>-->
<!--                        <option value="4">4%</option>-->
<!--                        <option value="5">5%</option>-->
<!--                        <option value="6">6%</option>-->
<!--                        <option value="7">7%</option>-->
<!--                        <option value="8">8%</option>-->
<!--                        <option value="9">9%</option>-->
<!--                        <option value="10">10%</option>-->
<!--                    </select>-->
<!--                </div> -->
<!--                <div class="form-group col-lg-6 col-12">-->
<!--                    <input type="hidden" name="ad_amount" id="ad_amount" class="form-control">-->
<!--                </div>             -->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="form-group col-lg-6 col-12">-->
<!--                    <label>GST</label>-->
<!--                    <select class="form-select form-control" name="gst" id="gst" aria-label="Default select example" >-->
<!--                        <option value="0">Select GST</option>-->
<!--                        <option value="12">12%</option>-->
<!--                        <option value="18">18%</option>-->
<!--                        <option value="24">24%</option>-->
<!--                    </select>  -->
<!--                </div>-->
<!--                <div class="form-group col-lg-6 col-12">-->
<!--                    <label>Product Image</label>-->
<!--                    <input type="file" name="image" class="form-control">  -->
<!--                </div>-->

<!--            </div>-->
<!--            <br>-->
<!--            <div class="row rrb">-->
<!--                <div class="form-group col-12 col-lg-12 text-center">-->
<!--                  <input type="submit" class="btn btn-outline-primary btn1" value="Submit">-->
<!--                  </div>-->
<!--            </div>-->

       
<!--        </div>-->
 
<!--        <style type="text/css">-->
<!--        .form-control{-->
<!--            font-size: 15px;-->
<!--            size: 15px;-->
<!--        }-->
<!--        label{-->
<!--            font-size: 15px;-->
<!--        }-->
<!--         .rrb .btn1:hover{-->
<!--                  background-color: #000;-->
<!--                  color: #fff;-->
<!--                }-->
<!--                .rrb .btn1{-->
<!--                  color: #000;-->
<!--                  border-color: #DAA520;-->
<!--                  text-align:center;-->
<!--                }-->
    
<!--    </style>-->
<!--    </form>-->
<!--     @if ($errors->any())-->
<!--        <div class="alert alert-danger">-->
<!--            <ul>-->
<!--                @foreach ($errors->all() as $error)-->
<!--                <li>{{ $error }}</li>-->
<!--                @endforeach-->
<!--            </ul>-->
<!--        </div>-->
<!--        @endif-->

<!--</div>-->
<!--<script src="{{asset('js/jquery.js')}}"></script>-->
<!--    <script>-->
<!--         $(document).ready(function () {-->
<!--            $("#discount").change(function () {-->
<!--                var numVal1 = document.getElementById("total_price").value;-->
<!--                console.log(numVal1);-->
<!--                var numVal2 = document.getElementById("discount").value / 100;-->
<!--                var totalValue = numVal1 - (numVal1 * numVal2)-->
<!--                document.getElementById("ad_amount").value = totalValue.toFixed(2);-->
<!--            });-->
<!--        });-->

<!--        function total_amount(){-->

<!--            var quant = document.getElementById('quantity').value;-->
<!--            var rate = document.getElementById('rate').value;-->
<!--            var total_amount = quant*rate;-->
<!--            document.getElementById('total_price').value = total_amount;-->
<!--        }-->
        



<!--    </script>-->
