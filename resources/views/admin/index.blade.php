<?php

use App\Models\User;
use App\Models\SlideImages;

if(!isset($status)) {
        $id=session()->get('id');
        $user_data = User::find($id);
        
        //dd($user_data->status);
        
        $Slideshow = SlideImages::all();
        
        if($user_data->status == "active") {
            $status = "active";
        } else {
            $status = "deactive";
        }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>EVERGOAL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
     <link href="{{asset('css/style.css')}}" rel="stylesheet">
     
       <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
<link href="css/style.css" rel="stylesheet">
      <style>
/*        @media all and (max-width: 490px) {*/
/*    .slid{*/
/*       max-width:50px; max-height:50px !important;*/
/*    }*/
/*}*/
/*        .slid{*/
/*            max-width:1320px; max-height:450px !important;*/
/*        }*/
  </style> 
</head>

<body>
@include('navbar')
<!-- Main Content -->


<div class="container" style="">

          <div class="row">
              <div class="offset-2"></div>
              <div class="col-md-8">
                  <center>	<img  src="{{asset('/img/Evergoal Circle Logo.png')}}"   alt="" style="height: 6rem;"></center>
                    <h1 class="text-center cname"><span style="color:#00284d; ">Welcome to </span></h1><img  src="{{asset('/img/logo123.png')}}" class="img-fluid">

              </div>
          </div>
          
          

              
                  <!-- Slider Images ------------------------------------------- @Tilesh -->
       <div id="myCarousel" class="carousel slide my-5" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner img-fluid" >
      @foreach($Slideshow as $img)

                        <div class="text-center carousel-item @if($loop->first) active @endif">
                          <img class="d-block mx-auto img-fluid slid" src="{{ asset('/storage/' . $img->image) }}"  alt="..." style="">
                        </div>
                
                @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
                  <!-- ----------------------------------------------------------------- -->
          
       <!-- <div class="text-center mt-3">
        <h3 >Reference Link</h3>
        <a  href="#">https://evergreen.com</a>
      </div> -->
<hr>
      <div class="row mt-1 indexsection" style="margin-bottom:10px;" >

        <?php
        if(isset($status) && $status == "deactive") {?>
            <div class="col-md-4 col-4 mt-3">
              <div class="text-center indeximg">
                  <img class="img-fluid img_border card_img_h" src="img/New/activate-01.png" alt=""></br>
                   <a href="{{url('/activate_user')}}" type="button" class="btn  mt-3 btn-lg btn_border btn-block card_button" style="background-color:#190354;">Activate</a>
              </div>
           </div><?php
        } else {
       ?>
        <div class="col-md-4 col-4 mt-3">
          <div class="text-center indeximg text-wrap">
          <img class=" img-fluid img_border card_img_h border border-primary " src="img/New/register.png" alt=""></br>
          
          <a type="button" class="btn  mt-3 btn-lg border border-dark btn-block login_button card_button " style="background-image:url('img/login2.png'); " href="{{url('/registration')}}" >New Registeration</a>
          </div>
        </div> <?php 
        }
        ?>

        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                @endif

        <div class="col-md-4 col-4 mt-3">
        <div class="text-center indeximg">
          <img class="img-fluid img_border card_img_h border border-primary" src="img/New/top up-01.png" alt=""></br>
            <a type="button" class="btn  mt-3 btn-lg border border-dark btn-block login_button card_button" style="background-image:url('img/login2.png'); " href="{{url('/topup')}}">Get Topup</a>
        </div>
         </div>
 
    

       <div class="col-md-4 col-4 mt-3">
          <div class="text-center indeximg">
              <img class="img-fluid img_border card_img_h border border-primary" src="img/New/lucky portal-01.png" alt=""></br>
               <a href="{{url('/portal')}}" type="button" class="btn  mt-3 btn-lg border border-dark btn-block login_button card_button" style="background-image:url('img/login2.png'); ">Lucky Portal</a>
          </div>
       </div>


       
       <div class="col-md-4 col-4 mt-3">
          <div class="text-center indeximg text-wrap">
          <img class=" img-fluid img_border card_img_h border border-primary" src="img/New/task-01.png" alt=""></br>
          
          <a type="button" class="btn  mt-3 btn-lg border border-dark btn-block login_button card_button" style="background-image:url('img/login2.png'); " href="{{url('/task')}}">Task</a>
          </div>
        </div>



        <div class="col-md-4 col-4 mt-3">
        <div class="text-center indeximg">
          <img class="img-fluid img_border card_img_h border border-primary" src="img/New/wallet-01.png" alt=""></br>
            <a type="button" class="btn  mt-3 btn-lg border border-dark btn-block login_button card_button" style="background-image:url('img/login2.png'); " href="{{url('/withdraw')}}">Wallet Withdrawl</a>
        </div>
         </div>
 

       <div class="col-md-4 col-4 mt-3">
          <div class="text-center indeximg">
              <img class="img-fluid img_border card_img_h border border-primary" src="img/New/kyc-01.png" alt=""></br>
               <a href="{{url('/uploadkyc')}}" type="button" class="btn  mt-3 btn-lg border border-dark btn-block login_button card_button" style="background-image:url('img/login2.png'); ">KYC</a>
          </div>
       </div>
       
       

  </div>
</div>

<!-- Close Main Content -->

@include('footer')
</div>

    

<!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>

</html>