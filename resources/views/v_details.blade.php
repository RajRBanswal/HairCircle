@extends('admin.desing.sidebar2')

@section('content')
<link href="{{asset('assets/css/circle.css')}}" rel="stylesheet" media="all">
<div class="container ">
    <div class="card table-responsive-sm mt-3 m-2">
        <h3 class="ml-3 mt-3">VENDOR DETAILS</h3>
        
        <div id="hideDiv">
             @if(Session::has('alert'))
                <div class="alert alert-info texts" id="success">
                        {{ Session::get('alert') }}
                </div>
            @endif
        </div>
        <!-- <h1>{{session('user.name')}}</h1> -->
        <form class="card-body ml-2">
          @csrf
           @foreach($v_datas as $v_data)
            <div class="row">
                <div class="form-group col-lg-4 col-md-4 col-12">
                        <label>Name  </label> :- <label>{{$v_data->name}}</label>
                    <br>
                        <label>Gender  </label> :- <label>{{ $v_data->gender}}</label>
                    <br>
                        <label>Mobile No.  </label> :- <label>{{ $v_data->mobile_no}}</label>
                    <br>
                        <label>Email  </label> :- <label>{{ $v_data->email }}</label>
                </div>
                <div class="form-group col-lg-5 col-md-5 col-12">     
                      <label>Mobile No.  </label> :- <label>{{ $v_data->mobile_no}}</label>
                      <br>
                      <label>Email  </label> :- <label>{{ $v_data->email }}</label>
                      <br>
                      <label>Address  </label> :- <label>{{ $v_data->address }},</label><br><label>{{$v_data->city }},{{ $v_data->pincode}}</label>
                </div>
                <div class="form-group col-md-3 col-lg-3 col-12 rrb">
                    <div class="clearfix">
                        <div role="progressbar1" class="c100 p{{($v_data->p_points)}} big progressbar1" style="--val:{{($v_data->v)}};">
                            <span><img src="{{asset('/docs/')}}/{{($v_data->p_image)}}" height="165" width="165" class="profile_images" style="border-radius: 50%; margin: 8px; overflow: hidden;"></span>
                            <!--<div class="profilepic__content">-->
                              <!-- <span class="profilepic__icon"><i class="fa fa-camera"></i></span> -->
                            <!--  <a href="{{url('/edit_vendor1')}}" class="profilepic__text"><i class="fa fa-camera"></i><br>Edit Profile</a>-->
                            <!--</div>-->
                            <div class="slice">
                                <div class="bar"></div>

                                <div class="fill"></div>
                            </div>
                        </div>
                          
                            
                    </div>
                    <div class="row">
                        <a href="{{url('/edit_vendor1')}}" class="edit_btn12">Edit Profile</a>
                    </div>
                    <!-- <div role="progressbar" class="" aria-valuenow="{{($v_data->p_points)}}" aria-valuemin="0" aria-valuemax="400" style="--value:{{($v_data->p_points)}};">
                        <img src="{{asset('/docs/')}}/{{($v_data->p_image)}}" height="200" width="200" style="border-radius: 50%;">
                    </div> -->
