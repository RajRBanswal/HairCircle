@extends('admin.desing.sidebar')

@section('content')


<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
 <div class="card m-3 p-3" >
        <div class="row mt-3">
            <h2>Customer Details</h2>
        </div>
        @foreach($schedule as $advice)
            <div class="row">
                <div class="form-group col-md-12 col-lg-12 col-12">
                    <label>Customer Name</label>  :  <label><b>{{$advice->customer_name}}</b></label><br>
                    <label>Mobile Number</label>  :  <label><b>{{$advice->mobile}}</b></label><br>
                    @foreach($vendors as $key)
                    <label>Address</label>  :  <label><b>{{ $key->address}},{{$key->city}}</b></label><br>
                    @endforeach
                </div>
            </div>
        
        @endforeach
        <div class="row mt-3 mb-3 rrb">
            <div class="form-group col-md-3 col-lg-3 col-12">
                <input class="btn btn-outline-primary btn1  mt-1" type="submit" value="Product Purchase History" onclick="myFunction1();" >
<!--             </div>
            <div class="form-group col-md-4 col-12"> -->
                <input class="btn btn-outline-primary btn1 mt-1" type="submit" id="confirmo" onclick="myFunction();" value="Questionnaire" >
<!--             </div>
            <div class="form-group col-md-4 col-12"> -->
                <input class="btn btn-outline-primary btn1 mt-1" type="submit" id="confirmo" onclick="myFunction2();" value="Doctor Advice" >
            </div>
            <div class="form-group col-md-9 col-lg-9 col-12">
                <div class="card " id="histery" >
                        <h2 class="mt-3 ml-3">Purchase History</h2>
                    <div class="container table-full-width table-responsive" id="">
                        <table id="example" class="table table-striped" style="width:100%"> 
                            <thead class="thead-dark">
                              <tr>
                                
                                <th class="order">KIT</th>
                                <th class="order">Payment Mode</th>
                                <th class="order">vendor</th>
                                <th class="order">Status</th>
                                <th class="order">Image</th>
            
                              </tr>
                            </thead>
                            <tbody class="tbody">
                            @if($producth)
                              @foreach($producth as $produ)
                              <tr>
                                <td class="td"><label>{{ $produ->kit}}</label></td>
                                <td class="td"><label>{{ $produ->pay_mode }}</label></td>
                                @if($vendors)
                                @foreach($vendors as $key)
                                <td class="td"><label>{{ $key->name}}</label><br><label>{{ $key->address}}</label><br><label>{{ $key->mobile_no}}</label></td>
                                @endforeach
                                @endif
                                <td class="td">
                                    @if( $produ->status == 1)
                                    <label>Done</label>
                                    @else
                                    <label>Not Done</label>
                                    @endif
                                </td>
                                <td class="td"><img src="{{ $produ->image }}" width="100" height="100"></td>
                            </tr>
                              @endforeach
                              @endif
                            </tbody>
                        </table>
                    </div>
                </div> 
                <div class="card " id="qusetion">
                        <h2 class="mt-3 ml-3">Questionnaire</h2>
                    <div class="container table-full-width table-responsive" id="">
                        <table id="example" class="table table-striped" style="width:100%"> 
                            <thead class="thead-dark">
                              <tr>
                                
                                <th class="order">Questions</th>
                                <th class="order">Answers</th>
                                <!-- <th class="order">Types</th>
                                <th class="order">Frequency / Result / Quantity</th>
                                <th class="order">Reason / Duration </th> -->
                              </tr>
                            </thead>
                            <tbody>
                                @if($datas)
                              @foreach($datas as $q_datas)
                              <tr>
                             
                                <td class="col-md-4 td">{{ $q_datas->questions}}</td>
                                <td class="col-md-1 td">{{ $q_datas->answers }}</td>
                          <!--       <td class="col-md-2 td">{{ $q_datas->type}}</td>
                                <td class="col-md-2 td">{{ $q_datas->freq_res_qua }}</td>
                                <td class="col-md-2 td">{{ $q_datas->reas_dura }}</td> -->
                            </tr>
                              @endforeach
                              @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card " id="advice">
                    <h2 class="mt-3 ml-3">Doctor Advice</h2>
                    <div class="card-body table-responsive table-full-width">
                        @foreach($schedule as $advice)
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-12">
                                    <label>Customer Name</label>  :  <label><b>{{$advice->customer_name}}</b></label><br>
                                    <label>Mobile Number</label>  :  <label><b>{{$advice->mobile}}</b></label><br>
                                    <label>Schedule Date</label>  :  <label><b>{{$advice->date}}</b></label><br>
                                    <label>Schedule Shift</label>  :  <label><b>{{$advice->shift}}</b></label><br>
                                    <label>Schedule Time</label>  :  <label><b>{{$advice->fromtime}}</b> To <b>{{$advice->totime}}</b></label>
                                </div>
                                <div class="form-group col-md-4 col-lg-4col-12">
                                    <span>Image</span> :  <span><img src="{{$advice->image}}" width="200" height="200"></span>
                                </div>
                            </div>
                            <form method="post" action="{{url('/update_advice',$advice->id)}}">
                                @csrf
                                <div class="row"> 
                                    <div class="form-group col-md-6 col-lg-6 col-12">
                                        <label>Notes</label>
                                        <input type="text" name="notes" id="notes" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-12">
                                        <label>Doctor Advice</label>
                                        <textarea name="sugg" id="sugg" class="form-control" rows="4" cols="50"></textarea>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="form-group col-md-6 col-lg-6 col-12">
                                        <label>Select Kit</label>
                                        <select class="form-select form-control" name="kit" aria-label="Default select example">
                                          <option selected>Open this select menu</option>
                                          @foreach($product as $prdct)
                                          <option value="{{$prdct->product_name}}">{{$prdct->product_name}}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                     <div class="form-group col-md-6 col-lg-6 col-12">
                                        <label>Next Date</label>
                                        <input type="number" name="dueDate" class="form-control" placeholder="Enter Days">
                                     </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12 rrb">
                                        <center><button name="submit" class="btn btn-outline-primary btn1">Update</button></center>
                                                                
                                    </div>
                                </div>
                            </form>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
        <div id="hideDiv" onmouseover="hideDiv();">
             @if(Session::has('message'))
                <div class="alert alert-info texts" id="success">
                    {{ Session::get('message') }}
                </div>
            @endif
        </div>
        

    
