@extends('admin.desing.sidebar')

@section('content')
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="{{ asset('/main/main.js') }}"></script>
<link type="text/css" rel="stylesheet" href="{{ asset('/css/main.css') }}">
<div >
    <div class="card m-3 p-2" >
        <div class="row mt-3 rrb">
            <div class="form-group col-md-8 col-12">
                <h2 class="ml-3">All Return Orders</h2>
            </div>
            <div class="form-group col-md-4 col-12">
                <a href="{{url('/all_order')}}" class="btn btn-outline-primary btn1" type="submit" id="confirmo" >All Order</a>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-8"></div>
            <div class="form-group col-md-4 col-12">
                <div class="search">
                    <input class="search-input form-control" type="text" onkeyup="search();" id="search-input" placeholder="Search Here">
                </div>
            </div>
        </div>

         @if(Session::has('message'))
        <div class="alert alert-info texts" id="success">
            <ul>

                <li>{{ Session::get('message') }}</li>

            </ul>
        </div>
        @endif

            <div class="container table-responsive" id="abcdfg">
                <table class="table table-hover mt-5" style="font-size: 15px;">
                    <thead>
                        <tr>
                           
                            <th scope="col">Product Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total Amount</th>
                            <th scope="col">Shop Name</th>
                            <!-- <th scope="col">Shop Name</th> -->
                            <th scope="col">Address</th>
                            <th scope="col">Mobile</th>
                             <th scope="col">Date</th> 
                            <th scope="col">Action </th>

                        </tr>
                    </thead>
                    <tbody id="table">
                       
                        @foreach($getorder as $getorders)

                        <tr id="tr">
        
                               
                            <td>
                                {{ $getorders->product_name }}
                               
                            </td>
                               
                            <td>{{ $getorders->quantity }}</td>
                            <td>{{ $getorders->total_amount }}</td>
                            <td>{{ $getorders->shop_name }}</td>
                            <td>{{ $getorders->address }}</td>
                            <td>{{ $getorders->mobile_no }}</td>
                            <td>{{ $getorders->created_at }}</td>

                    
                            <td>
                                <div class="row rrb">
                                    <a href="{{url('/view_ret_product',$getorders->vendor_id)}}" class="btn2 btn btn-outline-danger form-group mt-1 mr-1">View</a> 
                                    <form method="post" action="{{url('/return_order_confirm',$getorders->id)}}">
                                        @csrf
                                        <input type="text" name="message" value="Your Order is Approved By {{ $getorders->name }} " hidden>
                                        <input type="text" name="quantity" value="{{ $getorders->quantity }} " hidden>
                                        <input type="text" name="p_name" value="{{ $getorders->product_name }} " hidden>
                                        <input type="text" name="mobile" value="{{ $getorders->mobile_no }}" hidden>
                                        <button type="submit" class="mt-1 btn1 btn btn-outline-danger form-group">Confirm</button>
                                    </form>

                                    <!-- <a href="{{url('/order/s',$getorders->id)}}" class=" mx-1 btn btn-primary" type="button" id="">Confirm</a> -->
                                    
                                    
                                     <!--<a href="/members/edit/{{$getorders->id}}" class="btn btn-outline-success btn1 " type="button" id="">Edit</a> -->
                                    
                                
                                    
                                </div>
                            </td>

                        </tr>




                        @endforeach
                    </tbody>
                </table>
    </div>   

       
</div>

        

<style type="text/css">
    .texts{
        font-size: 15px;
    }

    .search input{
        font-size: 15px;
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
                .rrb .btn2:hover{
                  background-color: #000;
                  color: #fff;
                }
                .rrb .btn2{
                  color: #000;
                  border-color: #DAA520;
                  height:100%;
                }
</style>
<script type="text/javascript">
    $("#success").ready(function(){
        setTimeout(function() { $("#success").hide(); }, 5000);
    });
    function search(){
       $("#search-input").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#table tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        }); 
    }
    
</script>



@endsection