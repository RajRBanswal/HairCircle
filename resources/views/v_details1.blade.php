@extends('admin.desing.sidebar2')

@section('content')
<link rel="shortcut icon" href="https://dashboardpack.com/wp-content/themes/dashboardpack/assets/images/favicon.ico">
<link rel="apple-touch-icon" href="https://dashboardpack.com/wp-content/themes/dashboardpack/assets/images/apple-touch-icon.png">
<link href="{{asset('assets/css/theme.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js" type="text/javascript"></script>
 

<div class="container">
    <div class="card mt-3 mb-5">
        <div id="hideDiv">
             @if(Session::has('alert'))
                <div class="alert alert-info texts" id="success">
                        {{ Session::get('alert') }}
                </div>
            @endif
        </div>
        <!-- <div class="row p-4"> -->
         @foreach($vndr as $data)
        <div class="row">
            <div class="col-lg-2 col-md-2 col-12" ></div>
                <div class="form-group col-lg-8 col-md-8 col-12 mt-2">
                
                  <div role="progressbar" class=" profilepic p-2" >
                    <img src="{{asset('/docs/')}}/{{($data->shop_logo)}}" style="width: 100%; height: 300px;">
                    <!--<a href="{{url('/edit_vendor1')}}">-->
                    <!--    <div class="profilepic__content">-->
                            
                    <!--      <span class="profilepic__icon"><i class="fa fa-camera"></i></span>-->
                    <!--      <a href="" class="profilepic__text text-white">Edit Profile</a>-->
                          
                    <!--    </div>-->
                    <!--</a>-->
                    <center><h3 class="mt-3"> {{$data->name}}</h3><a href="{{url('/edit_vendor1')}}" class="edit_btn11">Edit Profile</a></center>
                  </div>
                      

                    
                </div>

                <div class="form-group col-lg-2 col-md-2 col-12 p-3 mt-2 text-center rrb" >
                    @if($data->status == 1)
                        @foreach($total_amount as $rupee)
                        <h4 class="h3-1 p-1"><i class="fa fa-rupee "></i> {{$rupee->tamount}}</h4>
                        @endforeach
                        <br>
                        <button type="button"  class="btn btn-outline-success activate">Activated</button>
                    @else
                        @foreach($total_amount as $rupee)
                        <h4 class="h3-1 p-1 "><i class="fa fa-rupee "></i>  {{$rupee->tamount}}</h4>
                        @endforeach
                        <br>
                        <a data-toggle="modal" data-target="#exampleModal" type="button" class="btn btn-outline-danger activate">Account Inactive</a>
                    @endif         
                    <div class="mt-2">
                        <label>Referral Link :</label><br>
                        <a href="whatsapp://send?text={{url('sponsor_link',$data->id.'/'.$data->vens_id)}}" class="btn btn-outline-primary btn1 mt-1 " data-action="share/whatsapp/share" target="_blank" id="whtapp">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                            </svg>
                        </a>  
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{url('sponsor_link',$data->id.'/'.$data->vens_id)}}" target="_blank" class="btn btn-outline-primary btn1 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/?url={{url('sponsor_link',$data->id.'/'.$data->vens_id)}}" class="btn btn-outline-primary btn1 mt-1" target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <!--Right Side Buttons Start-->
                   <!--  <div class="sticky-container">
                      <ul class="sticky">
                        <li>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{url('sponsor_link',$data->id.'/'.$data->vens_id)}}" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                          <p>Facebook</p>
                          </a>
                        </li>
                        <li>
                          <a href="whatsapp://send?text={{url('sponsor_link',$data->id.'/'.$data->vens_id)}}" data-action="share/whatsapp/share" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                            </svg>
                          <p>Whatsapp</p>
                          </a>
                        </li>
                        <li>
                          <a href="https://www.instagram.com/?url={{url('sponsor_link',$data->id.'/'.$data->vens_id)}}" target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                            <p>Instagram</p>
                        </a>
                          
                        </li>
                      </ul>
                    </div> -->
                <!--Right Side Buttons End--> 
                         </div>
         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form method="post" action="{{url('/send_act_request')}}" class="basicform" enctype="multipart/form-data">
                @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Activation Request</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                   <div class="modal-body">
                    <div class="p-1">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" value="{{$data->name}}" readonly>
                            <input type="hidden" class="form-control" name="v_id" value="{{$data->id}}" readonly> 
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control" name="mobile" value="{{$data->mobile_no}}" readonly> 
                        </div>
                        <!--<div class="form-group">-->
                        <!--   <input type="text" class="form-control" name="subject" placeholder="Subject" required> -->
                        <!--</div>-->
                        <div class="form-group">
                           <textarea type="text" class="form-control" name="reason" placeholder="Message" required></textarea>
                        </div>
                        <div class="form-group">
                            <select class="form-select" aria-label="Default select example" onchange="getDocs(this.value)" name="doc">
                              <option value="1">Select Option</option>
                              <option value="Adhar">Adhar Card</option>
                              <option value="Pan">Pan Card</option>
                              <option value="Shop_Act_License">Shop Act License</option>
                              <option value="FSSAI">FSSAI </option>
                            </select>
                        </div>
                        <div id="documents_file" style="display:none;">
                            <div class="form-group" >
                               <input type="file" class="form-control" id="my_file" name="my_file" placeholder="Documents" > 
                            </div>
                        </div>
                     </div>
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send</button>
                  </div>  
              </form>
            </div>
          </div>
        </div>
        <div class="row p-2 rrb">
            <div class="form-group col-lg-1 col-md-1 col-4">
                <img src="{{asset('img/logo/fssai2.png')}}" style="width:80px; height: 35px; position: absolute;">
            </div>
            <div class="form-group col-md-7 col-lg-7 col-8">
                <h3 class="mt-2 ml-1">- {{$data->fssai_no}}</h3>
            </div>
            <div class="form-group col-md-4 col-lg-4 col-12 tooltip1 rrb">
                <button type="button" class="btn btn-outline-primary btn2" data-bs-toggle="modal" data-bs-target="#myModal1"> Sold Offline</button>
                   
                        <button type="button" class="btn btn-outline-primary btn2" data-bs-toggle="modal" data-bs-target="#myModal2"><blink><span class="fa fa-arrow-circle-right"></span></blink> Notification</button>
                        
                    
            </div>
        </div>
            <!-- The Modal -->
                <div class="modal" id="myModal1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                   
                    <form action="{{url('/sold_offline',$data->id)}}" method="post">
                        @csrf
                    
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Sold Offline</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                
                      <!-- Modal body -->
                      <div class="modal-body">
                          <div class="row">
                              <div class="form-group">
                                  <select class="form-select form-control" name="product_name" required> 
                                  <option selected>Selected Product</option>
                                  @foreach($product as $prd)
                                    <option value="{{$prd->product_name}}">{{$prd->product_name}}</option>
                                  @endforeach
                            
                                  </select> 
                              </div>
                            
                          </div>
                          <div class="row">
                              <div class="form-group">
                                  <input type="number" name="quantity" class="form-control" placeholder="Enter Quantity" required>
                              </div>
                               
                          </div>
                          <div class="row">
                              <div class="form-group">
                                    <!--<input type="text" class="form-control" id="txtDate">-->
                                  <!--<input type="date " id="datepicker" value="<?php echo date('d-m-Y'); ?>" />-->
                                  <input type="text" id="datepicker" name="dates"   data-date-format="dd-mm-yyyy" class="datepicker form-control" placeholder="<?php echo date('d-m-Y'); ?>" required>
                                  <!--<input type="text" id="datepicker" name="date" class="form-control datepicker"> -->
                              </div>
                             
                          </div>
                          <!--<div class="row">-->
                          <!--    <div class="form-group">-->
                          <!--        <input type="number" name="mobile" id="mobile" placeholder="Customer Mobile No." onfocusout="validatestudPhone()" class="form-control">-->
                          <!--    </div>-->
                               
                          <!--</div>-->
                      </div>
                
                      <!-- Modal footer -->
                      <div class="modal-footer rrb">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-primary btn1" >Save</button>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
            <!-- End The Modal -->
        <hr/>
        <!-- The Modal -->
        <div class="modal" id="myModal2">
          <div class="modal-dialog">
            <div class="modal-content">
        
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Notification</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
        
              <!-- Modal body -->
              <div class="modal-body">
                @if($data->message != "")
                <div class="row">
                    <div class="form-group">
                        Date : <label class="tooltiptext"><?php echo date('d-m-Y', strtotime($data->updated_at)); ?></label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                       Message : <label class="tooltiptext">{{$data->message}}</label>
                    </div>
                </div>
                    
                    
                @endif
              </div>
        
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              </div>
        
            </div>
          </div>
        </div>
    <!--End Modal Form-->
            
        @endforeach
    <div class="row p-2">
        <div class="form-group col-lg-6 col-md-6 col-12">
           <h3> Customer List </h3>
        </div>
        <div class="form-group col-lg-6 col-md-6 col-12">
            <div class="row">
                <div class="form-group col-lg-6 col-md-6 col-12">
                    <div class="search">
                        <input class="search-input form-control search" type="text" onkeyup="search();" id="search-input" placeholder="Search Here">
                    </div>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-12">
                    <div id="reportrange" class="pull-left" style="background: #fff; cursor: pointer; padding: 7px; border: 1px solid #DAA520; width:100%">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                        <span></span> <b class="caret"></b>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!--</div>-->
         <div class="container table-full-width table-responsive" id="">
            <table id="example" class="table table-striped" style="width:100%">   
                <thead >
                    <tr>
                        <th class="order">Date</th>
                        <th class="order">Name</th>
                        <th class="order">Product Name</th>
                        <th class="order">Quantity</th>
                        <th class="order">Buying Price</th>
                        <!-- <th>Payment Mode</th> -->
                        <!-- <th>Vendor</th> -->
                        <th class="order">Status</th>
                        <th>Action</th>
                    </tr>
                        
                </thead>
                <!-- <tbody id="table">
                    
                </tbody> -->
                 <tbody id="table1">
                </tbody>
            </table>
        </div> 
        
    </div>
    
    
