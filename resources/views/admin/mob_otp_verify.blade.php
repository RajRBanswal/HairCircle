<!-- Designed by @Swapna
@date 11-05-2021
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>EVERGOAL PROJECT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">

</head>

<body style="">

<!-- Main Content -->


<form action="/mob_otp_verify/{{ $num }}" method="post" class="">
@csrf
<div class="container-fluid">
  <div class="row justify-content-end align-self-center"> <!-- row -->
        <div class="col-md-7 col-lg-7 col-12 mr-0 p-0" style="background-image:url('img/login1.png'); background-repeat: no-repeat; background-size:cover;"> <!-- col-md-7 -->
            <div class="row justify-content-center welcome">
                <div class="col-md-7 col-lg-7 col-sm-7 col-xl-7  text-white text-center">
                    <p class="index_header welcome_size m-2"><strong> Welcome to </strong>
                        
                    </p>
                  

                </div>
            </div>
            <div class="row justify-content-center mb-5 ">
                <div class="col-8">
                     <img  src="{{asset('/img/evergoal_text.png')}}" class=" "  width="100%" >
                </div>
               
            </div>
         
        </div> <!-- col-md-7 -->
		
		<div class="col-md-5 col-lg-5 col-12 login_back_img login" >  <!-- ml-o -->
              <div class=" login_margin" > <!-- login_margin-->
					 <div class=" m-3 ">  <!-- m-3-->
							<div class=" row justify-content-center welcome"> 
								<div class="text-center logo_background">
									<img  src="{{asset('/img/evergoal.png')}}" class=" logo_height"  alt=""></br>
									
								</div>
							</div>
							<div class=" row justify-content-center"> 
								<div class="text-center ">
									<h2 class="index_header heading_color">FORGOT PASSWORD</h2>
									
								</div>
							</div>
							
								@if(Session::has('msg'))
                            <div class="alert alert-danger w-50">
                                <ul>
                        
                                    <li>{{ Session::get('msg') }}</li>
                        
                                </ul>
                            </div>
                            @endif
                            
							<div class=" row justify-content-center mt-2"> 
							  <div class="mt-2"> <!-- form group-->
								<!--	 <LABEL FOR="EMAIL" CLASS="COL-MD-4 COL-FORM-LABELTEXT-MD-RIGHT">{{__('e-mAIL aDDRESS') }}</LABEL> -->
										 <div class="input-group mb-2">
											 <input type="hidden" value="{{ $mob }}" name="hi_mobile">
											 <div class="input-group-prepend">
												 <div class="input-group-text button_radius text_box"><i class="fa fa-unlock-alt fa-2x button_logo" aria-hidden="true"></i></div>
											  </div>
											  
											  <input  type="number"  name="get_otp_verify" class="form-control form-control-lg text_box_radius text_box "  placeholder="Insert Otp" required>
	                                   <br<<div> <p class="">Your OTP :<spam class="text-primary">{{ $num }}</spam></p></div>								  

										</div>
										
									
							  </div> <!-- form group-->
						  </div>

							<div class="row justify-content-center"> <!-- row-->
								<div class="col-8"> <!-- col-6-->
									<div class="row justify-content-center"> <!-- row-->
									  <div class="col-lg-4 ">
										 <button type="submit" class="btn btn-sm btn-block   login_button" style="background-image:url('img/login2.png'); "> {{ __('Verify') }}</button>
									  </div>
								  </div><!-- row-->
							  </div><!-- col-6-->
						   </div> <!-- row-->
					</div> <!-- m-3-->
				</div> <!-- login_margin-->
        </div><!-- ml-o -->
    </div> <!-- row -->
</div>
  	</form>




<!-- Close Main Content -->


<!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>

</html>