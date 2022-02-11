@extends('sidebar')

@section('content')
<link rel="shortcut icon" href="https://dashboardpack.com/wp-content/themes/dashboardpack/assets/images/favicon.ico">
<link rel="apple-touch-icon" href="https://dashboardpack.com/wp-content/themes/dashboardpack/assets/images/apple-touch-icon.png">
<link href="{{asset('assets/css/theme.css')}}" rel="stylesheet" media="all">
<link href="{{asset('assets/css/circle.css')}}" rel="stylesheet" media="all">

<!--<div class="container ">-->
    <div id="hideDiv">
        @if(Session::has('alert'))
            <div class="alert alert-info texts" id="success">
                        <li>{{ Session::get('alert') }}</li>
            </div>
        @endif
    </div>
    <div class="card mt-1 mb-3 p-2" style="background-color: #EBECF0; border-radius: 5px;">
        @foreach($datas as $data)
        <div class="row" > 
            <!--<div class="col-lg-4 col-12" ></div>-->
<!--                <div class="form-group col-lg-6 col-md-6 col-12 mt-2" >-->
                
<!--                  <div role="progressbar" class=" profilepic ml-5" aria-valuenow="{{($data->check_me)}}" style="--value:{{($data->check_me)}};">-->
<!--                    <img src="{{asset('/docs/')}}/{{($data->image)}}" style="border-radius: 50%;" class="profile_images logo">-->
<!--                 </div> -->
            
