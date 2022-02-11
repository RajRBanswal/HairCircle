<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
    <title>Evergoal</title>
    <style>
		
      .heading_color{
		color: #0c4160;
	  }
	  * {
  box-sizing: border-box;
}

.column {
 
  float:left;
  width: 50%;
  height:80%;
  padding:1px;
 
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}


.p-3 {
     padding: 0rem!important; 
}

@media screen and (min-width: 0px) and (max-width: 400px) {
  #mobileview { display: block; }  /* show it on small screens */
  #mbview {display: block;}
}

@media screen and (min-width: 401px) and (max-width: 1500px) {
  #mobileview { display: none; }   /* hide it elsewhere */
   #mbview {display: none;}
}
@media screen and (min-width: 0px) and (max-width: 400px) {
  #laptopview { display: none; }  /* show it on small screens */
  #lpview{
       display: none;
  }
}

@media screen and (min-width: 401px) {
  #laptopview { display: block; }   /* hide it elsewhere */
  #lpview {  display: block; }
}
.py-4 {
       padding-bottom: 0px!important;
       padding-top: 0px!important;
}
    </style>
  </head>
  <body>
      	@include('navbar')
      	<div class="jumbotron" style="margin-bottom:0px!important"  id="mbview">
      	<div id="carouselExampleSlidesOnly" class="carousel" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('img/Lucky Portal II-01.png')}}" alt="First slide">
      
    </div>
   
  </div>
</div>
<div class="row  mt-2" >
    <div class="col-md-12">
        <center>
 	<a href="{{url('/lucky')}}" ><p class="mt-2 sub_heading1"><b style="color:red;" class="p-3" >  Lucky Portal Terms and Conditions  <b>
					    </br>
					</p></a></center>
					</div>
				
 </div>
</div>

	<div class="container" style="margin-bottom:0px!important"  id="lpview">
	    <div class="row">
      	<div id="carouselExampleSlidesOnly" class="carousel" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('img/Lucky Portal II-02.png')}}"  class="img-fluid" alt="First slide">
      
    </div>
   
  </div>
</div>
</div>
<div class="row  mt-2" >
    <div class="col-md-12">
        <center>
 	<a href="{{url('/lucky')}}" ><p class="mt-2 sub_heading1"><b style="color:red;" class="p-3" >  Lucky Portal Terms and Conditions  <b>
					    </br>
					</p></a></center>
					</div>
				
 </div>
</div>
  
            <div class="container" style="padding:0px!important; ">

        <div class="row p-3"> <!-- row -->
        <div class="offset-1"></div>

            <div class="col-lg-10 col-md-10" id="laptopview">	<!-- col-9 -->
				<div class="row "> <!-- row -->
					
				
                	<div class="col-md-3 col-md-3 col-xs-3  thumb">
						<a href="" class="fancybox" rel="ligthbox">
							<img  src="{{asset('/img/newcoupan/Coupons Design II-01.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>
						
					</div>

					<div class="col-lg-3 col-md-3 col-xs-3  thumb">
						<a href="" class="fancybox" rel="ligthbox">
							<img  src="{{asset('/img/newcoupan/Coupons Design II-03.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>
					</div>


					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design II-02.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="" class="fancybox" rel="ligthbox">
                    <img  src="{{asset('/img/newcoupan/Coupons Design II-32.png')}}" class="zoom img-fluid "  alt="">
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design II-28.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design II-33.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design II-04.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-12.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="" class="fancybox" rel="ligthbox">
							<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-10.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-01.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-28.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-38.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>
					</div>


					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-02.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-30.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-39.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-31.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-04.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="" class="fancybox" rel="ligthbox">
							<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-25.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-14.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-16.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>
					</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-32.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>
					</div>
				   
					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="" class="fancybox" rel="ligthbox">
							<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-06.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-40.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>
					</div>


				
				

					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-27.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="" class="fancybox" rel="ligthbox">
							<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-35.png')}}" class="zoom img-fluid "  alt="">
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design II-36.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="" class="fancybox" rel="ligthbox">
							<img  src="{{asset('/img/newcoupan/Coupons Design II-35.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					   
						<a href="" class="fancybox" rel="ligthbox">
                        <img  src="{{asset('/img/newcoupan/Coupons Design Cars III-36.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>

					</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					   
						<a href="" class="fancybox" rel="ligthbox">
							<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-08.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>

					</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					   
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design II-34.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>

					</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					   
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-11.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>

					</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					   
						<a href="" class="fancybox" rel="ligthbox">
							<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-41.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>

					</div>
					
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					   
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-29.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>

					</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					   
						<a href="" class="fancybox" rel="ligthbox">
							<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-07.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>

					</div>
					
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					   
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-37.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>

					</div>
					
                       	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					   
						<a href="" class="fancybox" rel="ligthbox">
