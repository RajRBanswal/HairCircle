<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link href="css/style.css" rel="stylesheet">
    
    <title>Evergoal</title>
    <style>
        .para, .fa{
    color:#fff;
    text-align: center;
}

    </style>
  </head>
  <body>
    @include('navbar')

  
    <div class="container " style=""> <!-- Containter-->
      <div class="row">
              <div class="offset-2"></div>
              <div class="col-md-8">
                  <center>	<img  src="{{asset('/img/Evergoal Circle Logo.png')}}"   alt="" style="height: 6rem;"></center>
                    <h1 class="text-center cname"><span style="color:#00284d;">Welcome to </span></h1><img  src="{{asset('/img/logo123.png')}}" class="img-fluid">

              </div>
          </div>
              <hr>
              
              <?php  //print_r($print_data); ?>
		<div class="row justify-content-center mt-3"> <!-- row-->
        <!-- Bootstrap card 1-->
			<div class="col-lg-6 col-md-6 col-sm-12 col-xl-6"> <!-- col-4-->
				@foreach($user as $user1)
						<div class="card card_height" style="height: 10rem; border:none!important">
							<!-- <img class="card-img-top" src="http://propeller.in/assets/images/profile-pic.png" alt="Card image cap"> -->
						
							<!-- Card Body -->
						
							
								<diV class="card-header bg_red  card_header text-center" style="height:100px ;border:none!important;color:#0e4261; ">
								{{$user1->name}}
								<p class="card-subtitle">{{$user1->id}}</p>
								
								
							</diV>
								<div class="card-body bg_red card_footer">
							    
								<!-- Card Title -->
								<!-- <h2 class="card-title">Card title</h2> -->
								<div class="card_image">
									<img src="{{ asset('/storage/' . session()->get('avtar')) }}" class="rounded-circle" alt="Cinque Terre" width="80" height="80">
								</div>
								<div class="bg_red text-light card_header text-center" style="height:100px ;border:none!important "> 
									{{$user1->name}}
								<p class="card-subtitle">{{$user1->id}}</p>
								</div>
								<!-- Card Text -->
								<!-- <p class="card-text text-center">REFERAL LINK <br>
									<a href="#" class="card-text text-center">https://getbootstrap.com/docs/4.0/utilities/colors/</a>
								</p> -->
								
								<!-- Card Action -->
								
							</div>
						</div>
					 @endforeach
				<!-- Bootstrap card 1 close-->
			</div> <!-- col-4-->
		</div><!-- row-->
		
		<div class="row  mt-5">  <!-- row-->
			<div class="col-lg-4 col-md-6 col-sm-12 col-xl-4 mt-3"> <!-- col-lg-4-->
					 <!-- Bootstrap card 2-->
					 <div class="card mt-1  border_color" style="border:none!important"" >
						<!-- <img class="card-img-top" src="http://propeller.in/assets/images/profile-pic.png" alt="Card image cap"> -->
						<diV class="card-header bg_red text-light "" style="height:70px;background-color:#010862;">
						   <P class="card-text text-center" style="font-size: 25px; ">YOUR DIRECT TEAM</P> 
							
						</diV>
						<!-- Card Body -->
						<div class="card-body" style="padding:0.25rem;">
					
						 <!-- <div class="row">-->
							<!--<div class="col-10 border">-->
							<!--	<p>DIRECTS</p>-->
							<!--</div>-->
							<!--<div class="col-2 border text_color_red">-->
							<!--	<p>{{$counts}}</p>-->
							<!--</div>-->
						 <!-- </div>-->
						<!--<div class="row" >-->
						<!--	<div class="col-10 border">-->
						<!--		<p>ACTIVE</p>-->
						<!--	</div>-->
						<!--	<div class="col-2 border text_color_red">-->
						<!--		<p>{{$active}}</p>-->
						<!--	</div>-->
						<!--</div>-->
						<!-- <div class="row" >-->
						<!--	<div class="col-10 border">-->
						<!--		<p>INACTIVE</p>-->
						<!--	</div>-->
						<!--	<div class="col-2 border text_color_red">-->
						<!--		<p>{{$deactive}}</p>-->
						<!--	</div>-->
						<!--</div>-->
						
						
               <div class="row">
              
            <div class="col-lg-12">
                <div class="card" style="background-color: #fc9e24;">

                    <p class="para"> <i class="fas fa-users fa-2x float-left mt-2 ml-5"></i>DIRECTS</br>
                    {{$counts}}</p>

                </div>
            </div>
        </div>
       
             <div class="row mt-1">
              
            <div class="col-md-12">
                <div class="card" style="background-color: #012699;">

                    <p class="para"> <i class="fas fa-user-check fa-2x float-left mt-2 ml-5"></i>ACTIVE</br>
                    
                        {{$active}}</p>

                </div>
            </div>
        </div>
             <div class="row mt-1">
              
            <div class="col-md-12">
                <div class="card" style="background-color: #940427;">

                    <p class="para"><i class="fas fa-user-times fa-2x float-left mt-2 ml-5"></i>INACTIVE</br>
                    
                        {{$deactive}}</p>

                </div>
            </div>
        </div>

							
							<!-- Card Text -->
							
						
							
							<!-- Card Action -->
							
						</div>
					</div>
			  <!-- Bootstrap card 2 close-->
		</div> <!-- col-lg-4-->
 
		<div class="col-lg-4 col-md-6 col-sm-12 col-xl-4 mt-3"> <!-- col-lg-4-->
             <!-- Bootstrap card 3-->
				 <div class="card mt-1  border_color" style="border:none!important;" >
					<!-- <img class="card-img-top" src="http://propeller.in/assets/images/profile-pic.png" alt="Card image cap"> -->
					<diV class="card-header bg_red text-light "" style="height:70px;background-color:#010862;">
					   <P class="card-text text-center" style="font-size: 25px;">YOUR BENIFITS</P> 
						
					</diV>
					<!-- Card Body -->
					<div class="card-body" style="padding:0.25rem;">
						<!-- Card Title -->
						<!-- <h2 class="card-title">Card title</h2> -->
						<!--  <div class="row">-->
						<!--	<div class="col-10 border">-->
						<!--		<p>DAILY BENIFIT</p>-->
						<!--	</div>-->
						<!--	<div class="col-2 border text_color_red">-->
						<!--		<p>{{$daily_benifit}} </p>-->
						<!--	</div>-->
						<!--  </div>-->
						<!--<div class="row" >-->
						<!--	<div class="col-10 border">-->
						<!--		<p>LEVEL BENIFIT</p>-->
						<!--	</div>-->
						<!--	<div class="col-2 border text_color_red">-->
						<!--		<p>{{$level_benifit}}</p>-->
						<!--	</div>-->
						<!--</div>-->
						<!-- <div class="row" >-->
						<!--	<div class="col-10 border">-->
						<!--		<p>TOTAL BENIFIT</p>-->
						<!--	</div>-->
						<!--	<div class="col-2 border text_color_red">-->
						<!--		<p>{{$total_benifit}}</p>-->
						<!--	</div>-->
						<!--</div>-->
						
			 <div class="row">
              
            <div class="col-md-12">
                <div class="card" style="background-color: #f41981;">

                    <p class="para"> <i class="fas fa-rupee-sign fa-2x float-left mt-2 ml-5"></i>DAILY BENEFIT </br>
                        {{$daily_benifit}}</p>

                </div>
            </div>
            
        </div>
        	 <div class="row mt-1">
              
            <div class="col-md-12">
                <div class="card" style="background-color: #07aea7;">

                    <p class="para"> <i class="fas fa-rupee-sign fa-2x float-left mt-2 ml-5"></i>LEVEL BENEFIT</br>
                        {{$level_benifit_display}}</p>

                </div>
            </div>
        </div>
        	 <div class="row mt-1">
              
            <div class="col-md-12">
                <div class="card" style="background-color: #1090f3;">

                    <p class="para"> <i class="fas fa-rupee-sign fa-2x float-left mt-2 ml-5"></i>TOTAL BENIFIT</br>
                        {{$total_benifit}}</p>

                </div>
            </div>
        </div>
						
						
						<!-- Card Text -->
			
						
						<!-- Card Action -->
						
					</div>
				</div>
				<!-- Bootstrap card 3 close-->
		</div> <!-- col-lg-4-->

		<div class="col-lg-4 col-md-6 col-sm-12 col-xl-4 mt-3"> <!-- col-lg-4-->
              <!-- Bootstrap card 2-->
         <div class="card mt-1 border_color" style="border:none!important;" >
            <!-- <img class="card-img-top" src="http://propeller.in/assets/images/profile-pic.png" alt="Card image cap"> -->
            <diV class="card-header bg_red text-light"" style="height:70px;background-color:#010862;">
               <P class="card-text text-center" style="font-size: 25px; ">MEMBER STATISTICS</P> 
                
            </diV>
            <!-- Card Body -->
            <div class="card-body" style="padding:0.25rem;">
                <!-- Card Title -->
                <!-- <h2 class="card-title">Card title</h2> -->
                
                <!-- Card Text -->
                <!--<div class="row">-->
                <!--    <div class="col-10 border">-->
                <!--        <p>Total Id</p>-->
                <!--    </div>-->
                <!--    <div class="col-2 border text_color_red">-->
                <!--        <p>{{$total_count}}</p>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="row" >-->
                <!--    <div class="col-10 border ">-->
                <!--        <p>Total Direct Id</p>-->
                <!--    </div>-->
                <!--    <div class="col-2 border text_color_red">-->
                <!--        <p>{{$counts}}</p>-->
                <!--    </div>-->
                <!--</div>-->
                <!-- Card Action -->
                
                 <div class="row">
              
            <div class="col-md-12">
                <div class="card" style="background-color: #05b737;">

                    <p class="para"> <i class="fa fa-check-circle fa-2x float-left mt-3 ml-5"></i>TOTAL ID</br>
                        {{$total_count}}</p>

                </div>
            </div>
        </div>
        
           <div class="row mt-1">
              
            <div class="col-md-12">
                <div class="card" style="background-color: #1f279a;">

                    <p class="para"> <i class="fa fa-check-circle fa-2x float-left mt-3 ml-5"></i>TOTAL DIRECT ID</br>
                        {{$counts}}</p>

                </div>
            </div>
        </div>
						
                
            </div>
        </div>
		<!-- Bootstrap card 2 close-->
		</div> <!-- col-lg-4-->
    </div> <!-- row-->
  

    </div> <!-- Containter-->
    
    
    @include('footer')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>