<!--                    <div class="profilepic__content">-->
<!--                      <span class="profilepic__icon"><i class="fa fa-camera"></i></span>-->
<!--                      <a href="{{url('/edit_customer')}}" class="profilepic__text text-white">Edit Profile</a>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                  <div class="row">-->
<!--                   <h3 class="ml-5 mt-3"> {{$data->name}}</h3>-->
<!--                   </div>-->
<!--                </div>-->
                <div class="form-group col-lg-10 col-md-8 col-12 mt-2" >
                    <div class="row">
                    

                 <!--  <div role="progressbar" class=" profilepic ml-5" aria-valuenow="{{($data->check_me)}}" aria-valuemin="0" aria-valuemax="400" style="--value:{{($data->check_me)}};">
                    <img src="{{asset('/docs/')}}/{{($data->image)}}" height="200" width="200px" class="profile_images">
                 </div> -->
                      <div class="clearfix">
                        <div role="progressbar1" class="c100 p{{($data->check_me)}} big progressbar1" style="--val:{{($data->check_me)}};">
                            <span><img src="{{asset('/docs/')}}/{{($data->image)}}" height="220" width="220" class="profile_images" style="border-radius: 50%; margin: 10px; overflow: hidden;"></span>
                            <div class="profilepic__content">
                              <!-- <span class="profilepic__icon"><i class="fa fa-camera"></i></span> -->
                              <!--<a href="{{url('/edit_customer')}}" class="profilepic__text"><i class="fa fa-camera"></i><br>Edit Profile</a>-->
                            </div>
                            <div class="slice">
                                <div class="bar"></div>

                                <div class="fill"></div>
                            </div>
                        </div>
                          
                            
                      </div>
                    </div>   
                    <div class="row">
                        <h3 class="user_names" > {{$data->name}} <br><small> <a href="{{url('/edit_customer')}}" class="edit_btn11">Edit Profile</a></small></h3><br>
                        
                    </div>
            
                   
                  <!-- </div> -->
                   
               
                </div>

                <div class="form-group col-lg-2 col-md-6 col-6 p-3 mt-2 rrb points_t linkss" >
                     <div class="overview-item1 overview-item-c2" style="height: 50px;">
                         <div class="overview__inner">
                             <div class="overview-box1 clearfix">
                                 <div class="icon">
                                     <i class="zmdi zmdi-account-o"></i>
                                 </div>
                                 <div class="text tooltip1">
                                     <h2><i class="fa fa-trophy" aria-hidden="true"></i> {{$data->no_of_refs*50}}</h2>
                                    @foreach($ccdate as $datess)
                                    @if($data->no_of_refs*50 >= $datess->points)
                                     <a href="" data-bs-toggle="modal" data-bs-target="#myModal">
                                     <label class="tooltiptext">Encash <i class="fa fa-rupee"></i> {{$datess->amount}} For {{$datess->points}} Points Till {{$datess->date}} / T&C</label> 
                                     @else
                                     <label class="tooltiptext">Encash <i class="fa fa-rupee"></i> {{$datess->amount}} For {{$datess->points}} Points Till {{$datess->date}} / T&C</label>
                                     @endif
                                    @endforeach
                                     </a>
                                 </div>
                                <!-- The Modal -->
                                    <div class="modal" id="myModal">
                                      <div class="modal-dialog">
                                        <form method="post" action="{{url('/cash_claim_request',$data->id)}}">
                                            @csrf
                                            <div class="modal-content">
                            
                                                  <!-- Modal Header -->
                                                  <div class="modal-header">
                                                    <h4 class="modal-title">Encash Request</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                  </div>
                            
                                                  <!-- Modal body -->
                                                  <div class="modal-body">
                                                        <input type="hidden" name="u_name" class="form-control" value="{{$data->name}}" >
                                                        <input type="hidden" name="mobile" class="form-control" value="{{$data->mobile_no}}" >
                                                         <input type="hidden" name="user_id" class="form-control" value="{{$data->id}}" >
                                                   <div class="row">
                                                    <div class="form-group">
                                                        <input type="text" name="points" class="form-control" value="{{$data->no_of_refs * 5 }}" readonly>
                                                    </div>  
                                                   </div>
                                                   <div class="row">
                                                    <div class="form-group">
                                                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                                                    </div>  
                                                   </div>
                                                   <div class="row">
                                                    <div class="form-group">
                                                        <input type="text" name="upi_acc" class="form-control" placeholder="Account No / UPI No">
                                                    </div>  
                                                   </div>
                                                  </div>
                            
                                                  <!-- Modal footer -->
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                    <button type="subject" class="btn btn-outline-success" >Send</button>
                                                  </div>
                            
                                            </div>
                                        </form>
                                        
                                      </div>
                                </div>
                                <!-- End Modal Form -->
                             </div>
                           <div class="overview-chart">
                                 <canvas id="widgetChart1"></canvas>
                             </div>
                         </div>
                     </div>
                     <br/>
                     <div class="mt-1 text-center">
                         <label>Refer & Earn :</label><br>
                        <a href="whatsapp://send?text={{url('sponsor_link',$data->id.'/'.$data->patients_id)}}" class="btn btn-outline-primary btn1 mt-1" data-action="share/whatsapp/share" target="_blank" id="whtapp">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                            </svg>
                        </a>  
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{url('sponsor_link',$data->id.'/'.$data->patients_id)}}" target="_blank" class="btn btn-outline-primary btn1 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/?url={{url('sponsor_link',$data->id.'/'.$data->patients_id)}}" class="btn btn-outline-primary btn1 mt-1" target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                        </a>
                     </div>
                </div>
         </div>
            <div class="row rrb p-2">
                 <!-- <div class="form-group col-md-12 col-12 col-lg-12"> -->
                    <div class="form-group col-lg-12 col-md-12 col-12 abc d-flex">
                        <blink><span class="fa fa-arrow-circle-right"></span></blink><h4 class="blink_me"><a href="{{url('/pquestion1')}}" class=" btn2 btn-outline-primary btn ml-1">Go Through Questions For Further Evaluation of Hair Health</a></h4>
                    </div>
                <!--</div>-->
            </div>

            
        <hr />
       <div class="container-fluid py-4">
         <div class="row">
            <!-- task, page, download counter  start -->
           <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <a href="{{url('/hair_health')}}">
                                <div class="overview-item overview-item--c1" style="height: 150px;">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>Past Visits</h2>
                                                <span>Dates</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="{{url('/images')}}">
                                <div class="overview-item overview-item--c2" style="height: 150px;">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>Images</h2>
                                                <span>Compare Images</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="{{url('/purchase_history')}}">
                                <div class="overview-item overview-item--c3" style="height: 150px;">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>Purchase History</h2>
                                                <span>Dates</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="{{url('/all_ref_user')}}">
                                <div class="overview-item overview-item--c4" style="height: 150px;">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text ">
                                                <h2>Credit Points</h2>
                                                <span>{{$data->no_of_refs*50}}</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
            <!-- task, page, download counter  end -->
                  </div>
               </div> 
            </div>
        </div>
    </div> @endforeach
            <!--<div id="mybutton" class="abc">-->
                 <!--<button class="feedback">Feedback</button>-->
            <!--     <a href="{{url('/pquestion1')}}" class="feedback btn ">Go Through Questions<br>For Further Evaluation</a>-->
            <!--</div>-->

            @foreach($schedule as $pda)
                @if($pda->dueDate != null)
                    <div id="mybutton">
                            <style type="text/css">
                                .abc{display: none;}
                            </style>
                             <!--<button class="feedback">Feedback</button>-->
                             <a href="{{url('/Follow_up_Questions')}}" class="feedback btn ">Follow Up<br> Questions</a>
                        </div>
                @endif
            @endforeach
