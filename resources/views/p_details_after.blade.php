@extends('sidebar')

@section('content')
<link href="{{asset('assets/css/circle.css')}}" rel="stylesheet" media="all">
<div class="container ">
        <div id="hideDiv">
             @if(Session::has('alert'))
                <div class="alert alert-info texts" id="success">
                        {{ Session::get('alert') }}
                </div>
            @endif
        </div>
 		<div class="card mb-4 mt-3">

 				<h3 class="mt-3 ml-4">My Profile</h3>

 			<div class="card-body">

          @foreach($datas as $p_data)
          <div class="col-lg-12 col-12">
            <div class="row">
              <div class="form-group col-md-4 col-lg-4 col-12">
                <div class="form-group lnhi">
                  <span class="h-text">Name :</span>
                  <label>{{$p_data->name}}</label>
                </div>
              <!--</div>-->
              <!--<div class="form-group col-md-6 col-12">-->
              <br>
                <div class="form-group lnhi">
                  <label class="h-text">Gender :</label>
                  <label>{{ $p_data->gender}}</label>
                </div>
            <!--  </div>-->
            <!--</div>-->
            <!--<div class="row">-->
            <!--  <div class="form-group col-md-6 col-12">-->
            <br>
                <div class="form-group lnhi">
                  <span class="h-text">Date Of Birth :</span>
                  <label>{{$p_data->date_of_birth}}</label>
                </div>
              <!--</div>-->
              <!--<div class="form-group col-md-6 col-12">-->
              <br>
                <div class="form-group lnhi">
                  <label class="h-text">Marital Status :</label>
                  <label>{{ $p_data->marital_status}}</label>
                </div>
            <!--  </div>-->
            <!--</div>-->
            <!--<div class="row">-->
            <!--  <div class="form-group col-md-6 col-12">-->
            <br>
                <div class="form-group lnhi">
                  <span class="h-text">Religion :</span>
                  <label>{{$p_data->religion}}</label>
                </div>
              <!--</div>-->
              <!--<div class="form-group col-md-6 col-12">-->
              <br>
                <div class="form-group lnhi">
                  <label class="h-text">Medicin Preference :</label>
                  <label>{{ $p_data->medicin_pref}}</label>
                </div>
              <!--</div>-->
            </div>
            <!--<div class="row">-->
              <div class="form-group col-md-5 col-lg-5 col-12">
                <div class="form-group lnhi">
                  <span class="h-text">Profession :</span>
                  <label>{{$p_data->profession}}</label>
                </div>
              <!--</div>-->
              <!--<div class="form-group col-md-6 col-12">-->
              <br>
                <div class="form-group lnhi">
                  <label class="h-text">Weight in Kg :</label>
                  <label>{{ $p_data->weight_in_kg}}</label>
                </div>
            <!--  </div>-->
            <!--</div>-->
            <!--<div class="row">-->
            <!--  <div class="form-group col-md-6 col-12">-->
            <br>
                <div class="form-group lnhi">
                  <span class="h-text">Height In Cm :</span>
                  <label>{{$p_data->height_in_cm}}</label>
                </div>
              <!--</div>-->
              <!--<div class="form-group col-md-6 col-12">-->
              <br>
                <div class="form-group lnhi">
                  <label class="h-text">Address :</label>
                  <label>{{ $p_data->address}}</label>
                </div>
            <!--  </div>-->
            <!--</div>-->
            <!--<div class="row">-->
            <!--  <div class="form-group col-md-6 col-12">-->
            <br>
                <div class="form-group lnhi">
                  <span class="h-text">Mobile No. :</span>
                  <label>{{$p_data->mobile_no}}</label>
                </div>
              <!--</div>-->
              <!--<div class="form-group col-md-6 col-12">-->
              <br>
                <div class="form-group lnhi">
                  <label class="h-text">Email :</label>
                  <label>{{ $p_data->email}}</label>
                </div>
              <!--</div>-->
            </div>
            <div class="form-group col-md-3 col-lg-3 col-12 rrb">
              <!-- <div class=""> -->