<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-19.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>

					</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					   
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-18.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>

					</div>
					
					 	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					   
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-09.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>

					</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					   
						<a href="" class="fancybox" rel="ligthbox">
						<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-03.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>

					</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					   
						<a href="" class="fancybox" rel="ligthbox">
							<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-34.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>

					</div>
					
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					   
						<a href="" class="fancybox" rel="ligthbox">
						    
						<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-21.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>

					</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					   
						<a href="" class="fancybox" rel="ligthbox">
							<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-33.png')}}" class="zoom img-fluid "  alt="">
						</a>

					</div>
					
					
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					   
						<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-23.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>

					</div>
					
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					   
						<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-05.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>

					</div>
					
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					   
						<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-17.png')}}" class="zoom img-fluid "  alt="">
						   
						</a>

					</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-29.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-13.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-05.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-24.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-26.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-22.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-20.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design Cars III-15.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
								<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-27.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-06.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
					
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design IV-01.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design IV-02.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design IV-03.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design IV-04.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design IV-05.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design IV-06.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design IV-07.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design IV-08.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design IV-09.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design IV-10.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design IV-11.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
					
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design IV-12.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
                         
                         	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design IV-13.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design IV-14.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design IV-15.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design IV-16.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design IV-17.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design IV-18.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Evergoal Coupons V-01.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Evergoal Coupons V-02.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Evergoal Coupons V-03.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Evergoal Coupons V-04.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Evergoal Coupons V-05.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Evergoal Coupons V-06.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Evergoal Coupons V-07.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Evergoal Coupons V-08.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Evergoal Coupons V-09.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Evergoal Coupons V-10.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Evergoal Coupons V-11.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-24.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-25.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-26.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-09.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Evergoal Coupons V-12.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Evergoal Coupons V-13.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-37.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-10.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-11.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-12.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-13.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-14.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-15.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-16.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-17.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-18.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-19.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-20.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-21.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-22.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-23.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-30.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-31.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-38.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-39.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-40.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-41.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-42.png')}}" class="zoom img-fluid "  alt="">
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-43.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-44.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-08.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
						
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					    	<a href="" class="fancybox" rel="ligthbox">
								<img  src="{{asset('/img/newcoupan/Coupons Design II-07.png')}}" class="zoom img-fluid "  alt="">
						  	</a>
						</div>
				</div> <!-- row -->
           </div> <!-- col-9 -->
            
            
           
           </div>
       </div>  <!-- col-9 -->
       <div class="container" id="mobileview" style="margin-bottom:0px!important;">
           
                         <div class="row"  >
                           <div class="column">
                            
                        	<img  src="{{asset('/img/mobilecoupan/Coupons Design II-01.png')}}" class="zoom img-fluid "  alt="">
						    
                          </div>
                          <div class="column">
                          
                        	<img  src="{{asset('/img/mobilecoupan/Coupons Design II-03.png')}}" class="zoom img-fluid "  alt="">
                           
                          </div>
 
                         </div>
                          <div class="row"  >
                           <div class="column">
                            
                        		<img  src="{{asset('/img/mobilecoupan/Coupons Design II-02.png')}}" class="zoom img-fluid "  alt="">
						    
                          </div>
                          <div class="column">
                          
                        	 	<img  src="{{asset('/img/mobilecoupan/Coupons Design II-32.png')}}" class="zoom img-fluid "  alt="">
                          
                          </div>
 
                         </div>
                         
                           <div class="row"  >
                           <div class="column">
                            
                        	 	<img  src="{{asset('/img/mobilecoupan/Coupons Design II-28.png')}}" class="zoom img-fluid "  alt="">
						    
                          </div>
                          <div class="column">
                          	<img  src="{{asset('/img/mobilecoupan/Coupons Design II-33.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                          <div class="row"  >
                           <div class="column">
                             	<img  src="{{asset('/img/mobilecoupan/Coupons Design II-04.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                          	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-12.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>

                  <div class="row"  >
                           <div class="column">
                            	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-10.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                          	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-01.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>

                   <div class="row"  >
                           <div class="column">
                            	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-28.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                          	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-38.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                         
                          <div class="row"  >
                           <div class="column">
                             	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-02.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                          	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-30.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                            <div class="row"  >
                           <div class="column">
                            	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-39.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                           	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-31.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                            <div class="row"  >
                           <div class="column">
                            	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-04.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                          	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-25.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                           <div class="row"  >
                           <div class="column">
                            	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-14.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                          	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-16.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                           <div class="row"  >
                           <div class="column">
                            	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-32.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                          	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-06.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                            <div class="row"  >
                           <div class="column">
                            	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-40.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                           	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-27.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                            <div class="row"  >
                           <div class="column">
                            	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-35.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                          	<img  src="{{asset('/img/mobilecoupan/Coupons Design II-36.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>

                         <div class="row"  >
                           <div class="column">
                             	<img  src="{{asset('/img/mobilecoupan/Coupons Design II-35.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                           	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-36.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                          <div class="row"  >
                           <div class="column">
                            	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-08.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                           	<img  src="{{asset('/img/mobilecoupan/Coupons Design II-34.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                       
                         <div class="row"  >
                           <div class="column">
                             	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-11.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                          	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-41.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>

                          <div class="row"  >
                           <div class="column">
                            	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-29.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                           	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-07.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                          <div class="row"  >
                           <div class="column">
                           	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-37.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                           	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-19.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                          <div class="row"  >
                           <div class="column">
                             	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-18.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                          	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-09.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                          <div class="row"  >
                           <div class="column">
                            	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-03.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                          	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-34.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                          <div class="row"  >
                           <div class="column">
                             	<img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-21.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                          
                        	 <img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-33.png')}}" class="zoom img-fluid "  alt="">
                          
                          </div>
 
                         </div>
                          <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-23.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-05.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                          <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-17.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-29.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                          <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-13.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-05.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                          <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-24.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-26.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                          <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-20.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-22.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                          <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design Cars III-15.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-06.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                          <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-27.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design IV-01.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                         
                         
                            <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design IV-02.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design IV-03.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                           <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design IV-04.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design IV-05.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
      
                      <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design IV-06.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design IV-07.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
      
                      <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design IV-08.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design IV-09.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                      <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design IV-10.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design IV-11.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                      <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design IV-12.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design IV-13.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                      <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design IV-14.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design IV-15.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                      <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design IV-16.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design IV-17.png')}}" class="zoom img-fluid "  alt="">
                          </div>
 
                         </div>
                      <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design IV-18.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Evergoal Coupons V-01.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                    </div>
                      <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Evergoal Coupons V-02.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Evergoal Coupons V-03.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                    </div>
      
                   <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Evergoal Coupons V-04.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Evergoal Coupons V-05.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                    </div>
                   <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Evergoal Coupons V-06.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Evergoal Coupons V-07.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                    </div>
                   <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Evergoal Coupons V-08.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Evergoal Coupons V-09.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                    </div>
      
                   <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Evergoal Coupons V-10.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Evergoal Coupons V-11.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                    </div>
      
                   <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-24.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-25.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                    </div>
                   <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-26.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-09.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                    </div>
      
                   <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Evergoal Coupons V-12.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Evergoal Coupons V-13.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                    </div>
      
                   <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-37.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-10.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                    </div>
      
                   <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-11.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-12.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                    </div>
      
                   <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-13.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-14.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                    </div>
                
                   <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-15.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-16.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                    </div>
                   <div class="row"  >
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-17.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-18.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                    </div>
                   <div class="row">
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-19.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-20.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                    </div>
                   <div class="row">
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-21.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-22.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                    </div>
                   <div class="row">
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-23.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-30.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                    </div>
      
                   <div class="row">
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-38.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-31.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                    </div>
      
                   <div class="row">
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-39.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-40.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                    </div>
      
      
                   <div class="row">
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-41.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-42.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                    </div>
                   <div class="row">
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-43.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-44.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                    </div>
                   <div class="row">
                           <div class="column">
                                                    	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-08.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                          <div class="column">
                                                 	 <img  src="{{asset('/img/mobilecoupan/Coupons Design II-07.png')}}" class="zoom img-fluid "  alt="">
                          </div>
                    </div>
      
      
      
      
       </div>
      

     
<footer class="footer footer-margin1 ">
<div class="container">
    <div class="row">

        <div class="col-md-4 p-3">copyright &copy 2020|All rights reserved</div>

        <div class="col-md-4 p-3">Terms & Conditions|About Us</div>

        <div class="col-md-4 p-3">Follow us:   <img  class="ml-1" src="img/fb.png" alt=""><img class="ml-1" src="img/whatsapp.png" alt="">
       
      </div>

    </div>
</div>  
</footer>

    <!-- </div> -->



    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>