<!--                    <div role="progressbar" class=" profilepic ml-5" aria-valuenow="{{($v_data->p_points)}}" aria-valuemin="0" aria-valuemax="400" style="--value:{{($v_data->p_points)}};">-->
<!--                    <img src="{{asset('/docs/')}}/{{($v_data->p_image)}}" class="profile_images">-->
<!--                 </div> -->
<!--                    <div class="profilepic__content">-->
<!--                      <span class="profilepic__icon"><i class="fa fa-camera"></i></span>-->
<!--                      <a href="{{url('/edit_vendor1')}}" class="profilepic__text text-white">Edit Profile</a>-->
<!--                    </div>-->
<!--                  </div>-->
                </div>
            </div>
            <div class="row">
                <h3>Owner Details</h3>
                <div class="form-group col-md-4 col-lg-4 col-12">
                    <label>Shop Name  :</label>  <label>{{$v_data->shop_name}}</label>
                    <br>
                    <label>Shop Address  :</label>   <label>{{$v_data->address}}, {{$v_data->city}}, {{$v_data->pincode}}</label>
                    <br>
                    <label>Phone Number  :</label>   <label>{{$v_data->phone}}</label>
                </div>
                <div class="form-group col-md-4 col-lg-4 col-12">
                    <label>FSSAI No.  :</label>  <label>{{$v_data->fssai_no}}</label>
                    <br>
                    <label>Shop Act License  :</label>  <label>{{$v_data->license}}</label>
                </div>
            </div>
            <div class="row rrb">
                <div class="form-group col-md-10 col-12 col-lg-10">
                    <label>Referral Link :</label><br>
                        <a href="whatsapp://send?text={{url('sponsor_link',$v_data->id.'/'.$v_data->vens_id)}}" class="btn btn-outline-primary btn1 mt-1" data-action="share/whatsapp/share" target="_blank" id="whtapp">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                            </svg>
                        </a>  
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{url('sponsor_link',$v_data->id.'/'.$v_data->vens_id)}}" target="_blank" class="btn btn-outline-primary btn1 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/?url={{url('sponsor_link',$v_data->id.'/'.$v_data->vens_id)}}" class="btn btn-outline-primary btn1 mt-1" target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="form-group col-md-2 col-12 col-lg-2 rrb">
                        <button type="button" class="btn1 btn btn-outline-primary mt-4" onclick="show_Docs();">Documents</button>  
                    </div> 
                </div>
                <hr />
                <div id="documents">
                    <div class="row" >
                    
                    <div class="form-group col-md-3 col-lg-3 col-12">
                        <label>Aadhar Card</label><br/>
                        <img src="{{asset('/docs/')}}/{{$v_data->adhar}}" width="200" height="200">
                    </div>
                    <div class="form-group col-md-3 col-lg-3 col-12">
                        <label>Pan Card</label><br/>
                        <img src="{{asset('/docs/')}}/{{$v_data->pan}}" width="200" height="200">
                    </div>
                    <div class="form-group col-md-3 col-lg-3 col-12">
                        <label>Shop Act License</label><br/>
                        <img src="{{asset('/docs/')}}/{{$v_data->license}}" width="200" height="200">
                    </div>
                    <div class="form-group col-md-3 col-lg-3 col-12">
                        <label>FSSAI Image</label><br/>
                        <img src="{{asset('/docs/')}}/{{$v_data->fssai}}" width="200" height="200">
                    </div>
                    @if($v_data->fssai == '' || $v_data->adhar == '' || $v_data->pan == '' ||$v_data->license == '')
                    <div class="row rrb">
                        <center><button type="button" class="btn1 btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal1">Upload Documents</button></center>
                    </div>
                    <!-- The Modal -->
                        <div class="modal fade" id="myModal1">
                          <div class="modal-dialog ">
                            <!--<form method="post" action="{{url('/upload_doc',$v_data->id)}}" >-->
                           
                            <div class="modal-content">
                             
                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title"></h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                              </div>
                            <form  action="abc.php" method="post"  class="basicform" enctype="multipart/form-data">
                            <!--@csrf-->
                              <!-- Modal body -->
                              <div class="modal-body">
                                  <div class="row">
                                      <h4>Please Edit Your Profile And Upload Your Documents</h4>
                                  </div>
                                <!--<div class="row ">-->
                                <!--    @if($v_data->adhar == '')-->
                                <!--     <div class="form-group col-md-6 col-12 col-lg-6">-->
                                <!--         <label>Aadhar Card</label>-->
                                <!--         <input type="file" name="adhar" id="adhar" class="form-control">-->
                                <!--     </div>-->
                                <!--    @endif-->
                                <!--    @if($v_data->pan == '')-->
                                <!--     <div class="form-group col-md-6 col-12 col-lg-6">-->
                                <!--         <label>Pan Card</label>-->
                                <!--         <input type="file" name="pan" id="pan" class="form-control">-->
                                <!--     </div>-->
                                <!--    @endif-->
                                <!--</div>-->
                                <!--<div class="row">-->
                                <!--    @if($v_data->license == '')-->
                                <!--     <div class="form-group col-md-6 col-12 col-lg-6">-->
                                <!--         <label>Shop Act License</label>-->
                                <!--         <input type="file" name="lice" id="lice" class="form-control">-->
                                <!--     </div>-->
                                <!--    @endif-->
                                <!--    @if($v_data->fssai == '')-->
                                <!--     <div class="form-group col-md-6 col-12 col-lg-6">-->
                                <!--         <label>FSSAI Image</label>-->
                                <!--         <input type="file" name="fssai" id="fssai" class="form-control">-->
                                <!--     </div>-->
                                <!--    @endif-->
                                <!--</div>-->
                                <!--<div class="row">-->
                                <!--    <div class="form-group col-md-6 col-lg-6 col-12">-->
                                <!--        <label>FSSAI No.</label>-->
                                <!--        <input type="text" name="fssai_no" id="fssai_no" class="form-control">-->
                                <!--    </div>-->
                                <!--</div>-->
                                
                              </div>
                            </form>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Ok</button>
                                <!--<button type="submit" class="btn btn-outline-primary btn1" >Uploads</button>-->
                            </div>
                            </div>
                                
                            
                            
                          </div>
                        </div>
                    
                    @endif
                   
                </div>
                </div>
                
    @endforeach
     </form>
     </div>
</div>
 </body>