<!--                <div role="progressbar" class=" profilepic ml-5" aria-valuenow="{{($p_data->check_me)}}" aria-valuemin="0" aria-valuemax="400" style="--value:{{($p_data->check_me)}};">-->
<!--                    <img src="{{asset('/docs/')}}/{{($p_data->image)}}" class="profile_images">-->
<!--                 </div> -->
<!--                <div class="profilepic__content">-->
<!--                  <span class="profilepic__icon"><i class="fa fa-camera"></i></span>-->
<!--                  <a href="{{url('/edit_customer')}}" class="profilepic__text text-black">Edit Profile</a>-->
<!--                </div>-->
<!--              </div>-->
                    <div class="clearfix">
                        <div role="progressbar1" class="c100 p{{($p_data->check_me)}} big progressbar1" style="--val:{{($p_data->check_me)}};">
                            <span><img src="{{asset('/docs/')}}/{{($p_data->image)}}" height="160" width="160" class="profile_images" style="border-radius: 50%; margin: 10px; overflow: hidden;"></span>
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
                    <div class="row">
                       <a href="{{url('/edit_customer')}}" class="edit_btn12">Edit Profile</a> 
                    </div>
                     
              <!-- @if($p_data->check_me < 100)
               <div class="row">
                 <label class=" text-center">Profile {{($p_data->check_me)}}% Completed</label>
                 <center><a href="{{url('/edit_customer')}}" class="btn btn-outline-primary btn1">Edit  Profile</a></center>
               </div>
             
              @else
              <div class="row">
                   <label class="text-center">Profile 100% Completed</label>
              </div> -->
             
             <!--  <a href="{{url('/edit_customer')}}" class="btn btn-outline-primary btn1 mt-3">Edit Profile</a> -->
              @endif
            </div>
            <
            <div class="row">
              <div class="form-group col-md-6 col-12">
                <span class="h-text">Refer & Earn :</span>
              </div>
            </div>
             <div class="row">
              <div class="form-group col-md-12 col-12">
                <!--<div class="form-group">-->
                <!--  <p style="color:blue; text-align: justify; line-height: 20px">{{url('sponsor_link',$p_data->id.'/'.$p_data->patients_id)}}</p>-->
                <!--</div>-->
                <div class="form-group col-12 rrb">
                        <!--<a href="whatsapp://send?text={{url('sponsor_link',$p_data->id.'/'.$p_data->patients_id)}}" class="btn btn-outline-primary btn1 mt-1" data-action="share/whatsapp/share" target="_blank" id="whtapp"><i class="bi bi-whatsapp" >Send via Whatsapp</i></a>  -->
                        <!--<a href="https://www.facebook.com/sharer/sharer.php?u={{url('sponsor_link',$p_data->id.'/'.$p_data->patients_id)}}" target="_blank" class="btn btn-outline-primary btn1 mt-1"><i class="bi bi-facebook">Share on Facebook</i>  </a>-->
                        <a href="whatsapp://send?text={{url('sponsor_link',$p_data->id.'/'.$p_data->patients_id)}}" class="btn btn-outline-primary btn1 mt-1" data-action="share/whatsapp/share" target="_blank" id="whtapp">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                            </svg>
                        </a>  
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{url('sponsor_link',$p_data->id.'/'.$p_data->patients_id)}}" target="_blank" class="btn btn-outline-primary btn1 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/?url={{url('sponsor_link',$p_data->id.'/'.$p_data->patients_id)}}" class="btn btn-outline-primary btn1 mt-1" target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                        </a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
 				</div>