</div>
<style type="text/css">
   /*.abcdef{
    margin-left:25px;
   } */
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
blink {
  -webkit-animation: 1s linear infinite condemned_blink_effect; /* for Safari 4.0 - 8.0 */
  animation: 1s linear infinite condemned_blink_effect;
  font-size:40px;
  color:#DAA520;
}

    
    @media (max-width: 991px) {
    blink {
        font-size: 40px;
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
@keyframes growProgressBar {
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
    text-align:center;
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
            text-align: center;
    }

    .overview-box1 .text h2 {
        font-size: 20px;
        margin-top: 0;
    }
}

@media (max-width: 991px) {
    .overview-box1 .text h2 {
        font-size: 26px;
        padding:5px;
    }
}
/*.clearfix img:hover{*/
/*  filter: blur(8px);*/
/*  -webkit-filter: blur(8px);*/
/*}*/
.clearfix:hover .profilepic__content {
  opacity: 1;
}

.clearfix:hover .profilepic__image {
  opacity: .5;

}
.c100{
    margin-left: 315px;
}
.user_names{
    text-align: center;
}
.user_names .edit_btn11{
  /*text-transform: uppercase;*/
  font-size: 16px;
  /*width: 50%;*/
  color: #DAA520;
  margin-top:20px;
  /*text-decoration: none;*/
}
.user_names .edit_btn11:hover{
    color: #000;
}
@media (max-width: 991px) {
   .c100.big{
    margin-left: 55px;
    }
    .linkss{
        margin-left:100px;
    }
}
@media(min-width: 992px and max-width: 1199px){
   .c100{
    margin-left: 170px;
    } 
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
.feedback {
         background-color: transparent;
          color:#DAA520;
          font-weight: bold;
          padding: 10px 20px;
          border-radius: 50px;
          border:solid 2px;
          border-color: #000;
        }
                    
        #mybutton {
          position: fixed;
          bottom: 50px;
          right: 10px;
        }
         #mybutton:hover {
          background-color: #DAA520;
          color:#000;
          border-radius: 50px;                   
        }
        .feedback:hover {
          border-style:none;
        }
        .feedback{
          animation: color-change 3s infinite;
        }

        @keyframes color-change {
          0% { color: #fff; }
          50% { color: goldenrod; }
          100% { color: black; }
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
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  margin-left: -13px;
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
      setTimeout(function() {
           $('#hideDiv').fadeOut('fast');
           }, 3000); 
</script>
@endsection