<!-- <div class="h2">
    Member Details
</div> -->
<!-- <hr> -->

<!-- <div class="row h3"> -->
    <div class="col-lg-6 col-md-6 col-sm-12">
    <div class="row pt-2 pb-4 ">
        <div class="col-4">
            <p><B>Profile Image : </B></p>
        </div>
        <div class="col-2">
            <p><B> : </B></p>
        </div>
        <div class="col-6">
            <span><img src="{{ asset('/storage/' . $open->pimg) }}" class="rounded-circle" style="border: 2px solid black;" alt="Cinque Terre"
                    width="50" height="50"></span>
        </div>
    </div>
    <div class="row pt-2">
        <div class="col-4">
            <p><B>Name </B> </p>
        </div>
        <div class="col-2">
            <p><B> : </B></p>
        </div>
        <div class="col-6"> <span>{{ $open->name }}</span>
        </div>
    </div>

    <div class="row pt-2">
        <div class="col-4">
            <p><B>mobile </B></p>
        </div>
        <div class="col-2">
            <p><B> : </B></p>
        </div>
        <div class="col-6">
            <span>{{ $open->mobile }}</span>
        </div>
    </div>
    <div class="row pt-2">
        <div class="col-4">
            <p><B>Email Id </B></p>
        </div>
        <div class="col-2">
            <p><B> : </B></p>
        </div>
        <div class="col-6">
            <span>{{ $open->email }}</span>
        </div>
    </div>
    <div class="row pt-2">
        <div class="col-4">
            <p><B>You Used Sponser Id </B></p>
        </div>
        <div class="col-2">
            <p><B> : </B></p>
        </div>
        <div class="col-6">
            <span>{{ $open->sponserid }}</span>
        </div>
    </div>
    <div class="row pt-2">
        <div class="col-4">
            <p><B>Status </B></p>
        </div>
        <div class="col-2">
            <p><B> : </B></p>
        </div>
        <div class="col-6">
            <span>{{ $open->status }} </span>
            @if($open->status == 'active')
            <a href="/user_status/deactive/{{ $open->id }}" type="button" class="btn btn-danger btn-lg">Deactive</a>
            @else
            <a href="/user_status/{{ $open->id }}" type="button" class="btn btn-success btn-lg">Active</a>
            @endif
        </div>
    </div>
    <div class="row pt-2">
        <div class="col-4">
            <p><B>Commision </B></p>
        </div>
        <div class="col-2">
            <p><B> : </B></p>
        </div>
        <div class="col-6">
            <span>{{ $open->commisions }}</span>
        </div>
    </div>
    <div class="row pt-2">
        <div class="col-4">
            <p><B>Payment Status </B></p>
        </div>
        <div class="col-2">
            <p><B> : </B></p>
        </div>
        <div class="col-6">
            <span>{{ $open->payment_status }}</span>
        </div>
    </div>
    <div class="row pt-2">
        <div class="col-4">
            <p><B>Chaild Sataus </B></p>
        </div>
        <div class="col-2">
            <p><B> : </B></p>
        </div>
        <div class="col-6">
            <span>{{ $open->child_status }}</span>
        </div>
    </div>
    
    <div class="row pt-2">
        <div class="col-4">
            <p><B>Task </B></p>
        </div>
        <div class="col-2">
            <p><B> : </B></p>
        </div>
        <div class="col-6">
            <a href="/admin_task/{{$open->id}}" type="" class="btn btn-info w-50" style="font-size: 12px"> Task</a>
        </div>
    </div>
        <div class="row pt-2">
            <div class="col-4">
                <p><B>Genealogy Structure</B></p>
            </div>
            <div class="col-2">
                <p><B> : </B></p>
            </div>
            <div class="col-6">
            <a href="/admin_genealogy/{{$open->id}}" type="" class="btn btn-info w-50" style="font-size: 12px"> View</a>
            </div>
        </div>
    
        <div class="row pt-2">
            <div class="col-4">
                <p><B>KYC </B></p>
            </div>
            <div class="col-2">
                <p><B> : </B></p>
            </div>
            <div class="col-6">
            <button type="" id="kyc" class="btn btn-info w-50" style="font-size: 12px">Details</button>
            </div>
        </div>
    
    <div class="row pt-2">
            <!--<div class="col-4">-->
            <!--    <p><B>Payment </B></p>-->
            <!--</div>-->
            <!--<div class="col-2">-->
            <!--    <p><B> : </B></p>-->
            <!--</div>-->
            <!--<div class="col-6">-->
            <!--<button  type="button" id="tran" class="btn btn-info w-50" style="font-size: 12px">Transaction</button>-->
            <!--</div>-->
            
        </div>







    <div class="row pt-5">
        <div class="col-4">
            <a href="{{ url()->previous() }}" class="btn btn-danger w-50 btn-lg" name="" type="submit">Back</a>
        </div>
    </div>
    
       <!--  Modal Add Payment Details --------------------------------------------------------------------- @tilesh -->
    
  <!--  <div id="id01" class="w3-modal">-->
  <!--  <div class="w3-modal-content w3-animate-top">-->
  <!--    <header class="w3-container w3-orange"> -->
  <!--      <span onclick="document.getElementById('id01').style.display='none'" -->
  <!--      class="w3-button w3-display-topright">&times;</span>-->
  <!--      <h2>Payment Details</h2>-->
  <!--    </header>-->
  <!--    <div class="w3-container">-->
  <!--      <p>Empty data.......!</p>-->
        
  <!--    </div>-->
     
  <!--  </div>-->
  <!--</div>-->
    
    
    
    
    
    
    

     <!--  Modal Add KYC Details --------------------------------------------------------------------- @tilesh -->
        <!-- <div id="myModal1" class="modal1">

            <!-- Modal content -->
            <div class="modal-content1">
                <div class="modal-header1">
                    <span class="close1">&times;</span>
                    <h2>KYC Details</h2>
                </div>
                <div class="modal-body1" style="font-size: 15px;">
                    
                @if(!empty($kyc))    
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Options</th>
                          <th scope="col"></th>
                           <th scope="col">Details</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                       
                          <td>Account No</td>
                          <td>:</td>
                          <td>{{$kyc->account_no}}</td>
                       
                        </tr>
                        <tr>
                      
                          <td>Account_type</td>
                          <td>:</td>
                          <td>{{$kyc->account_type}}</td>
                        </tr>
                         <tr>
                      
                          <td>Bank Name</td>
                          <td>:</td>
                          <td>{{$kyc->bank}}</td>
                        </tr>
                         <tr>
                      
                          <td>Branch Name</td>
                          <td>:</td>
                          <td>{{$kyc->branch_name}}</td>
                        </tr>
                         <tr>
                      
                          <td>IFSC</td>
                          <td>:</td>
                          <td>{{$kyc->ifsc}}</td>
                        </tr>
                        
                         <tr>
                      
                          <td>PAN No</td>
                          <td>:</td>
                          <td>{{$kyc->panno}}</td>
                        </tr>
                        
                         <tr>
                      
                          <td>Status</td>
                          <td>:</td>
                          <td>{{$kyc->status}}</td>
                        </tr>
                        
                        <tr>
                      
                          <td>PAN Image</td>
                          <td>:</td>
                          <td>
                              <img src="{{asset('/storage/bank/' . $kyc->image)}}" class="img-fluid" width="80px" height="70px"></td>
                        </tr>
                       
                       <tr>
                      
                          <td>Passbook Picture</td>
                          <td>:</td>
                          <td><img src="{{asset('/storage/bank/passbook/' . $kyc->pass_book)}}" class="img-fluid" width="80px" height="70px"></td>
                        </tr>
                       
                      </tbody>
                    </table>
                    
                @else
                
                <div class="pt-5 text-center">No kyc Details....!</p>
                
                @endif
                  
                    <div class="modal-footer1">
                      
                    </div>
                   
                </div>

            </div>

        </div> -->
    
    
    
    


<!-- </div> -->
   
   <div class="col-lg-6 col-md-6 col-sm-12">
       <h3>Amount Withdraw Details</h3>
       <hr>
       
       <div id="transactions"  data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example mt-3" tabindex="0">
       <table class="table table-striped" id="tran_detail">
  <thead>
    <tr>
      <th scope="col">Transaction ID</th>
      <th scope="col">Amount</th>
      <th scope="col">Reference ID</th>
      <th scope="col">Data</th>
    </tr>
  </thead>
  <tbody>
      @foreach($transaction as $t)
    <tr>
      <th scope="row">{{ $t->transaction_id }}</th>
      <td>{{ $t->payment_amount }}</td>
      <td>{{ $t->reference_id }}</td>
      <td>{{ $t->payment_date }}</td>
    </tr>
   @endforeach
  </tbody>
</table>
       
   </div>
   
    </div>
    
<!-- </div> -->