<!-- <script src="js/jquery.js"></script>
<script src="js/bootstrapbundle.js"></script>
<script src="js/main.js"></script> -->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <script>
        $(document).ready(function() {
            $("input[type='radio']").change(function() {
                if ($(this).val() == "married") {
                    $("#otherAnswer").show();
                } else {
                    $("#otherAnswer").hide();
                }

        if ($(this).val() == "Divorced") {
                    $("#divorcedans").show();
                } else {
                    $("#divorcedans").hide();
                }
            });
        });
    </script>
 <script>
        $(document).ready(function() {
            $("input[type='radio']").change(function() {
                if ($(this).val() == "married") {
                    $("#otherAnswer").show();
                } else {
                    $("#otherAnswer").hide();
                }

        if ($(this).val() == "Divorced") {
                    $("#divorcedans").show();
                } else {
                    $("#divorcedans").hide();
                }
            });
        });
    </script>
<script>
    setTimeout(function() {
        $("#hideDiv").fadeOut('fast');
    }, 3000);

    function show_Docs() {
        $('#documents').toggle();
    }
</script>
<style type="text/css">
.rrb .btn1:hover{
  background-color: #000;
  color: #fff;
}
.rrb .btn1{
  color: #000;
  border-color: #DAA520;
}
.edit_btn12{
  font-size: 16px;
  color: #DAA520;
  margin-left:50px;
}
 .edit_btn12:hover{
    color: #000;
}
#documents{display:none;}


. @keyframes growProgressBar {
  0%, 33% { --pgPercentage: 0; }
  100% { --pgPercentage: var(--value); }
}

@property --pgPercentage {
  syntax: '<number>';
  inherits: false;
  initial-value: 0;
}

div[role="progressbar"] {
  --size: 14rem;
  --fg: #DAA520;
  --bg: #000;
  --pgPercentage: var(--value);
  animation: growProgressBar 3s 1 forwards;
  width: var(--size);
  height: var(--size);
  border-radius: 50%;
  display: grid;
  place-items: center;
  background: 
    radial-gradient(closest-side, white 90%, transparent 0 99.9%, white 0),
    conic-gradient(var(--fg) calc(var(--pgPercentage) * 1%), var(--bg) 0)
    ;
  font-family: Helvetica, Arial, sans-serif;
  font-size: calc(var(--size) / 5);
  color: var(--fg);
}
  /* @media(max-width: 420){
    .abcdef{
        margin-left: 10px;
    }
    .rrbb{
        margin-left: 25%;
    }
   }*/
.profilepic {
  position: relative;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  /*border-style: solid;*/
  overflow: hidden;
  background-color: #fff;
  border-style: none;
}
.progress .progress-bar{
    width: 100%;
    height: 100%;
    background: none;
    border-width: 1px;
    border-style: solid;
    position: absolute;
    top: 0;
}
.profilepic img{
    border-style: none;
}
.overview-item-c2 {
    background-image: -moz-linear-gradient(90deg, #11998e 0%, #38ef7d 100%);
    background-image: -webkit-linear-gradient(90deg, #11998e 0%, #38ef7d 100%);
    background-image: -ms-linear-gradient(90deg, #11998e 0%, #38ef7d 100%);
}
.overview-item1 {
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    padding-bottom: 0;
    -webkit-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
    margin-bottom: 40px;
}

@media (min-width: 992px) and (max-width: 1519px) {
    .overview-item1 {
        padding-left: 15px;
        padding-right: 15px;
    }
}

.overview-box1 .text {
    font-weight: 300;
    display: inline-block;
}

.overview-box1 .text h2 {
    font-weight: 300;
    color: #fff;
    font-size: 36px;
    /*margin-bottom: 5px;*/
    margin-top: 5px;
}


@media (min-width: 992px) and (max-width: 1199px) {
    .overview-box1 .text {
        display: inline-block;
    }

    .overview-box1 .text h2 {
        font-size: 20px;
        margin-top: 0;
    }
}

@media (max-width: 991px) {
    .overview-box1 .text h2 {
        font-size: 26px;
    }
}
.clearfix img:hover{
  filter: blur(8px);
  -webkit-filter: blur(8px);
}
.clearfix:hover .profilepic__content {
  opacity: 1;
}

.clearfix:hover .profilepic__image {
  opacity: .5;

}
.profilepic__image {
  object-fit: cover;
  opacity: 1;
  transition: opacity .2s ease-in-out;
   border-style: none;
}
.profilepic__content:hover{

}
.profilepic__content {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  color: black;
  opacity: 0;
  transition: opacity .2s ease-in-out;
}

.profilepic__icon {
  color: black;
  padding-bottom: 8px;
}

.fas {
  font-size: 20px;
}

.profilepic__text {
  text-transform: uppercase;
  font-size: 15px;
  width: 50%;
  color: #000;
  text-decoration: none;
  font-weight: bold;
  text-align: center;
  position: absolute;
  z-index: 1;
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
.c100.big {
    font-size: 180px;
}
</style>
       <!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script> -->
@endsection