<style type="text/css">
.lnhi{
    line-height: 2px;
}
  
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
@media (max-width: 991px) {
   .edit_btn12{
    margin-left: 112px;;
    }
    .linkss{
        c
    }
    .clearfix{
       margin-left:50px; 
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
 			</div>
      <!--<div class="row mt-2 mb-4 m-2"> -->
      <!--  <div class="form-group col-md-4 col-12 mt-2 mb-2">-->
      <!--    <input type="submit" name="btnn" id="btnn" class="btn btn-primary" onclick="myFunction();" value="Analysis My Hair Health">-->
      <!--  </div>-->
      <!--  <div class="form-group col-md-4 col-12 ml-2 mt-2 mb-2">-->
      <!--    <input type="submit" name="btnn2" id="btnn2" class="btn btn-primary" onclick="myFunction1();" value="Buy Product">-->
      <!--  </div>-->
      <!--   <div class="form-group col-md-4 col-12 ml-2 mt-2 mb-2">-->
      <!--    <input type="submit" name="btnn3" id="btnn3" class="btn btn-primary" onclick="myFunction2();" value="Order History">-->
      <!--  </div>-->
      <!--</div>-->
        
      <!-- <div class="row p-2 mb-4" id="freeques" style="display: none;" >
        <div class="form-group col-md-12 col-12">
          <center><h4>Analysis My Hair Health</h4></center>
            <br>
             <table class="tabel table-striped table-bordered table-responsive-sm">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Sr. No.</th>
                  <th scope="col">Questions</th>
                  <th scope="col">Answers</th>
                  <th scope="col">Types</th>
                  <th scope="col">Frequency / Result / Quantity</th>
                  <th scope="col">Reason / Duration </th>
                </tr>
              </thead>
              <tbody>
                @foreach($q_data as $q_datas)
                <tr>
                  <td class="col-md-1"></td>
                  <td class="col-md-5">{{ $q_datas->questions}}</td>
                  <td class="col-md-2">{{ $q_datas->answers }}</td>
                  <td class="col-md-2">{{ $q_datas->type}}</td>
                  <td class="col-md-2">{{ $q_datas->freq_res_qua }}</td>
                  <td class="col-md-2">{{ $q_datas->reas_dura }}</td>
              </tr>
                @endforeach
              </tbody>
            </table>
            <br>
            <table class="tabel table-striped table-bordered table-responsive-sm">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Image</th>
                  <th scope="col">Diagnosis</th>
                </tr>
              </thead>
              <tbody>
                @foreach($image as $images)
                <tr>
                  <td ><img src="{{ $images->image}}" style="width:200px; padding: 10px;"></td>
                  <td >{{ $images->suggestion}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
      </div> -->
      <!--<div class="container p-2 mb-4" id="freeques2" style="display: none;">-->
      <!--  <div class="row p-2">-->
      <!--    <table class="tabel table-striped table-bordered">-->
      <!--      <thead class="thead-dark">-->
      <!--        <tr>-->
      <!--          <th class="col-md-2">Image</th>-->
      <!--          <th class="col-md-10"><center>Suggestions</center></th>-->
      <!--        </tr>-->
      <!--      </thead>-->
      <!--      <tbody>-->
           
      <!--    <form method="post" id="online" action="{{url('/offline')}}" enctype="multipart/form-data">-->
      <!--       @csrf-->
              
      <!--    @foreach($image as $images)-->
      <!--      <tr>-->
      <!--          <td class=" form-group col-lg-2">-->
      <!--            <img src="{{ $images->image}}" style="width:200px;">-->
      <!--            <input type="text" name="image" value="{{ $images->image}}" style="display: none;">-->
      <!--          </td>-->
      <!--          <td class="form-group col-lg-10">-->
      <!--            <div class="row p-2">-->
      <!--              <div class="form-group col-md-2 col-12 p-4">-->
      <!--                  <label class="mt-2">Prefer KIT</label><br/>-->
      <!--                  <label class="mt-2">{{ $images->product_name }}</label>-->
      <!--                  <input type="text" name="kit" value="{{ $images->suggestion }}" style="display: none;">-->
      <!--              </div>-->
      <!--              <div class="form-group col-md-3 col-12 mt-2">-->
      <!--                <label class="mt-2">Payment Mode</label>-->
      <!--                <select class="form-select mt-2" name="payment_mode" id="pay_mode" aria-label="Default select example" onchange="show();">-->
      <!--                  <option selected>Payment Mode</option>-->
      <!--                  <option value="Online">Online</option>-->
      <!--                  <option value="Offline">Offline</option>-->
      <!--                </select>-->
      <!--              </div>-->
      <!--              <div class="form-group col-md-3 col-12 mt-2">-->
      <!--                <div id="vendor_li" style="display:none;">-->
      <!--                  <label class="mt-2">Medical List</label>-->
      <!--                  <select class="form-select mt-2" name="vendor_list" id="pay_mode" aria-label="Default select example" >-->
      <!--                    <option selected> Select</option>-->
      <!--                    @foreach($vendors as $vndr)-->
      <!--                      <option value="{{$vndr->id}}">{{$vndr->shop_name}} {{$vndr->address}}</option>-->
      <!--                    @endforeach-->
      <!--                  </select>-->
                      
      <!--                  <label class="mt-2">Quantity</label>-->
      <!--                  <input type="text" name="quntity" class="form-control">-->
      <!--                </div>                       -->
      <!--              </div>-->
      <!--              <div class="form-group col-md-2 col-12 mt-4 ml-1">-->
      <!--                  <center><button type="submit" id="confirm" class="btn btn-primary mt-2 mb-2" >Confirm</button></center>-->

      <!--                  <center>-->
      <!--                    <a href="{{url('/payment1')}}" type="submit" id="pay_now" class="btn btn-primary mt-2 mb-2" style="display:none;">Pay Now</a>-->
      <!--                  </center>-->
      <!--                </div>-->
      <!--            </div>-->

      <!--          </td>-->
      <!--      </tr>-->
      <!--        @endforeach-->
      <!--      </form>-->
            
      <!--      </tbody>-->
      <!--    </table>     -->
      <!--  </div>-->
      <!--</div>-->
      <!--<div class="container p-2 mb-4" id="orderh" style="display: none;">-->
      <!--  <div class="card">-->
      <!--    <div class="card-header pques">-->
      <!--      <center><h4>Order History</h4></center>-->
      <!--    </div>-->
      <!--    <div class="card-body">-->
      <!--      @if($orders)-->
      <!--      @foreach($orders as $ord)-->
      <!--      <div class=" row">-->
      <!--        <div class="form-group col-md-6 col-12">-->
      <!--          <div class="form-group col-md-6 col-6">-->
      <!--            <label>Kit  :</label>-->
      <!--            <label>{{$ord->kit}}</label>-->
      <!--          </div>-->
      <!--        </div>-->
      <!--        <div class="form-group col-md-6 col-12">-->
      <!--            <label>Vendor  :</label>-->
      <!--            @foreach($medi_store as $ords)-->
      <!--            <label>{{$ords->name}}</label>-->
      <!--            @endforeach-->
      <!--        </div>-->
      <!--      </div>-->
      <!--        <div class="row">-->
      <!--          <div class="form-group col-md-6 col-12">-->
      <!--            <label>ShopName  :</label>-->
      <!--            @foreach($medi_store as $ords)-->
      <!--            <label>{{$ords->shop_name}}, {{$ords->address}}</label>-->
      <!--            @endforeach-->
      <!--          </div>  -->
      <!--          <div class="form-group col-md-6 col-12">-->
      <!--            <div class="form-group col-md-6 col-6">-->
      <!--              <label>Payment Mode  :</label>-->
      <!--              <label>{{$ord->pay_mode}}</label>-->
      <!--            </div>-->
      <!--          </div>-->
      <!--      </div>-->
      <!--      <div class=" row">-->
      <!--        <div class="form-group col-md-6 col-12">-->
      <!--            <label>Date / Time :</label>-->
      <!--            <label>{{$ord->created_at}}</label>-->
      <!--        </div>-->
      <!--      </div>-->

      <!--      @endforeach-->
      <!--      @endif-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->
    </div>  
    <!--<div id="mybutton" class="abc">-->
         <!--<button class="feedback">Feedback</button>-->
    <!--     <a href="{{url('/pquestion1')}}" class="feedback btn ">Go Through Questions For Further<br> Evaluation of Hair Health</a>-->
    <!--</div>-->
    <!--Right Side Buttons Start-->
    <!--<div class="sticky-container mb-4 bounceInUp" data-aos="zoom-in" data-aos-delay="100" >-->
    <!--  <ul class="sticky" >-->
    <!--    <li style="">-->
    <!--      <p><a href="{{url('/pquestion1')}}" style="color: #fff;" >Analysis My Hair Health</a></p>-->
    <!--    </li>-->
    <!--  </ul>-->
    <!--</div>-->
    <!--Right Side Buttons End-->
</div>
<style type="text/css">
	.h-text{
		/*color: #fff;*/
    font-weight: bold;
	}
  /*#whtapp{*/
  /*  background-color: #25D366;*/
  /*  border-color: #075E54;*/
  /*}*/
  .feedback {
                     background-color: transparent;
                      color:#DAA520;
                      font-weight: bold;
                      padding: 10px 20px;
                      border-radius: 50px;
                      border:solid 2px;
                      border-color: #000;
                      font-size:12px;
                    }
                    
                    #mybutton {
                      position: fixed;
                      bottom: 50px;
                      right: 10px;
                    }
                     #mybutton:hover {
                      background-color: #DAA520;
                      color:#000;
                      border-radius: 50px;s                 
                    }
                    .feedback:hover {

                      border-style:none;
                    }
                    .feedback{
                      animation: color-change 3s infinite;
                    }

                    @keyframes color-change {
                      0% { color: red; }
                      50% { color: goldenrod; }
                      100% { color: black; }
                    }
              </style>

<script>
    setTimeout(function() {
    $('#hideDiv').fadeOut('fast');
}, 5000); // <-- time in milliseconds
</script>
<script>
  $(document).ready(function(){
    $('#pay_mode').on('change', function() {
      if ( this.value == 'Online')
      {

        $("#vendor_li").hide();
        $("#qunti").hide();
        $("#pay_now").show();
        // $("#online").show();
        $("#confirm").hide();
        // $("#offline").disabled();

      }
      else
      {
        $("#vendor_li").show();
        $("#qunti").show();
        $("#pay_now").hide();
        // $("#online").disabled();
        $("#confirm").show(); 
        // $("#offline").show();
      }
    });
});

  function myFunction() {
  var x = document.getElementById("freeques");
  var y = document.getElementById("freeques2");
  var o = document.getElementById("orderh");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
    o.style.display = "none";
  } else {
    x.style.display = "none";
  }
}

  function myFunction1() {
  var x = document.getElementById("freeques2");
  var y = document.getElementById("freeques");
  var o = document.getElementById("orderh");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
    o.style.display = "none";
  } else {
    x.style.display = "none";
  }
}
function myFunction2(){
  var o = document.getElementById("orderh");
  var x = document.getElementById("freeques2");
  var y = document.getElementById("freeques");
  if (o.style.display === "none") {
    o.style.display = "block";
    x.style.display = "none";
    y.style.display = "none";
  } else {
    o.style.display = "none";
  }
}


  function show(){
    var e = document.getElementById("pay_mode");
    var x = document.getElementById("pay_now");
    var y = document.getElementById("confirm");
    var v = document.getElementById("vendor_li");
    var strUser = e.options[e.selectedIndex].value;
    if(strUser == 'Online'){
      x.style.display = "block";
      y.style.display = "none";
      v.style.display = "none";
    }else{
      x.style.display = "none";
      y.style.display = "block";
      v.style.display = "block";
    }
}

// var e = document.getElementById("ddlViewBy");


</script>
<script>
  setTimeout(function() {
    $('#success').fadeOut('fast');
  }, 3000); 
</script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->


@endsection