</div>    
<style type="text/css">
    .search{
        border-color: #DAA520;
        border-radius:0px;
    }

    #myElem{
      font-size: 15px;  
    }
     .rrb .btn1:hover{
         background-color: #000;
         color: #fff;
      }
     .rrb .btn1{
        color: #000;
        border-color: #DAA520;
        width: 100px;
    
     }
    .rrb .btn2:hover{
         background-color: #000;
         color: #fff;
    }
    .rrb .btn2{
        color: #000;
        border-color: #DAA520;
    
     }
     
     .edit_btn11{
  /*text-transform: uppercase;*/
  font-size: 16px;
  /*width: 50%;*/
  color: #DAA520;
  /*margin-top:20px;*/
  /*text-decoration: none;*/
}
.edit_btn11:hover{
    color: #000;
}
blink {
  -webkit-animation: 1s linear infinite condemned_blink_effect; /* for Safari 4.0 - 8.0 */
  animation: 1s linear infinite condemned_blink_effect;
  font-size:20px;
  color:#DAA520;
}

    
    @media (max-width: 991px) {
    blink {
        font-size: 20px;
        color: #DAA520;
        margin-top: 10px;
    }
}
/* for Safari 4.0 - 8.0 */
@-webkit-keyframes condemned_blink_effect {
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}