</div>
</div>

<style type="text/css">
    .th{
        text-align: center;
        font-size: 15px;
         padding: 10px;
    }
    .td{
        font-size: 15px;
        padding: 10px;
    }
    h4{
        font-size: 20px;
    }

    .lbl{
        color: red;
    }
    label{
        font-size: 20px;
    }
    .pques{
       background-color: #106eea;
       color: #fff; 
    }
    #qusetion{display: none;}
    #histery{display: none;}
    #advice{display: none;}
    .tbody{
        padding: 10px;
    }
     .rrb .btn1:hover{
      background-color: #000;
      color: #fff;
    }
    .rrb .btn1{
      color: #000;
      border-color: #DAA520;
      width: 200px;
    }
</style>
<script>
        function hideDiv(){
            setTimeout(function() {
           $('#success').fadeOut('fast');
           }, 3000); 
        }
    function myFunction() {
        var x = document.getElementById("qusetion");
        var y = document.getElementById("histery");
        var z = document.getElementById("advice");
        if (x) {
            x.style.display = "block";
            y.style.display = "none";
            z.style.display = "none";

        } else {
            x.style.display = "none";
        }
    }
    function myFunction1() {
        var x = document.getElementById("histery");
        var y = document.getElementById("qusetion");
        var z = document.getElementById("advice");
        if (x) {
            x.style.display = "block";
            y.style.display = "none";
            z.style.display = "none";
        } else {
            x.style.display = "none";
        }
    }
    function myFunction2() {
        var x = document.getElementById("histery");
        var y = document.getElementById("qusetion");
        var z = document.getElementById("advice");
        if (x) {
            x.style.display = "none";
            y.style.display = "none";
            z.style.display = "block";
        } else {
            z.style.display = "none";
        }
    }
</script>




@endsection