@keyframes condemned_blink_effect {
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}
</style>
<style>
.tooltip1 {
  position: relative;
  /*display: inline-block;*/
  /*border-bottom: 1px dotted black;*/
}

.tooltip1 .tooltiptext {
  visibility: hidden;
  /*width: 120px;*/
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip1:hover .tooltiptext {
  visibility: visible;
}
</style>
 <script type="text/javascript">
$( ".datepicker" ).datepicker({
   format: 'dd-mm-yyyy'
});
 
 
 function getDocs(id){
     if(id == 1){
        $('#documents_file').hide(); 
     }else{
        $('#documents_file').show();
     }
 }
//     function table_sort() {
//       const styleSheet = document.createElement('style')
//       styleSheet.innerHTML = `
//             .order-inactive span {
//                 visibility:hidden;
//             }
//             .order-inactive:hover span {
//                 visibility:visible;
//             }
//             .order-active span {
//                 visibility: visible;
//             }
//         `
//       document.head.appendChild(styleSheet)

//       document.querySelectorAll('th.order').forEach(th_elem => {
//         let asc = true
//         const span_elem = document.createElement('span')
//         span_elem.style = "font-size:0.8rem; margin-left:0.5rem"
//         span_elem.innerHTML = "▼"
//         th_elem.appendChild(span_elem)
//         th_elem.classList.add('order-inactive')

//         const index = Array.from(th_elem.parentNode.children).indexOf(th_elem)
//         th_elem.addEventListener('click', (e) => {
//           document.querySelectorAll('th.order').forEach(elem => {
//             elem.classList.remove('order-active')
//             elem.classList.add('order-inactive')
//           })
//           th_elem.classList.remove('order-inactive')
//           th_elem.classList.add('order-active')

//           if (!asc) {
//             th_elem.querySelector('span').innerHTML = '▲'
//           } else {
//             th_elem.querySelector('span').innerHTML = '▼'
//           }
//           const arr = Array.from(th_elem.closest("table").querySelectorAll('tbody tr'))
//           arr.sort((a, b) => {
//             const a_val = a.children[index].innerText
//             const b_val = b.children[index].innerText
//             return (asc) ? a_val.localeCompare(b_val) : b_val.localeCompare(a_val)
//           })
//           arr.forEach(elem => {
//             th_elem.closest("table").querySelector("tbody").appendChild(elem)
//           })
//           asc = !asc
//         })
//       })
//     }

//     table_sort();



// </script>
<script type="text/javascript">
function validatestudPhone(){
     var phone = $('#mobile').val();
      if (isNaN(phone) || phone.length < 10 || phone.length > 10) {
        alert(" please enter a valid phone number");
        return false;
      }
      else 
      {
        return true;
      }
}

$( ".datepicker" ).datepicker({
       dateFormat: 'dd-mm-yy'
    });
</script>
<script type="text/javascript">
      function select_fil(id){
            $(document).ready(function() {
                if(id == 1){
                    $('#search1').show();
                    $('#calender1').hide();
               }else if(id == 2){
                    $('#calender1').show();
                    $('#search1').hide();
               }else{
                   $('#search1').hide();
                   $('#calender1').hide(); 
               }
            });
        }
    

    $("#myElem").show();
    setTimeout(function() {
        $("#hideDiv").fadeOut('fast');
    }, 3000);
</script>
<script type="text/javascript">
    function search(){
    $("#search-input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#table1 tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
}
</script>


<script type="text/javascript">
    function Search_date(start, end){
        $(document).ready(function(){
          var sdate = moment(start).format('YYYY-MM-DD');
          var ldate = moment(end).format('YYYY-MM-DD');

            $.ajax({
               method:"get",
               url:'all_cstmr/'+sdate+'/'+ldate,
               dataType:"json",
               success:function(data)
               {
                  console.log(data);
                   $('#table1').empty();
                    $.each(data, function(key,value){
                        $('#table').hide();
                        if (value.status == 1) {
                            $('#table1').append('<tr><td>'+value.date+'</td><td>'+value.name+'</td><td>'+value.kit+'</td><td>'+value.quantity+'</td><td>'+value.buying_price+'</td><td><label style="color:green; font-weight:bold;">Confirm</label></td><td class="rrb"><a href='+"{{url('/update_customer_details')}}/"+value.id+' class="btn btn-outline-primary btn1 mr-1 mt-1">View</a></td></tr>');
                        }else{
                            $('#table1').append('<tr><td>'+value.date+'</td><td>'+value.name+'</td><td>'+value.kit+'</td><td>'+value.quantity+'</td><td>'+value.buying_price+'</td><td><label style="color:red; font-weight:bold;">Pending</label></td><td class="rrb"><a href='+"{{url('/update_customer_details')}}/"+value.id+' class="btn btn-outline-primary btn1 mr-1 mt-1">View</a><a href='+"{{url('/update_cust_d')}}/"+value.user_id+' class="btn btn-outline-primary btn1 mt-1">Confirm</a></td></tr>');
                        }   
                    });

               }
            });
        });
    }
    
    function get_new_vndor(start, end){
    
}
</script>
</script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->


<style type="text/css">
    .bg {
    background-image: linear-gradient(to bottom right, #403836, #de5f35);
    }

    #success{
        font-size: 20px;
    }
    .h3-1{
        border: solid 1px #DAA520;
        border-radius: 20px;
        color: #DAA520;
    }
    .table{
        font-size: 15px;
        font-weight: bold;
    }
    #myElem{
      font-size: 15px;  
    }
    .rrb .btn1:hover{
         background-color: #000;
         color: #fff;
      }
     .rrb .btn1{
        color: #000;
        border-color: #DAA520;
     }
    .activate{
      animation: color-change 3s infinite;
    }

    @keyframes color-change {
      0% { color: #fff; }
      50% { color: goldenrod; }
      100% { color: black; }
    }

     .profilepic {
  position: relative;
  overflow: hidden;
  background-color: #fff;
}

/*.profilepic img:hover{*/
/*  filter: blur(8px);*/
/*  -webkit-filter: blur(8px);*/
/*}*/
.profilepic:hover .profilepic__content {
  opacity: 1;
}

.profilepic:hover .profilepic__image {
  opacity: .5;

}

.profilepic__image {
  object-fit: cover;
  opacity: 1;
  transition: opacity .2s ease-in-out;
   
}
.profilepic__content:hover{

}
.profilepic__content {
  position: absolute;
  top: -250;
  right: 0;
  bottom: 0;
  left: 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: end;
  color: black;
  opacity: 0;
  transition: opacity .2s ease-in-out;
}

.profilepic__icon {
  color: black;
  padding-bottom: 8px;
  margin-right: 35px;
  align-items: end;
}

.fas {
  font-size: 20px;
}

.profilepic__text {
    text-transform: uppercase;
    font-size: 12px;
    width: 50%;
    color: #000;
    text-align: end;
    margin-right: 10px;
}

.align-items-center {
    -ms-flex-align: center!important;
    /*align-items: center!important;*/
}

.text-c-yellow {
    color: #fe9365;
}
.f-w-600 {
    font-weight: 600;
}
.text-muted {
    color: #919aa3 !important;
}
.text-right {
    text-align: right!important;
}
/*Right Side Buttons Start*/
    .sticky-container{
        padding: 0px;
        margin: 0px;
        position: fixed;
        right: -119px;
        top: 220px;
        width: 200px;
    }

    .sticky li{
        list-style-type: none;
        background-color: #000;
        color: #efefef;
        height: 43px;
        padding: 0px;
        border-radius: 5px;
        margin: 0px 0px 1px 0px;
        -webkit-transition:all 0.25s ease-in-out;
        -moz-transition:all 0.25s ease-in-out;
        -o-transition:all 0.25s ease-in-out;
        transition:all 0.25s ease-in-out;
        cursor: pointer;
        filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); 
    filter: gray; 
    -webkit-filter: grayscale(100%); 
    }

    .sticky li:hover{
        margin-left: -115px;
        filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0\'/></filter></svg>#grayscale");
                -webkit-filter: grayscale(0%);
    }

    .sticky li a svg{
        float: left;
        margin: 5px 5px;
        margin-right: 10px;
        border-radius: 5px;
        padding: 2px;
        color: #fff;
        background-color: green;
    }

    .sticky li a p{
    float:left;
        padding: 0px;
        margin: 0px;
        color: #fff;
        text-transform: uppercase;
        line-height: 43px;
    }
/*Right Side Buttons End*/
</style>

<!-- <script type="text/javascript">
    setTimeout(function() {
        $("#hideDiv").fadeOut('fast');
    }, 3000);
</script>
<script>
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
            
    </script> -->



@endsection